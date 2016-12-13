<?php

/*
|--------------------------------------------------------------------------
| Theme support
|--------------------------------------------------------------------------
|
| title-tag: allows theme to put content in <title> tag
| menus: allows theme to have menus
|
*/

add_theme_support( 'title-tag' );
add_theme_support( 'menus' );

/*
|--------------------------------------------------------------------------
| Styles and scripts
|--------------------------------------------------------------------------
|
| Register default styles and scripts here
|
*/

function rest_theme_scripts() {
    // Styles
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/normalize.css', false, '3.0.3' );
    wp_enqueue_style( 'style', get_stylesheet_uri(), array( 'normalize' ) );

    // Pace
    wp_enqueue_script( 'pace', get_template_directory_uri() . '/assets/js/pace.min.js', array(), '1.0.0', true );

    // 3rd party scripts from default setup that will not be used
    wp_deregister_script('mailpoet_vendor');
    wp_deregister_script('mailpoet_public');
    wp_deregister_style('mailpoet_public');

    wp_enqueue_script( 'insane-vue', get_stylesheet_directory_uri() . '/lib/dist/build.js', array(), '1.0.0', true );

    $base_url  = esc_url_raw( home_url() );
    $base_path = rtrim( parse_url( $base_url, PHP_URL_PATH ), '/' );
    wp_localize_script( 'insane-vue', 'wp', array(
        'root'          => esc_url_raw( rest_url() ),
        'base_url'      => $base_url,
        'base_path'     => $base_path ? $base_path . '/' : '/',
        'nonce'         => wp_create_nonce( 'wp_rest' ),
        'site_name'     => get_bloginfo( 'name' ),
        'routes'        => rest_theme_routes(),
        'assets_path'   => get_stylesheet_directory_uri() . '/assets',
        'lang'          => get_language_strings(),

        // Configurations
        'keys'          => [
            'mapbox'    => env('MAPBOX_TOKEN'),
        ],

        // Inline configurations
        'show_on_front' => get_option('show_on_front'), // (posts|page) Settings -> Reading -> Front page displays
        'page_on_front' => get_option('page_on_front'), // (int) Settings -> Reading -> Front page displays when "page" is selected and type is "Front page"
        'page_for_posts'=> get_option('page_for_posts'), // (int) Settings -> Reading -> Front page displays when "page" is selected and type is "Posts page"
        'logo'          => true,    // Show image logo
        'megamenu'      => true,    // Use mega menu

    ) );
}

add_action( 'wp_enqueue_scripts', 'rest_theme_scripts' );

function get_language_strings() {
    return [
        'show_menu' => __('Show menu', 'rest'),
        'search_placeholder' => __('Search', 'rest'),
    ];
}

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
|
| Register theme routes here
|
*/

function rest_theme_routes() {
    $routes = array();

    $query = new WP_Query( array(
        'post_type'      => 'any',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
    ) );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            $routes[] = array(
                'id'        => get_the_ID(),
                'type'      => get_post_type(),
                'slug'      => basename( get_permalink() ),
                'link'      => str_replace( site_url(), '', get_permalink() ),
                'template'  => get_page_template_slug()
            );
        }
    }

    wp_reset_postdata();

    return $routes;
}

// Hide admin bar until links in Edit page are eventually resolved
show_admin_bar(false);

/*
|--------------------------------------------------------------------------
| Menus
|--------------------------------------------------------------------------
|
| Register theme menu positions
|
*/

register_nav_menus( array(
    'primary'   => 'Primary Menu',
    'footer'    => 'Footer Menu',
    'mega'      => 'Mega Menu',
) );

/*
|--------------------------------------------------------------------------
| ACF
|--------------------------------------------------------------------------
|
| All ACF fields to rest api
|
*/

add_action( 'rest_api_init', 'slug_register_acf' );
function slug_register_acf() {
    $post_types = get_post_types(['public' => true], 'names');
    foreach ($post_types as $type) {
        register_api_field( $type,
            'acf',
            array(
                'get_callback'    => 'slug_get_acf',
                'update_callback' => null,
                'schema'          => null,
            )
        );
    }
}
function slug_get_acf( $object, $field_name, $request ) {
    if ( function_exists('get_fields') )
    {
        $fields = get_fields($object[ 'id' ]);
        return $fields !== false ? $fields : [];
    } else
    {
        return [];
    }
}

/*
|--------------------------------------------------------------------------
| Page templates
|--------------------------------------------------------------------------
|
| Register custom page templates without actually
| creating files.
|
*/

function get_custom_page_templates() {
    $templates = [
        'map' => 'Map template',
    ];
    return apply_filters( 'custom_page_templates', $templates );
}

add_action( 'edit_form_after_editor', 'custom_page_templates_init' );
add_action( 'load-post.php', 'custom_page_templates_init_post' );
add_action( 'load-post-new.php', 'custom_page_templates_init_post' );

function custom_page_templates_init() {
    remove_action( current_filter(), __FUNCTION__ );
    if ( is_admin() && get_current_screen()->post_type === 'page' ) {
        $templates = get_custom_page_templates(); // the function above
        if ( ! empty( $templates ) )  {
            set_custom_page_templates( $templates );
        }
    }
}

function custom_page_templates_init_post() {
    remove_action( current_filter(), __FUNCTION__ );
    $method = filter_input( INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_STRING );
    if ( empty( $method ) || strtoupper( $method ) !== 'POST' ) return;
    if ( get_current_screen()->post_type === 'page' ) {
        custom_page_templates_init();
    }
}

function set_custom_page_templates( $templates = array() ) {
    if ( ! is_array( $templates ) || empty( $templates ) ) return;
    $core = array_flip( (array) get_page_templates() ); // templates defined by file
    $data = array_filter( array_merge( $core, $templates ) );
    ksort( $data );
    $stylesheet = get_stylesheet();
    $hash = md5( get_theme_root( $stylesheet ) . '/' . $stylesheet );
    $persistently = apply_filters( 'wp_cache_themes_persistently', false, 'WP_Theme' );
    $exp = is_int( $persistently ) ? $persistently : 1800;
    wp_cache_set( 'page_templates-' . $hash, $data, 'themes', $exp );
}

/*
|--------------------------------------------------------------------------
| Sidebars
|--------------------------------------------------------------------------
|
| Register sidebars for widgets.
|
*/

register_sidebar([
    'name'          => __( 'Primary sidebar', 'rest' ),
    'id'            => 'primary-sidebar',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>'
]);
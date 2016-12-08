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
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/normalize.css', false, '3.0.3' );
	wp_enqueue_style( 'style', get_stylesheet_uri(), array( 'normalize' ) );

	$base_url  = esc_url_raw( home_url() );
	$base_path = rtrim( parse_url( $base_url, PHP_URL_PATH ), '/' );

    wp_enqueue_script( 'pace', get_template_directory_uri() . '/assets/js/pace.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'rest-theme-vue', get_template_directory_uri() . '/rest-theme/dist/build.js', array(), '1.0.0', true );
	wp_localize_script( 'rest-theme-vue', 'wp', array(
		'root'          => esc_url_raw( rest_url() ),
		'base_url'      => $base_url,
		'base_path'     => $base_path ? $base_path . '/' : '/',
		'nonce'         => wp_create_nonce( 'wp_rest' ),
		'site_name'     => get_bloginfo( 'name' ),
		'routes'        => rest_theme_routes(),
        'assets_path'   => get_template_directory_uri() . '/assets/',
        'lang'          => get_language_strings(),

        // Inline configurations
        'logo'          => true,    // Show image logo
        'megamenu'      => true,    // Use mega menu
    ) );
}

add_action( 'wp_enqueue_scripts', 'rest_theme_scripts' );


function get_language_strings() {
    return [
        'show_menu' => __('Show menu', 'rest')
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
				'id'   => get_the_ID(),
				'type' => get_post_type(),
				'slug' => basename( get_permalink() ),
                'link' => str_replace( site_url(), '', get_permalink() ),
			);
		}
	}

	wp_reset_postdata();

	return $routes;
}

/*
|--------------------------------------------------------------------------
| Menus
|--------------------------------------------------------------------------
|
| Register theme menu positions
|
*/

register_nav_menus( array(
    'primary' => 'Primary Menu',
    'footer' => 'Footer Menu',
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
        return get_fields($object[ 'id' ]);
    else
        return [];
}
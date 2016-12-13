<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>

    <!-- Typekit -->
    <script src="https://use.typekit.net/zuw7ihx.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body>

    <div id="content">
        <?php
        if ( have_posts() ) :

            if ( is_home() && ! is_front_page() ) {
                echo '<h1>' . single_post_title( '', false ) . '</h1>';
            }

            while ( have_posts() ) : the_post();

                if ( is_singular() ) {
                    the_title( '<h1>', '</h1>' );
                } else {
                    the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
                }

                the_content();

            endwhile;

        endif;
        ?>
    </div>

    <div id="app"></div>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-86752136-1', 'auto');
        // Do not send pageview on page load, it will be sent by the router
        // ga('send', 'pageview');

    </script>

    <?php wp_footer(); ?>

</body>
</html>
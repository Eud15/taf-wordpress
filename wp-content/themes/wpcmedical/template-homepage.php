<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package wpcmedical
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

			<?php
			/**
			 * Functions hooked in to homepage action
			 * @see wpcmedical_homepage_products       - 20
			 */
			do_action( 'homepage' );
			?>

        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();

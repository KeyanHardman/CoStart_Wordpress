<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="background-wrapper">
    <div class="container-wrap">
        <div class="content">
            <section class="sidebar">
                <img src="<?php echo get_template_directory_uri(); ?>/images/funcatstars.jpg">
            </section>
            <section class="main-column" role="main">
                <header class="page-header">
                    <h1 class="page-title">404 Not Found</h1>
                    <h2 class="page-title">Oh boy...this is embarassing</h2>
                </header>

                <div class="page-content">
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfourteen' ); ?></p>

                    <?php get_search_form(); ?>
                </div><!-- .page-content -->
            </section><!-- #content -->
        </div>
    </div><!-- #primary -->
</div>
<?php

get_footer();

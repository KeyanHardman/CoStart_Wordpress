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
                
            </section>
            <section class="main-column" role="main">
                <header class="page-header">
                    
                </header>

                <div class="page-content">
                    <?php
                        // Start the Loop.
                        while ( have_posts() ) : the_post();

                            // Include the page content template.
                            get_template_part( 'content', 'page' );

                        endwhile;
                    ?>
                </div><!-- .page-content -->
            </section><!-- #content -->
        </div>
    </div><!-- #primary -->
</div>
<?php

get_footer();

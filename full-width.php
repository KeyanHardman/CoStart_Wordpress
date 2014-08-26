<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!-- <div class="background-wrapper">
    <div class="container-wrap">
        <div class="content"> -->
                    <?php
                        // Start the Loop.
                        while ( have_posts() ) : the_post();

                            // Include the page content template.
                            get_template_part( 'content', 'page' );

                        endwhile;
                    ?>
        </div>
    </div>
</div>

<?php
get_footer();

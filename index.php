<?php get_header(); ?>

<div class="background-wrapper">
    <div class="container-wrap">
        <div class="content">
            <aside class="sidebar">
                <h3>Events</h3>

                <div class="month">
                    <h4>July</h4>
                    <div class="event">
                        <div class="day">15</div>
                        <div class="event-details">
                            Startup Snapshot
                            7:00PM-9:00PM
                            RSVP on Eventbrite
                        </div>
                    </div>
                    <div class="event">
                        <div class="day">24</div>
                        <div class="event-details">
                            Startup Snapshot
                            7:00PM-9:00PM
                            RSVP on Eventbrite
                        </div>
                    </div>
                </div>
                <div class="month">
                    <h4>August</h4>
                    <div class="event">
                        <div class="day">2</div>
                        <div class="event-details">
                            Startup Snapshot
                            7:00PM-9:00PM
                            RSVP on Eventbrite
                        </div>
                    </div>
                    <div class="event">
                        <div class="day">14</div>
                        <div class="event-details">
                            Startup Snapshot
                            7:00PM-9:00PM
                            RSVP on Eventbrite
                        </div>
                    </div>
                </div>
            </aside>
            <section class="main-column" role="main">
                <header class="page-header">
                    <h2>News</h2>
                </header>

                <div class="page-content">
                    <?php
                        if ( have_posts() ) :
                            // Start the Loop.
                            while ( have_posts() ) : the_post();

                                /*
                                 * Include the post format-specific template for the content. If you want to
                                 * use this in a child theme, then include a file called called content-___.php
                                 * (where ___ is the post format) and that will be used instead.
                                 */
                                get_template_part( 'content', get_post_format() );

                            endwhile;
                            // Previous/next post navigation.
                            // twentyfourteen_paging_nav();

                        else :
                            // If no content, include the "No posts found" template.
                            get_template_part( 'content', 'none' );

                        endif;
                    ?>
                </div><!-- .page-content -->
            </section><!-- #content -->
            <section class="right-column">
                <h3>New Tweets</h3>
            </section>
        </div>
    </div><!-- #primary -->
</div>

<?php get_footer(); ?>
<?php 
/**
 * Template Name: Home Page
 */

get_header(); ?>

 <script src='<?php echo get_template_directory_uri() ?>/scripts/moment.min.js'></script>
  <script src='<?php echo get_template_directory_uri() ?>/scripts/fullcalendar.min.js'></script>
  <script src='<?php echo get_template_directory_uri() ?>/scripts/gcal.js'></script>
  <script>
  $(document).ready(function() {

    $('#calendar').fullCalendar({

      // US Holidays
      events: 'http://www.google.com/calendar/feeds/usa__en%40holiday.calendar.google.com/public/basic',

      eventClick: function(event) {
        // opens events in a popup window
        window.open(event.url, 'gcalevent', 'width=700,height=600');
        return false;
      },

      loading: function(bool) {
        $('#loading').toggle(bool);
      }

    });

  });

  </script>

  <!--education start-->
  <section class="calendar">
    <div class="container">
      <div id="calendar"></div>
    </div>
  </section>


<?php get_footer(); ?>
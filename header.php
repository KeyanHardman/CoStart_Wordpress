<!doctype html>
<html class="no-js">
    <head>
       
          <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>CoStart at The Ohio State University</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--main style-->
      <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri() ?>/scss/bootstrap.css">
      <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri() ?>/scss/style.css">
      <!--background slider style-->
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/scss/slideshow.css" />
      <link rel="shortcut icon" href="images/favicon.ico" >
      <link rel="icon" type="image/gif" href="images/animated_favicon1.gif" >
      <!--google font style-->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <!--font-family: 'Open Sans', sans-serif;-->
      <!-- font css style-->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/scss/font-awesome.css">
      <!--for slider style-->
      <link href='<?php echo get_template_directory_uri() ?>/scss/fullcalendar.css' rel='stylesheet' />
      <link href='<?php echo get_template_directory_uri() ?>/scss/fullcalendar.print.css' rel='stylesheet' media='print' />
      <noscript>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/scss/fallback.css" />
      </noscript>
      <!--jquary min js-->
      <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/scripts/jquery.min.js"></script>
  
        // <script type="text/javascript">
        // var ajaxurl = '<?php echo admin_url('admin-ajax.php') ?>'
        // </script>
        
    </head>
    <body <?php body_class(); ?>>
        <div class="wrapper" id="wrapper">
        <header>
          <!--menu start-->
          <div class="menu">
            <div class="navbar-wrapper stuckMenu isStuck" style="position: fixed; top: 0px;">
              <div class="container">
                <div class="navwrapper">
                  <div class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="navbar-brand" href="#">Menu</a> </div>
                        <div class="navbar-collapse collapse">
                          <ul class="nav navbar-nav">
                            <li class=""><img src="<?php echo get_template_directory_uri() ?>/images/logo.png"></li>
                            <li class="menuItem active"><a href="index.php">Home</a></li>
                            <li class="menuItem"><a href="index.php#calendar">Calendar</a></li>
                            <li class="menuItem"><a href="news.php#news">News</a></li>
                            <li class="menuItem"><a href="join.php">Get Involved</a></li>
                            <li class="menuItem"><a href="about.php">About Us</a></li>
                            <li class="menuItem"><a href="#contact">Contact</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Navbar -->
                </div>
              </div>
            </div>
            <!--menu end-->
            <!--banner start-->
            <div class="banner row" id="banner">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noPadd" style="height:100%">
                <!--background slide show start-->
                <ul class="cb-slideshow">
                  <li><span>Image 01</span></li>
                  <li><span>Image 02</span></li>
                  <li><span>Image 03</span></li>

                </ul>
                <!--background slide show end-->
              </div>
            </div>
            <!--banner end-->
            <div class="bannerText container">
              <h2>Creating Entrepreneurs at The Ohio State University</h2>
            </div>
            </header>
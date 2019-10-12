<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package samhiggins-theme
 */
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="profile" href="https://gmpg.org/xfn/11">
<!-- TEMPORARY UPDATE BEFORE LAUNCH -->
    <!-- OGG data -->
    <!-- facebook -->
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="http://">
    <meta property="og:url" content="http://">
    <!-- twitter -->
    <meta name="twitter:title" content="European Travel Destinations ">
    <meta name="twitter:description" content=" Offering tour packages for individuals or groups.">
    <meta name="twitter:image" content=" http://euro-travel-example.com/thumbnail.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/js/uikit-icons.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <title>Sam Higgins - Countertenor</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header id="header">
      <div id="signature-logo" class="uk-animation-fade"><img src="<?php bloginfo('template_url'); ?>/images/signature-logo.png" alt="LOGO"></div>
      <!-- begin nav -->
      <!-- +++++++++++ MOBILE MENU +++++++++++++++++++++ -->
      <!-- +++++++++++ HIDDEN ABOVE 980px  +++++++++++++++++++ -->

          <a id="mobile-menu-link" href="#mobile-menu" class="uk-navbar-toggle" uk-toggle>MENU</a>

        <!-- This is the off-canvas panel -->

      <div id="mobile-menu" class="uk-offcanvas-content" uk-offcanvas="">
        <div class="uk-offcanvas-bar uk-offcanvas-bar-show">
          <button class="uk-offcanvas-close" type="button" uk-close></button>
          <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav="" >
            <li class=""><a href="#home">Home</a></li>
            <li class=""><a href="#bio-anchor">Bio</a></li>
            <li class="uk-parent" aria-expanded="false">
                <a href="">Schedule</a>
                  <ul class="uk-nav-sub" role="menu">
                    <li><a href="#upcoming-anchor">Upcoming</a></li>
                    <li><a href="#past-anchor">Past</a></li>
                  </ul>
            </li>
            <li class="uk-parent" aria-expanded="false">
                <a href="">Media</a>
                  <ul class="uk-nav-sub" role="menu" hidden aria-hidden="true">
                    <li><a href="#media-anchor">Videos</a></li>
                    <li><a href="#news-anchor">News</a></li>
                  </ul>
            </li>
            <li class=""><a href="#contact-anchor">Contact</a></li>
            <li class=""><a href="#blog-anchor">Blog</a></li>
            <li class="uk-parent" aria-expanded="false">
              <a href="">Social Media</a>
              <ul class="nav uk-nav" id="social-icons">
                <li><a href="https://www.twitter.com" class="uk-icon-ratio uk-margin-small-right" uk-icon="twitter" target="_blank"></a></li>
                <li><a href="https://www.facebook.com" class="uk-icon-ratio  uk-margin-small-right" uk-icon="facebook" target="_blank"></a></li>
                <li><a href="https://www.instagram.com" class="uk-icon-ratio" uk-icon="instagram" target="_blank"></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- +++++++++++++ END MOBILE MENU ++++++++++++++++++++++++++++ -->

      <!-- ==================== MAIN MENU =================== -->
      <nav id="navbar" class="uk-nav uk-nav-default">
        <ul class="nav uk-nav" uk-scrollspy-nav="closest: li; scroll: true" data-uk-nav>
          <li class="uk-parent"><a href="#home">Home</a></li>
          <li class="uk-parent"><a href="#bio-anchor">Bio</a></li>
          <li class="uk-parent">
            <a href="#calendar-anchor">Schedule</a>
            <div data-uk-dropdown>
              <ul class="uk-nav-sub" role="menu">
                <li><a href="#upcoming-anchor">upcoming</a></li>
                <li><a href="#past-anchor">Past</a></li>
              </ul></div>
          </li>
          <li class="uk-parent uk-nav-parent-icon"  aria-expanded="false">
            <a href="#media-anchor">Media</a>
            <!-- This is the container enabling the JavaScript -->
            <div data-uk-dropdown>
              <ul class="uk-nav-sub uk-dropdown-navbar" role="menu">
                <li><a href="#media-anchor">Videos</a></li>
                <li><a href="#news-anchor">News</a></li>
              </ul>
            </div
          </li>
          <li class="uk-parent"><a href="#contact-anchor">Contact</a></li>
          <li class="uk-parent"><a href="#blog-anchor">Blog</a></li>
            <ul class="nav uk-nav" id="social-icons">
              <li><a href="https://www.twitter.com" class="uk-icon-ratio uk-margin-small-right" uk-icon="twitter" target="_blank"></a></li>
              <li><a href="https://www.facebook.com" class="uk-icon-ratio  uk-margin-small-right" uk-icon="facebook" target="_blank"></a></li>
              <li><a href="https://www.instagram.com" class="uk-icon-ratio" uk-icon="instagram" target="_blank"></a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>

    <!-- end main nav -->

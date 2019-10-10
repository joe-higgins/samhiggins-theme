<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://joehiggins.me
 *x
 * @package WordPress
 * @subpackage samhiggins-theme
 * @since 1.0.0
 */

get_header();
?>

<!-- page 2 -->
<?php
      get_template_part('template-parts/bio');
?>
<!-- page 3 -->
<?php
      get_template_part('template-parts/schedule');
?>
<!-- page 4 -->
<?php
      get_template_part('template-parts/media');
?>
<!-- page 5 -->
<?php
      get_template_part('template-parts/contact');
?>
<!-- page 6 -->
<?php
      get_template_part('template-parts/blog');
?>

<a href="" uk-totop></a>
<?php
get_footer();

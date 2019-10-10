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
<!-- Sam Higgins logo -->
<?php
      get_template_part('template-parts/logo');
?>
<!-- About/Bio -->
<?php
      get_template_part('template-parts/bio');
?>
<!-- Scedule/Performances -->
<?php
      get_template_part('template-parts/schedule');
?>
<!-- Videos/News -->
<?php
      get_template_part('template-parts/media');
?>
<!-- Contact -->
<?php
      get_template_part('template-parts/contact');
?>
<!-- Blog -->
<?php
      get_template_part('template-parts/blog');
?>

<a href="" uk-totop></a>
<?php
get_footer();

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samhiggins-theme
 */

?>
	<!--one blog-post -->

	<!-- <div class="slider-box"> -->

		<li class="uk-transition-toggle" tabindex="0">
			<h3 class="blog-post-title"><?php the_title(); ?></h3>
			<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

	 		<p><?php the_content(); ?></p>
		</li>
	<!-- end slider item -->
	<!-- </div> -->

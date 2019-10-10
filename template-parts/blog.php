<div class="parallax4 uk-animation-kenburns"></div>
<div id="blog-anchor"></div>
<article class="article">
  </div>
  <div id="blog" class="">
    <h1 id="blog-heading" class="heading">Blog</h1>
    <h3>Add blog loop here</h3>

    <div uk-slider="center: true">
      <ul class="blog-slider-box uk-slider-items uk-child-width-1-1@s uk-grid">
        <?php
    		if ( have_posts() ) :

    			/* Start the Loop */
    			while ( have_posts() ) :
    				the_post();

    				/*
    				 * Include the Post-Type-specific template for the content.
    				 * If you want to override this in a child theme, then include a file
    				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
    				 */
    				get_template_part( 'template-parts/content', get_post_type() );

    			endwhile;

    			the_posts_navigation();

    		else :

    			get_template_part( 'template-parts/content', 'none' );

    		endif;
    		?>
      </ul>
    <!-- end slider items -->
    <a class="uk-position-center-left uk-slidenav-large uk-dark" href="#" uk-slidenav-previous uk-slider-item="previous">PREV</a>
    <a class="uk-position-center-right uk-slidenav-large uk-dark" href="#" uk-slidenav-next uk-slider-item="next">NEXT</a>
  </div>
  <!-- end uk-slider -->
  </div>
  <!-- end blog loop -->

</article>

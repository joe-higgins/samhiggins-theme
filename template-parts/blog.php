<div class="parallax4 uk-animation-kenburns"></div>
<div id="blog-anchor"></div>
<article class="article">
  </div>
  <div id="blog" class="">
    <h1 id="blog-heading" class="heading">Blog</h1>
    <h3>Add blog loop here</h3>
    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    
      get_template_part( 'content', get_post_format() );
    endwhile; endif;
    ?>
  </div>
</article>

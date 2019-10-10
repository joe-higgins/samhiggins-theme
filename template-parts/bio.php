<!-- begin page 2 -->
<div class="parallax1 uk-animation-kenburns uk-animation-reverse"></div>
<div id="bio-anchor"></div>
<article class="article">
  <div id="bio" class="">
    <h1 id="bio-heading" class="heading">About Sam</h1>

    <!-- I need to find a better way to add single post or page content. "query_posts" is discouraged -->
      <?php query_posts("posts_per_page=1&post_type=page&p=7");

      // The Loop
      while ( have_posts() ) : the_post();
          echo '
      <div>';
          the_content();
          echo '</div>

      ';
      endwhile;

      // Reset Query
      wp_reset_query();

      ?>
  </div>
</article>
<!-- end page 2 -->

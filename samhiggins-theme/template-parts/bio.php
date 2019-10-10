<!-- begin page 2 -->
<div class="parallax1 uk-animation-kenburns uk-animation-reverse"></div>
<div id="bio-anchor"></div>
<article class="article">
  <div id="bio" class="">
    <h1 id="bio-heading" class="heading">About Sam</h1>
    <?php

      // The Query
      $the_query = new WP_Query( array( 'pagename' => 'bio' ) );

      // The Loop
      if ( $the_query->have_posts() ) {
          echo '<ul>';
          while ( $the_query->have_posts() ) {
              $the_query->the_post();
              echo '<li>' . the_content() . '</li>';

          }
          echo '</ul>';
      } else {
          // no posts found
      }
      /* Restore original Post Data */
      wp_reset_postdata();
      ?>
  </div>
</article>
<!-- end page 2 -->

<!-- begin page 3 -->
<div class="parallax2">
  <h3 class="overlay"><?php echo get_theme_mod('parallax2-text'); ?></h3>
</div>

<div id="calendar-anchor"></div>
<article class="article">
  <h1 id="calendar-heading" class="heading"><?php echo get_theme_mod('parallax2-heading'); ?></h1>
  <div id="calendar">
    <div id="upcoming-anchor"></div>
    <div id="upcoming" uk-scrollspy="cls: uk-animation-slide-right; repeat: true delay: 500">
      <div><?php dynamic_sidebar( 'para2-widget-1' ); ?></div>
      </div>
      <!-- end slider -->
  </div>
  <!-- end Upcoming -->
<div id="past-anchor"></div>

<div id="past" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
  <div><?php dynamic_sidebar( 'para2-widget-2' ); ?></div>

</div>
<!-- end past perf -->

</div>
</article>
<!-- end page 3 -->

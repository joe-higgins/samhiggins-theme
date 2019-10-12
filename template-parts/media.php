<!-- begin page 4 -->

<div class="parallax1 uk-animation-kenburns uk-animation-reverse"></div>
  <div id="media-anchor"></div>
<article class="article">
  <div id="media-contact">
    <h1 id="media-heading" class="heading">Media</h1>
    <div id="video-anchor"></div>
    <div id="video">
      <!-- <h1 class="heading">Videos</h1> -->
        <div uk-slider>
          <ul class="uk-slider-items uk-child-width-1-1@s uk-child-width-1-2@m uk-grid">
            <div>
              <?php dynamic_sidebar( 'media-widget-1' ); ?>
            </div>
            <!-- <li>
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/nHLoNaMDvZQ?mute=0" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </li>
            <li>
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Tnw-N1xEIDw" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </li> -->
          </ul>
          <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
          <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>
      </div>

      </div>
    </div>
    <div id="news-anchor"></div>
    <div id="news">
      <h1 class="heading">News</h1>
      <?php dynamic_sidebar( 'media-widget-2' ); ?>
      <a href="https://www.wickedlocal.com/entertainmentlife/20180506/milton-teen-to-perform-with-boston-pops" target="_blank">
        <h3><em>"Milton teen to perform with Boston Pops"</em></h3>
        <p>Patriot Ledger article. May 6 2018</p>
      </a>
    </div>
</article>
<!-- end page 4 -->

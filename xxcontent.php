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

<div class="parallax1 uk-animation-kenburns uk-animation-reverse"></div>

<!-- begin page 2 -->
<div id="bio-anchor"></div>
<article class="article">

  <!-- <a href="#offcanvas-3">CLICK HERE</a>
  <div id="offcanvas-3" class="uk-offcanvas uk-active" uk-offcanvas="mode: push" aria-hidden="false">
    <div class="uk-offcanvas-bar uk-offcanvas-bar-show" mode="push">

        <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav="">
            <li><a href="">Item</a></li>
            <li class="uk-active"><a href="">Active</a></li>

            <li class="uk-parent" aria-expanded="false">
                <a href="#">Parent</a>
                <div style="overflow:hidden;height:0;position:relative;" class="uk-hidden"><ul class="uk-nav-sub" role="menu">
                    <li><a href="">Sub item</a></li>
                    <li><a href="">Sub item</a>
                        <ul>
                            <li><a href="">Sub item</a></li>
                            <li><a href="">Sub item</a></li>
                        </ul>
                    </li>
                </ul></div>
            </li>

            <li class="uk-parent" aria-expanded="false">
                <a href="#">Parent</a>
                <div style="overflow:hidden;height:0;position:relative;" class="uk-hidden"><ul class="uk-nav-sub" role="menu">
                    <li><a href="">Sub item</a></li>
                    <li><a href="">Sub item</a></li>
                </ul></div>
            </li>

            <li><a href="">Item</a></li>

            <li class="uk-nav-header">Header</li>
            <li class="uk-parent"><a href=""><i class="uk-icon-star"></i> Parent</a></li>
            <li><a href=""><i class="uk-icon-twitter"></i> Item</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href=""><i class="uk-icon-rss"></i> Item</a></li>
        </ul>

    </div>

  </div> -->


  <div id="bio" class="">
    <h1 id="bio-heading" class="heading">About Sam</h1>
    <p>In April of 2018 Sam Higgins was named a Grand Prize Winner in the Fidelity Young Artists Competition at the Boston Pops.  His Grand Prize award included a solo performance of Bereite dich, Zion from the Christmas Oratorio of J.S. Bach with Keith Lockhart and the Boston Pops Orchestra in Symphony Hall on June 6th, 2018.  In February of 2019 Sam will participate in the Metropolitan Opera Guilds High School Singers Intensive as one of only 10 singers selected.</p>

    <p>Sam has been a member of Boston City Singers for 10 years.  He started in the Kodaly Training Choir at the age of 5 and has moved through the various choruses in the organization and is now a member of the Tour Choir.</p>

    <p>Singing has been a major part of Sam’s life since he could talk.  The applause following his first performance in the Children’s Recital at the New Hampshire Music Festival at age 4 ensured his lifelong love of vocal performance.</p>

    <p>Between the ages of 12 and 14 Sam performed the boy soprano solo in Bernstein’s Chichester Psalms 9 times with 7 different organizations.  In December of 2015 at the age of 13 Sam was the boy soprano soloist with the New England Philharmonic under the direction of Richard Pittman in a performance of Robert Kapilow’s Elijah’s Angel with baritones David Kravitz and Dana Whiteside.  Sam performed the boy soprano solo in Howard Franzin's The Voice of Isaac in March of 2016 with Baritone David Kravitz and Coro Allegro under the direction of David Hodgkins. Also in 2016 Sam performed Peter Childs Peace Poem after a Ugartic Inscription for the dedication of the Trygvie Lie Plaza at the United Nations compound in N.Y.C.  In April of 2017 Sam performed the boy soprano solos in Bernstein’s Mass with the Boston Conservatory at Berklee under the direction of world renowned conductor and musical director Eric Stern.  On January 18 - 20th, 2018 Sam performed as a member of the children’s chorus in performances of Mahler’s 3rd Symphony with the Boston Symphony Orchestra, Soprano Susan Graham and the women of the Tanglewood Festival Chorus under the direction of Maestro Andris Nelsons. </p>
    <p>Also an accomplished violinist, Sam has performed with members of the New Hampshire Music Festival Orchestra for the annual children’s recital.  He started violin at age 4 with Jan Riggs of Newton, MA.  His other teachers have included Charles Dimmock, Concertmaster of the Rhode Island Philharmonic Orchestra and the Portland Symphony Orchestra and Anna Korsunky of the Rhode Island Philharmonic Orchestra.</p>

    <p>Sam is looking forward to starting private voice studies with the goal of pursuing a career as an opera singer.</p>

  </div>
</article>
<!-- end page 2 -->
<!-- begin page 3 -->
<div class="parallax2"></div>

<div id="calendar-anchor"></div>
<article class="article">
  <h1 id="calendar-heading" class="heading">Performances</h1>
  <div id="calendar">
    <div id="upcoming-anchor"></div>
    <div id="upcoming" uk-scrollspy="cls: uk-animation-slide-right; repeat: true delay: 500">
      <h1 class="heading">Upcoming Performances</h1>
      <div class="slider">
        <div class="slider-box">
          <h3>Friday February 22, 2019</h3>
            <a href="#">
              <img src="images/met-guild.png" alt="">
            </a>
          <h4>H.S. Singers Intensive Recital</h4>
          <h5>5:30 PM, Lincoln Center</h5>
        </div>
        <!-- end slider box -->
      </div>
      <!-- end slider -->
  </div>
  <!-- end Upcoming -->
<div id="past-anchor"></div>
<div id="past" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
  <h1 class="heading">Past Performances</h1>
  <div uk-slider="center: true">
  <div class="sliderv uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

      <ul class="slider-box uk-slider-items uk-child-width-1-1@s uk-grid" uk-height-viewport="offset-top: true; offset-bottom: 50">
          <li class="uk-transition-toggle" tabindex="0">
              <div class="uk-card uk-card-default">
                  <div class="uk-card-media-top">
                      <img src="images/bsologo_hires.jpg" alt="">
                  </div>
                  <div class="uk-card-body">
                      <h3 class="uk-card-title">June 6, 2018</h3>
                      <p>Performance with Boston Symphony Orchestra Pops as winner of Young Artists Competition at the Boston Pops, Symphony Hall, Boston</p>

                  </div>
              </div>
          </li>
          <li class="uk-transition-toggle" tabindex="0">
              <div class="uk-card uk-card-default">
                  <div class="uk-card-media-top">
                      <img src="images/zamir.png" alt="">
                  </div>
                  <div class="uk-card-body">
                      <h3 class="uk-card-title">June 14, 2017</h3>
                      <p>Boy soprano soloist. Chichester Psalms with Zamir Chorale, Boston</p>
                  </div>
              </div>
          </li>
          <li class="uk-transition-toggle" tabindex="0">
              <div class="uk-card uk-card-default">
                  <div class="uk-card-media-top">
                      <img src="images/northeastern.png" alt="">
                  </div>
                  <div class="uk-card-body">
                      <h3 class="uk-card-title">April 19, 2017</h3>
                      <p>Boy soprano soloist. Chichester Psalms with the Northeastern College Choir, Boston</p>
                  </div>
              </div>
          </li>
          <li class="uk-transition-toggle" tabindex="0">
              <div class="uk-card uk-card-default">
                  <div class="uk-card-media-top">
                      <img src="images/bcm.png" alt="">
                  </div>
                  <div class="uk-card-body">
                      <h3 class="uk-card-title">April 6-9, 2017</h3>
                      <p>Boy soprano soloist. Bernstein <em>MASS</em>. Boston Conservatory at Berklee, Boston </p>
                  </div>
              </div>
          </li>
          <li class="uk-transition-toggle" tabindex="0">
              <div class="uk-card uk-card-default">
                  <div class="uk-card-media-top">
                      <img src="images/falmouth.png" alt="">
                  </div>
                  <div class="uk-card-body">
                      <h3 class="uk-card-title">March 19, 2017</h3>
                      <p>Boy soprano soloist. Chichester Psalms with the Falmouth Chorale.</p>
                  </div>
              </div>
          </li>
          <li class="uk-transition-toggle" tabindex="0">
              <div class="uk-card uk-card-default">
                  <div class="uk-card-media-top">
                      <img src="images/un.png" alt="">
                  </div>
                  <div class="uk-card-body">
                      <h3 class="uk-card-title">September 18, 2016</h3>
                      <p>A cappella soloist, Peace Poem After A Ugartic Inscription by Peter Childs. Trygve Lie Plaza Dedication, United Nations Complex, NYC</p>
                  </div>
              </div>
          </li>
      </ul>

      <a class="uk-position-center-left uk-slidenav-large uk-dark" href="#" uk-slidenav-previous uk-slider-item="previous">PREV</a>
      <a class="uk-position-center-right uk-slidenav-large uk-dark" href="#" uk-slidenav-next uk-slider-item="next">NEXT</a>

  </div>

  <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

  </div>
  <!-- end slider -->
</div>
<!-- end past perf -->

</div>
</article>
<!-- end page 3 -->
<!-- begin page 4 -->

<div class="parallax1 uk-animation-kenburns uk-animation-reverse"></div>
  <div id="media-anchor"></div>
<article class="article">
  <div id="media-contact">
    <h1 id="media-heading" class="heading">Media</h1>
    <div id="video-anchor"></div>
    <div id="video">
      <h1 class="heading">Videos</h1>
        <div uk-slider>
          <ul class="uk-slider-items uk-child-width-1-1@s uk-child-width-1-2@m uk-grid">
            <li>
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/nHLoNaMDvZQ?mute=0" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </li>
            <li>
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Tnw-N1xEIDw" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </li>
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
      <a href="https://www.wickedlocal.com/entertainmentlife/20180506/milton-teen-to-perform-with-boston-pops" target="_blank">
        <h3><em>"Milton teen to perform with Boston Pops"</em></h3>
        <p>Patriot Ledger article. May 6 2018</p>
      </a>
    </div>
</article>
<!-- end page 4 -->
<div class="parallax3 uk-animation-kenburns uk-animation-reverse"></div>
<div id="contact-anchor"></div>
<article class="article">
  <div id="contact">
    <h1 id="contact-heading" class="heading">Contact</h1>
    <address>
      <!-- CLOAKED EMAIL LINK -->
      <!-- Begin Email Cloaking -->
      <h5>
<script language='javascript' type='text/javascript'><!--
//
// Anti-Spam Email Cloaking 3.0 by David Tulga
// http://www.davidtulga.com/antispamemail.htm
//
x = '&#64;';
eml = '&#115;&#97;&#109;&#104;&#105;&#103;&#103;&#105;&#110;&#115;&#108;&#105;&#111;&#110;' + x + '&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;';
msg = '&#115;&#97;&#109;&#104;&#105;&#103;&#103;&#105;&#110;&#115;&#108;&#105;&#111;&#110;' + x + '&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;';
out = '<a class="cloak_eml" href="mailto:' + eml + '">' + msg + '</a>';
document.write(out);
// -->
</script>
<noscript>
<!-- This message is displayed if the browser has javascript disabled. -->
&#115;&#97;&#109;&#104;&#105;&#103;&#103;&#105;&#110;&#115;&#108;&#105;&#111;&#110; (at) &#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109; [ &#115;&#97;&#109;&#104;&#105;&#103;&#103;&#105;&#110;&#115;&#108;&#105;&#111;&#110; (at) &#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109; ]
</noscript>
<!-- End Email Cloaking -->
      </h5>
      <h5><a href="tel:+617-291-0983">617-291-0983</a></h5>
    </address>

  </div>
</article>
<div class="parallax4 uk-animation-kenburns"></div>
<div id="blog-anchor"></div>
<article class="article">
  </div>
  <div id="blog" class="">
    <h1 id="blog-heading" class="heading">Blog</h1>
    <h3>Add blog loop here</h3>
  </div>
</article>
<a href="" uk-totop></a>

<?php
get_footer();

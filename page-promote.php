<?php
/*
Template Name: Promote
*/
?>

<?php get_header(); ?>

      <div id="content" class="clearfix row schedule">

        <div id="main" class="span12 clearfix" role="main">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

            <header>

              <div class="page-header"><h1><?php the_title(); ?></h1></div>

            </header> <!-- end article header -->
            <div class="paper">
              <section class="post_content ">
                <?php the_content(); ?>

                <p class="lead">Here are several ways to encourage the women in your life to experience True Woman ’14. Just click on a thumbnail below, and once it opens, right click the image and choose&nbsp;&ldquo;Save&nbsp;Image As.&rdquo;</p>
                <div class="promo-items">
                <h3>Posters</h3>
                <div class="row section">

                    <div class="span3">
                      <div class="info">11 x 17 Color</div>
                      <a href="http://truewoman14.s3.amazonaws.com/downloads/TW-promo-11x17.pdf"><img src="http://truewoman14.s3.amazonaws.com/library/img/TW-promo-11x17.jpg" alt="Promo 11 x 17" /></a>

                    </div>
                    <div class="span3">
                      <div class="info">11 x 17 B&amp;W</div>
                      <a href="http://truewoman14.s3.amazonaws.com/downloads/TW-promo-11x17-bw.pdf"><img src="http://truewoman14.s3.amazonaws.com/library/img/TW-promo-11x17-bw.jpg" alt="Promo 11 x 17 B&amp;W" /></a>

                    </div>
                    <div class="span3">
                      <div class="info">8.5 x 11 Color</div>
                      <a href="http://truewoman14.s3.amazonaws.com/downloads/TW-promo-85x11.pdf"><img src="http://truewoman14.s3.amazonaws.com/library/img/TW-promo-85x11.jpg" alt="Promo 8.5 x 11" /></a>

                    </div>
                    <div class="span3">
                      <div class="info">8.5 x 11 B&amp;W</div>
                      <a href="http://truewoman14.s3.amazonaws.com/downloads/TW-promo-85x11-bw.pdf"><img src="http://truewoman14.s3.amazonaws.com/library/img/TW-promo-85x11-bw.jpg" alt="Promo 8.5 x 11 B&amp;W" /></a>

                    </div>
                  </div>
                  <h3>Flyers</h3>
                  <div class="row section">

                    <div class="span3">
                      <div class="info">5.5 x 8.5 Color</div>
                      <a href="http://truewoman14.s3.amazonaws.com/downloads/TW-promo-55x85.pdf"><img src="http://truewoman14.s3.amazonaws.com/library/img/TW-promo-55x85.jpg" alt="Promo 5.5 x 8.5" /></a>
                    </div>
                    <div class="span9">
                      <div class="info">5.5 x 8.5 B&amp;W</div>
                      <a href="http://truewoman14.s3.amazonaws.com/downloads/TW-promo-55x85-bw.pdf"><img src="http://truewoman14.s3.amazonaws.com/library/img/TW-promo-55x85-bw.jpg" alt="Promo 5.5 x 8.5 B&amp;W" /></a>
                    </div>
                  </div>
                  <h3>Rave Cards</h3>
                  <div class="row section">

                    <div class="span3">
                      <div class="info">4 x 6 Color</div>
                      <a href="http://truewoman14.s3.amazonaws.com/downloads/TW-promo-4x6.pdf"><img src="http://truewoman14.s3.amazonaws.com/library/img/TW-rave-4x6.jpg" alt="Promo 4 x 6" /></a>
                    </div>
                    <div class="span9">
                      <div class="info">4 x 6 B&amp;W</div>
                      <a href="http://truewoman14.s3.amazonaws.com/downloads/TW-promo-4x6-bw.pdf"><img src="http://truewoman14.s3.amazonaws.com/library/img/TW-rave-4x6-bw.jpg" alt="Promo 4 x 6 B&amp;W" /></a>
                    </div>
                  </div>
                  <h3>Bulletin Ads</h3>
                  <div class="row">

                    <div class="span3">
                      <div class="info">2 x 2 Color</div>
                      <a href="http://truewoman14.s3.amazonaws.com/downloads/TW-promo-2x2.pdf"><img src="http://truewoman14.s3.amazonaws.com/library/img/TW-promo-2x2.jpg" alt="Promo 2 x 2" /></a>
                    </div>
                    <div class="span3">
                      <div class="info">2 x 2 B&amp;W</div>
                      <a href="http://truewoman14.s3.amazonaws.com/downloads/TW-promo-2x2-bw.pdf"><img src="http://truewoman14.s3.amazonaws.com/library/img/TW-promo-2x2-bw.jpg" alt="Promo 2 x 2 B&amp;W" /></a>
                    </div>
                    <div class="span3">
                      <div class="info">4 x 4 Color</div>
                      <a href="http://truewoman14.s3.amazonaws.com/downloads/TW-promo-4x4.pdf"><img src="http://truewoman14.s3.amazonaws.com/library/img/TW-promo-4x4.jpg" alt="Promo 4 x 4" /></a>
                    </div>
                    <div class="span3">
                      <div class="info">4 x 4 B&amp;W</div>
                      <a href="http://truewoman14.s3.amazonaws.com/downloads/TW-promo-4x4-bw.pdf"><img src="http://truewoman14.s3.amazonaws.com/library/img/TW-promo-4x4-bw.jpg" alt="Promo 4 x 4 B&amp;W" /></a>
                    </div>
                  </div>

              </div><!-- end promo items -->
              </section> <!-- end article section -->
            </div><!-- /paper -->


          </article> <!-- end article -->

          <?php comments_template(); ?>

          <?php endwhile; ?>

          <?php else : ?>

          <article id="post-not-found">
              <header>
                <h1><?php _e("Not Found", "bonestheme"); ?></h1>
              </header>
              <section class="post_content">
                <p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
              </section>
              <footer>
              </footer>
          </article>

          <?php endif; ?>

        </div> <!-- end #main -->

        <?php //get_sidebar(); // sidebar 1 ?>

      </div> <!-- end #content -->

<?php get_footer(); ?>
<?php
/*
Template Name: Leaders
*/
?>

<?php get_header(); ?>

			<div id="content" class="clearfix row schedule">

				<div id="main" class="span12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<header>

							<div class="page-header"><h1><?php the_title(); ?> <!-- a class="pull-right btn" href="#">Download Schedule <i class="icon-pdf"></i></a--></h1></div>

						</header> <!-- end article header -->
						<div class="paper">
  						  <section class="post_content">
  							 <!-- <?php the_content(); ?> -->
  							 <div id="video" class="video ha-waypoint" data-animate-down="ha-header-small" data-animate-up="ha-header-large">
      							 <div class="videowrapper">
          							 <iframe src="http://player.vimeo.com/video/73405109" autoplay="autoplay" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
      							 </div><!-- end .videowrapper -->
  							 </div><!-- end #video -->
  							 <div class="row">
  							   <div class="span8">
      							   <h2>Your Women Will Grow Deeper at True&nbsp;Woman&nbsp;&rsquo;14</h2>
                                    <p>What is the contemporary significance of Situationist political theory? Early street sweepers sometimes believed that Situationist political theory was not different from post-revolutionary semantics! Consider the two terms. "Situationist" comes from a Latin word meaning &ldquo;optimistic variations&rdquo;.</p>
                                    <ul>
                                        <li>Bring your group</li>
                                        <li>Get your women deeper into the Word</li>
                                        <li>Make connections</li>
                                    </ul>
                                    <p><a href="#" class="btn btn-cta">Register Your Group Now</a></p>
                                    <div class="well">
                                        <h3>Specifically for Leaders</h3>
                                        <p>We call it the True Woman '14 Pre-event. This pre-event is designed specifically for women who are in ministry to other women. Be part of this event so that you can get encouragement and new energy as you serve your women.</p>
                                        <a href="#" class="btn">Learn More</a>
                                    </div>
                                </div>
                                <div class="span4">
                                    <blockquote class="oval-quotes">
                                        <p>I brought eighteen women with me to True Woman ’12. It was like Christmas watching them catch the vision of what true biblical womanhood is all about.</p>
                                    </blockquote>
                                    <cite class="oval-quotes-cite">
                                        <strong>Leslie</strong>
                                        Women&rsquo;s Ministry Director<br>
                                        First Baptist Church,
                                        Indianapolis, IN
                                    </cite>
                                    <blockquote class="oval-quotes">
                                        <p>Twenty ladies from our church unified in a way that I couldn&rsquo;t even imagine! We had a precious prayer time together. We all put a foot in a circle and cried out to the Lord. I did not know that our ladies could pray the way they did!</p>
                                    </blockquote>
                                    <cite class="oval-quotes-cite">
                                        <strong>Sara</strong>
                                        Pastor&rsquo;s Wife<br>
                                        Second Baptist Church,
                                        South Bend, IN
                                    </cite>
                                </div>
  							 </div>
    						</section>

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
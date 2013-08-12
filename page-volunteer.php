<?php
/*
Template Name: Volunteer
*/
?>

<?php get_header(); ?>

			<div id="content" class="clearfix row">

				<div id="main" class="span12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<header>

							<div class="page-header"><h1><?php the_title(); ?></h1></div>

						</header> <!-- end article header -->
						<div class="paper">
							<div class="row">
								<div class="span9">
									<section class="post_content">
                    <?php the_content(); ?>
  							  </section> <!-- end article section -->
                </div>
                <div class="span3">
                  <ul class="nav nav-volunteers">
                  <li><a href="#service">Areas of Service</a></li>
                  <li><a href="#benefits">Benefits of Volunteering</a></li>
                  <li><a href="#successful">A Successful Volunteer</a></li>
                  <li><a href="#terms">Terms of Agreement</a></li>
                  <li><a href="#register">Register as Volunteer</a></li>
                  <li><a href="#faqs">FAQs</a></li>
                  </ul>
                </div>
  						</div>
						</div>
					</article> <!-- end article -->

					<?php comments_template(); ?>

					<?php endwhile; ?>	

					<?php else : ?>

					<article id="post-not-found">
							<header>
								<h1><?php _e("Not Found", "bonestheme"); ?></h1>
							</header>
							<section class="post_content">
								<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?>
							</section>
							<footer>
							</footer>
					</article>

					<?php endif; ?>

				</div> <!-- end #main -->

				<?php //get_sidebar(); // sidebar 1 ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>
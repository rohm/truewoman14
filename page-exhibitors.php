<?php
/*
Template Name: Exhibitors
*/
?>

<?php get_header(); ?>

			<div id="content" class="clearfix row">

				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<header>

							<div class="page-header"><h1><?php the_title(); ?></h1></div>

						</header> <!-- end article header -->
						<div class="paper">
							<section class="post_content">
								<?php the_content(); ?>

							</section>
						</div><!-- /paper -->
					</article> <!-- end article -->


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
<?php
/*
Template Name: Live
*/
?>

<?php get_header('nonav'); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<section class="post_content">

								<?php the_content(); ?>
																					
						</section> <!-- end article header -->
						
					</article> <!-- end article -->
					
					<?php 
						// No comments on homepage
						//comments_template();
					?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
								<div class="row">
									<div class="video">
										<iframe src="http://new.livestream.com/accounts/4812924/events/3230785/player?width=640&height=360&autoPlay=false&mute=false" width="640" height="360" frameborder="0" scrolling="no"> </iframe>
									</div>
									<div class="twitter-stream">
										
									</div>
								</div>
								
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer('bare'); ?>
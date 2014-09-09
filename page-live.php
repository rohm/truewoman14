<?php
/*
Template Name: Live
*/
?>

<?php get_header('live'); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<section class="post_content">

								
								<header>
									
		                <div class="page-header">
											<div class="row">
												<h1>
													<?php the_title(); ?>
												
												</h1>
												<a href="#" class="audio-only"><i class="fa fa-headphones fa-1x"></i> Switch to Audio Only</a>
											</div>
										</div>

		            </header>
								<?php the_content(); ?>
								<div class="row">
									<div class="col-sm-8">
										<iframe src="http://new.livestream.com/accounts/4812924/events/3230785/player?width=640&height=360&autoPlay=false&mute=false" width="100%" height="360" frameborder="0" scrolling="no"> </iframe>
										<p class="visible-xs text-center"><a href="/envivo/">Listen en Espa&ntilde;ol &rarr;</a></p>
									</div>
									<div class="twitter-stream col-sm-4">
										<a class="twitter-timeline" href="https://twitter.com/hashtag/truewoman14" data-widget-id="508999278061047808">#truewoman14 Tweets</a>
										<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
										</div>
								</div>	
								<div class="row">
									<div class="col-sm-8">
										<div class="chat">
											<p style="margin-top: 0;">
												<?php 
												
													if (is_page('envivo')) { 
														echo 'Coveritlive a ya.';
													}
													else { 
														echo 'Coveritlive here.';
													}
											
												?>
												
											</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="ad">
											<a href="#"><img src="http://placehold.it/400x400/333333/444444&text=Ad Slot" class="img-responsive" alt="Ad" /></a>
										</div>
									</div>
								</div>											
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
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
												<nav>
													<a class="schedule" href="/schedule/#main-conference">
														<i class="fa fa-list"></i> Schedule
													</a>
													<?php
													 if ($_COOKIE['form-1-complete']) {
														 ?>   
													 
															<a href="#" class="audio-only"><i class="fa fa-headphones fa-1x"></i> 
																<?php 
												
																	if (is_page('envivo')) { 
																		echo 'Cambiar a sólo audio';
																	}
																	else { 
																		echo 'Switch to Audio Only';
																	}
											
																?>
															</a>
														
														 <?php
													 }
													?>
												</nav>
											</div>
										</div>

		            </header>
								<?php the_content(); ?>
								
								<?php
									
								// Need to figure out how to redirect to envivo for spanish users on envivo
								// Maybe add a dropdown for language on form! 
								
									if ($_COOKIE['form-1-complete'] == 1 && (is_page('live'))) {
											include ('library/inc/_live.php');
										} elseif ($_COOKIE['form-1-complete'] == 1 && (is_page('envivo'))) {
												include ('library/inc/_envivo.php');
										} elseif ( is_page('envivo')) {
												gravity_form(2, true, true, false, '', true, 12);
										} else {
										 		gravity_form(1, true, true, false, '', true, 12);
									}
									
								?>
																		
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
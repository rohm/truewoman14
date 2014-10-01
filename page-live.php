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
												<a class="schedule" href="#schedule">
													<i class="fa fa-list"></i> 
													<?php

														if (is_page('envivo')) {
															echo 'Programa/Horario';
														}
														else {
															echo 'Schedule';
														}

													?>
													
												</a>
												
												<!-- < ?php
												 if ($_COOKIE['form-1-complete']) {
													 ? >

														<a href="#" class="audio-only"><i class="fa fa-headphones fa-1x"></i>
															< ?php

																if (is_page('envivo')) {
																	echo 'Cambiar a sólo audio';
																}
																else {
																	echo 'Switch to Audio Only';
																}

															? >
														</a>

													 < ?php
												 }
												? > -->
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
								<hr>
								<h2><span class="section-title" id="schedule"></span> Livestream Schedule</h2>
								<h3>Thursday, Oct. 9</h3>
								<table class="table table-schedule table-bordered">
									<tbody>
										<tr class="">
											<td class="column-time">6:45 – 9:45 p.m.</td>
											<td class="column-session">Evening Session with Joni Eareckson Tada and Nancy Leigh DeMoss</td>
										</tr>
									</tbody>
								</table>
								<h3>Friday, Oct. 10</h3>
								<table class="table table-schedule table-bordered">
									<tbody>
										<tr class="">
											<td class="column-time">8:30 – 11:45 a.m.</td>
											<td class="column-session">Morning Session with Mary Kassian and Janet Parshall</td>
										</tr>
										<tr>
											<td class="column-time">1:30 – 2:30 p.m.</td>
											<td class="column-session">Breakout Session with Joni Tada (Hymn Sing)</td>

										</tr>
										<tr class="">
											<td class="column-time">3:00 – 4:00 p.m.</td>
											<td class="column-session">Breakout Session with Janet Parshall</td>
										</tr>
										<tr class="">
											<td class="column-time">6:45 – 9:45 p.m.</td>
											<td class="column-session">Evening Session with Chrissy Toledo and Jim Cymbala</td>
										</tr>
									</tbody>
								</table>
								<h3>Saturday, Oct. 11</h3>
								<table class="table table-schedule table-bordered">
									<tbody>
										<tr class="">
											<td class="column-time">8:45 a.m. – 12:00 p.m.</td>
											<td class="column-session">Morning Session with Nancy Leigh DeMoss</td>
										</tr>
									</tbody>
								</table>
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
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
			</div> <!-- end #content -->

<?php get_footer('bare'); ?>
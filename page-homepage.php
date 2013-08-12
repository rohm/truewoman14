<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="span12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<section class="post_content">

								<?php the_content(); ?>
								<div id="intro">
									<div class="row">
										<div class="span3 location small-screen-hide">
											<h2>Indianapolis</h2>
											<p>Indiana Convention Center</p>
										</div>
										<div class="span6">
											
											<img class="tw14-logo-purple" src="http://truewoman14.com.s3.amazonaws.com/library/img/logo-tw14-purple@2x.png" alt="True Woman 2014 National Women&rsquo;s Conference" />
											<img src="<?php echo get_template_directory_uri(); ?>/library/img/logo-home@2x.png" alt="Finding Freedom, Fullness &amp; Fruitfullness in CHRIST" />
											<a href="/register" class="btn btn-large btn-cta">Register Now<i class="info">Early Rates Through 5/1/14</i></a>
										</div>
										<div class="span3 date">
											<div class="small-screen-only">
												<h2>Indianapolis</h2>
												<p>Indiana Convention Center</p>
											</div>
											<h2>Oct 9-11, 2014</h2>
											<p>Pre-Event <i class="amp">&amp;</i> Main Session</p>
										</div>
									</div>
								</div><!-- end #intro --> 
								<div class="paper">
									<div id="video" class="video ha-waypoint" data-animate-down="ha-header-small" data-animate-up="ha-header-large">
										<div class="videowrapper">
											<iframe src="http://player.vimeo.com/video/58431038" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
										</div>
									</div><!-- end video -->
									
									<div class="carousel carousel-fade" id="testimonials">
										<div class="carousel-inner">
											<div class="active item">
												<blockquote>
													<p>&rdquo;A really awesome quote from the video or from a previous attender might be great here.&rdquo;</p>
													<cite>&mdash; Sally Jacobsen, Manitoba</cite>
												</blockquote>
											</div>
											<div class="item">
												<blockquote>
													<p>&ldquo;Another great quote. Woo! *High Five*&rdquo;</p>
													<cite>&mdash; Sally Jacobsen, Manitoba</cite>
												</blockquote>
											</div>
											<div class="item">
												<blockquote>
													<p>&ldquo;Another AMAZING quote in this spot right here. It&rsquo;s amazing and awesome &ndash; what you&rsquo;d expect.&rdquo;</p>
													<cite>&mdash; Sally Jacobsen, Manitoba</cite>
												</blockquote>
											</div>
										</div>
										<a class="carousel-control left" href="#testimonials" data-slide="prev">&lsaquo;</a>
										<a class="carousel-control right" href="#testimonials" data-slide="next">&rsaquo;</a>
									</div><!-- end testimonials -->
									
									<div id="speakers">
										<h2 class="border text-glow">Speakers</h2>
										<div class="row">
											<div class="span3 speaker">
												<a href="/speakers#nancy"><img src="http://truewoman14.com.s3.amazonaws.com/library/img/speaker-nancy.jpg" alt="Nancy Leigh DeMoss" /></a>
												<h3><a href="/speakers#nancy">Nancy Leigh DeMoss</a></h3>
											</div>
											<div class="span3 speaker">
												<a href="/speakers#janet"><img src="http://truewoman14.com.s3.amazonaws.com/library/img/speaker-janet.jpg" alt="Janet Parshall" /></a>
												<h3><a href="/speakers#janet">Janet Parshall</a></h3>
											</div>
											<div class="span3 speaker">
												<a href="/speakers#mary"><img src="http://truewoman14.com.s3.amazonaws.com/library/img/speaker-mary.jpg" alt="Mary Kassian" /></a>
												<h3><a href="/speakers#mary">Mary Kassian</a></h3>
											</div>
											<div class="span3 speaker">
												<a href="/speakers#joni"><img src="http://truewoman14.com.s3.amazonaws.com/library/img/speaker-joni.jpg" alt="Joni Eareckson Tada" /></a>
												<h3><a href="/speakers#joni">Joni Eareckson Tada</a></h3>
											</div>
										</div>
									</div><!-- #speakers -->
									
									<div id="topics" style="clear: both;">
										<h2 class="border text-glow">Topics</h2>
										<ul class="nolisttype text-glow">
											<li>Name of Topic</li>
											<li>Another Name of Topic</li>
											<li>Topic Name</li>
											<li>Interesting Topic</li>
											<li>Amazing Topic</li>
											<li>Awesomely Amazing Topic</li>
										</ul>
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

<?php get_footer(); ?>
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
											<img src="http://truewoman14.com.s3.amazonaws.com/library/img/logo-home@2x.png" alt="Finding Freedom, Fullness &amp; Fruitfullness in CHRIST" />
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
											<!-- iframe src="http://player.vimeo.com/video/58431038" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe-->
											<img class="video-placeholder" src="http://truewoman14.com.s3.amazonaws.com/library/img/video-placeholder.jpg" alt="Video Placeholder" />
										</div>
									</div><!-- end video -->
									
									<div class="carousel carousel-fade" id="testimonials">
										<div class="carousel-inner">
											<div class="active item">
												<blockquote>
													<p>&ldquo;This conference has shown me who I am and the woman I am supposed to be. My husband has seen the difference in me, and so has&nbsp;my&nbsp;church.&rdquo;</p>
													<cite>&mdash; Nichole</cite>
												</blockquote>
											</div>
											<div class="item">
												<blockquote>
													<p>&ldquo;Before the conference, I was planning on becoming a girl-gone-really-wild, but now want to experience God&rsquo;s fullness and grace in&nbsp;my&nbsp;life.&rdquo;</p>
													<cite>&mdash; Attendee</cite>
												</blockquote>
											</div>
											<div class="item">
												<blockquote>
													<p>&ldquo;I came back home on fire, realizing that one person can start a counter-cultural revival or revolution. Now is the time to influence the women in my sphere of&nbsp;influence.&rdquo;</p>
													<cite>&mdash; Esther</cite>
												</blockquote>
											</div>
											<div class="item">
												<blockquote>
													<p>&ldquo;The conference helped me to recharge my&nbsp;batteries.&rdquo;</p>
													<cite>&mdash; Geana</cite>
												</blockquote>
											</div>
											<div class="item">
												<blockquote>
													<p>&ldquo;My son said, &lsquo;Mommy, you are different. What happened?' My answer to a six-year-old is, &lsquo;Jesus is changing me for the better.&rsquo; You&rsquo;ve got to love it when even a child notices something different&nbsp;in his&nbsp;mommy.&rdquo;</p>
													<cite>&mdash; Michele</cite>
												</blockquote>
											</div>
											<div class="item">
												<blockquote>
													<p>&ldquo;I gained a new sense of the purpose, urgency, and value of following&nbsp;Christ.&rdquo;</p>
													<cite>&mdash; Attendee</cite>
												</blockquote>
											</div>
											<div class="item">
												<blockquote>
													<p>&ldquo;This was one of the most amazing times of&nbsp;my&nbsp;life.&rdquo;</p>
													<cite>&mdash; Betsy</cite>
												</blockquote>
											</div>
											<div class="item">
												<blockquote>
													<p>&ldquo;This conference was well worth the effort and sacrifice of leaving my husband and home to attend. I watched women of so many generations coming together in a unity of purpose. I may be swimming up-stream, but I&lsquo;m&nbsp;not&nbsp;alone.&rdquo;</p>
													<cite>&mdash; Starr</cite>
												</blockquote>
											</div>
											<div class="item">
												<blockquote>
													<p>&ldquo;I am a changed woman; no longer weary, confused, lonely, depressed and&nbsp;defeated.&rdquo;</p>
													<cite>&mdash; Trisha</cite>
												</blockquote>
											</div>
											<div class="item">
												<blockquote>
													<p>&ldquo;The work you put into the conference was as if you literally put work into my&nbsp;family.&rdquo;</p>
													<cite>&mdash; Pam</cite>
												</blockquote>
											</div>
											<div class="item">
												<blockquote>
													<p>&ldquo;My only regret is that I wasn&rsquo;t pushy enough in getting many other women to attend this incredible&nbsp;time.&rdquo;</p>
													<cite>&mdash; Cynthia</cite>
												</blockquote>
											</div>
											<div class="item">
												<blockquote>
													<p>&ldquo;It is obvious this conference was truly bathed in prayer. I was also impressed with all the speakers—real and down-to-earth, no masks or egos in&nbsp;the&nbsp;way.&rdquo;</p>
													<cite>&mdash; Nancy</cite>
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
										<p class="more" style="margin-top: 60px;"><em>More speakers will be listed soon . . .</em></p>
									</div><!-- #speakers -->
									
									<div id="topics" style="clear: both;">
										<h2 class="border text-glow">Topics</h2>
										<ul class="nolisttype text-glow">
											<li>Experiencing freedom from bondage </li>
											<li>Embracing your beautiful design</li>
											<li>Marveling at the Gospel</li>
											<li>Delighting in Christ</li>
											<li>Personalizing God&rsquo;s Word</li>
											<li>Maximizing your suffering</li>
											<li>Investing in relationships</li>
											<li>Multiplying your life impact</li>
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
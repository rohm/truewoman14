<?php
/*
Template Name: Exhibitors
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
							<section class="post_content">
								<?php the_content(); ?>
								<div class="section">
									<div class="page-hero photo">
										<img src="<?php echo get_template_directory_uri(); ?>/library/img/pagehero-volunteer-1.jpg" alt="" />
									</div>
									<p class="lead">Thanks for your interest in exhibiting at the True Woman &rsquo;14 national women&rsquo;s conference! Exhibitors are like-minded ministries and organizations who we partner with to enhance the True Woman experience.</p>
									
									<h2>As an exhibitor:</h2>
									
									<p>You&rsquo;ll receive a <strong>10&rsquo; x 10&rsquo; booth space</strong> that will include an eight-foot table, two chairs, and a trash can.
									<p>You&rsquo;ll receive <strong>two complimentary event registration passes</strong>.
									<p>You&rsquo;ll be given <strong>one PowerPoint slide</strong> that will run in the general announcement loop throughout the event.
									<p>Your ministry or organization name will be <strong>listed on the exhibitor map</strong> in the conference program booklet.
									
									<p>You&rsquo;re welcome to give away items at your booth; however, we ask that you <em>don&rsquo;t sell anything from your booth</em>. <em>Any “for sale” resources need to be submitted and approved by the True Woman team, and the ministry/organization needs to agree to the Resource Agreement with Revive Our Hearts</em>.
									
									<h3>Cost: </h3>                         
									<p>One booth space costs $800; two spaces cost $1,200.
									
									<h3>Set Up:</h3>
									<p>Thursday, October 9, starting at 10 a.m.
									
									<h3>Exhibit Hours:</h3>            
									<p>Thursday, October 9, 4:30–10 p.m.<br />
									Friday, October 10, 7:30 a.m.–10 p.m.<br />
									Saturday, October 11, 7:30 a.m.–1 p.m.</p>
									
									<h3>Tear Down:</h3>		
									<p>Saturday, October 11, 1–3 p.m.
									
									<p><strong>Electric/Internet:</strong>	It will cost extra to use an electric outlet and Internet at your booth space. We&rsquo;ll communicate what that cost will be once that information is available.
									
									<p><strong>Materials:</strong>		It&rsquo;s fine to bring display materials needed for your booth. If you need to ship materials ahead of time, feel free to contact us.
									
									
									<p><strong>Tote Bag Item:</strong>	 If your ministry or organization would like to supply an item for each
									attendee&rsquo;s tote bag, please send a sample for consideration to the True Woman team. If approved, all items will need to be shipped to Revive Our Hearts no later than August 31, 2014. FYI: Expected attendance for the conference is 8–10,000 women.
									
									<p><strong>Application Process:</strong> Space is limited and will be assigned on a first-come, first-serve basis. After receiving your application, we&rsquo;ll review it based on availability and relevancy to the objectives of the conference.
									<p><a class="btn btn-cta" style="margin-top: 50px;" href="/?page_id=97">Fill out the Exhibitor Application Online</a></p>
									<!-- [contact-form-7 id="90" title="Exhibitor Application"] -->
								</div><!-- end section -->

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
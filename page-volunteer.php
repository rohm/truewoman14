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
							<section class="post_content">
								<?php the_content(); ?>
								<div class="section">
									<div class="page-hero photo">
										<img src="<?php echo get_template_directory_uri(); ?>/library/img/pagehero-volunteer-1.jpg" alt="" />
									</div>
									<h2>Volunteer &mdash; Areas of Service</h2>
									<p>Are you looking for a new way to have fun and meet new people at the same time?</p>
									<p>Become a volunteer at True Woman &rsquo;14.
	
									<p>As a special thank you to our volunteers, we are offering a 50% discount for the conference registration.
	
									<p>We need women and men to be a part of this life-changing weekend!
	
	
									<h3>Areas of Service During the Conference</h3>
	
									<p class="highlight"><strong>Facilities Team:</strong>  Help set up equipment, distribute meals and more.
	
									<p><strong>Greeters:</strong>  Greet women and be the first touch for those coming to the conference.  This position will require coming an hour before each session.
	
									<p><strong>Prayer Team:</strong>  Assist in the onsite prayer room and pray with women as needed throughout the conference. This position will require time during some sessions and at the end of sessions.  
	
									<p>(**Note:  There will be a special men’s prayer team praying on site during the entire event. For information on this, please contact us via email at <a href="mailto:info@truewoman">info@truewoman.com</a>.)
	
									<p><strong>Registration/Information:</strong>  Assist in the registration process as women arrive.  Answer questions and provide information throughout the event.  This position will require arriving an hour before each session and time after the session.
	
									<p><strong>Resource Team:</strong>  Assist women as they shop; help run a cash register; bag purchases and more.  This position will require time before and after each session.
									more.
	
									<p class="highlight"><strong>Spanish Interpreters:</strong>   Assist women in one of the above areas for those that may need extra assistance.
	
									<p><strong>Tote Bag Stuffers:</strong>  Assist with putting items in the totes on Wednesday afternoon before the conference. This position will be needed, but will not qualify for the 50% discount.  If you will be in town early and want to help, we will take your help.  Stuffing 10,000 bags is a chore!
	
									<p><strong>Ushers:</strong> Serve in an assigned section in the main conference hall to assist women with seating and other needs that may arise during the conference.  This position requires arriving an hour before each session.
								</div><!-- end section -->
								
								
								<h2>Volunteer Terms of Agreement</h2>
								<p>As volunteers, you will be representing the Lord and Revive Our Hearts. Please be in constant prayer for the ladies, be kind to those you interact with, and remember to smile! :-)
								
							<div class="section">
								<h3>Volunteer Expectations:</h3>
								<ul>
									<li>Come with a servant&rsquo;s heart and a smile.
									<li>Serve throughout the conference (*or during assigned shifts if you’re a Resources volunteer).
									<li>Wear a white top, dark pants/skirt, comfortable shoes, and True Woman apron.
									<li>Make it a priority to be observant, proactive, and available to serve in any way needed throughout the conference, including other areas of volunteer service.
									Report any emergencies or suspicious behavior to an ROH staff member or your volunteer leader. 
									<li>Be willing to stand for a period of time in your assigned area (approximately an hour). (*Please let us know if you’re not able to fulfill this requirement.)
									<li>Attend a required training/information session on Thursday afternoon before the conference.</li>
									<li>Check-in 15 minutes before serving each day. (*You will be told where to check-in for your particular area in future correspondence.)
								</ul>

								<h3>Benefits of Volunteering:</h3>
								<ul>
									<li>A discounted conference registration of $75. 
									<li>The privilege of worshipping with 10,000 like-minded women.
									<li>A True Woman apron to wear throughout the event (and take home with you afterward!).
									<li>The liberty to reserve two seats during the conference (*in your assigned area if you’re an usher).
									<li>An opportunity to meet ladies from all over the world and develop friendships as you serve together. 
									<li>A chance to interact with the Revive Our Hearts staff. 
									<li>A behind-the-scenes look at a True Woman conference. 
								</ul>
								<h3>A Successful Volunteer:</h3>
								<ul>
									<li>Has a Christ-like, positive, and willing attitude.
									<li>Follows the instructions of the Team Leader and is willing to listen and accept their leadership.
									<li>Serves as a team player –- willing to work with others in a spirit of cooperation.
									<li>Shows up on time (or early) to the volunteer orientation, daily check-in, and assigned places of service.
									<li>Understands responsibilities and asks questions if further clarification is needed.
									<li>Respects the privacy of the speakers, special guests, and employees.
									<li>Desires to glorify the Lord during the conference. 
								</ul>
							</div>
							</section> <!-- end article section -->

							<footer>

								<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?>

							</footer> <!-- end article footer -->
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
<?php
/*
Template Name: Register
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
		    		    <h2>Individuals <i class="amp">&amp;</i> Groups</h2>
		    		    <div class="main-session">
	  	    		    <h3>Main Session</h3>
	  	    		    <table class="table table-bordered">
		  	    		    <tr>
			  	    		    <th>Type</th>
			  	    		    <th class="col-early">Early <span class="dim">(thru&nbsp;5/1/14)</span></th>
			  	    		    <th class="col-reg">Regular <span class="dim">(5/2/14&nbsp;- 9/15/14)</span></th>
			  	    		    <th class="col-late">Late <span class="dim">(after&nbsp;9/15/14)</span></th>
			  	    		  </tr>
			  	    		  <tr class="individual-rates">
				  	    		  <td>
					  	    		  <strong>Individual</strong>
					  	    		</td>
					  	    		<td class="col-individuals"><strong>$129.00</strong></td>
					  	    		<td class="col-group"><strong>$149.00</strong></td>
					  	    		<td class="col-late"><strong>$169.00</strong></td>
					  	    	</tr>
					  	    	<tr class="student-rates">
					  	    		<td>
						  	    		<strong>Student</strong> (high school, full-time college or seminary)
						  	    	</td>
						  	    	<td class="col-individuals"><strong>$109.00</strong></td>
						  	    	<td class="col-group"><strong>$129.00</strong></td>
						  	    	<td class="col-late"><strong>$149.00</strong></td>
						  	    </tr>
						  	    <tr class="group-rates">
						  	    	<td>
							  	    	<strong>Group</strong> (10+) (purchase 10 or more &ldquo;Individual&rdquo; tickets today)
							  	    </td>
							  	    <td class="col-individuals"><strong>$109.00</strong></td>
							  	    <td class="col-group"><strong>$129</strong></td>
							  	    <td class="col-late"><strong>N/a</strong></td>
		  	    		  </table>
									<p class="info">Tickets are non-refundable but are transferable to another woman.</p>
			  	    		<p class="info"><span class="pull-left"><strong><sup>*</sup>Group = 10 or more tickets:</strong> &nbsp;</span>Purchase ten or more "Individual" tickets in one transaction to save $20 off each "Individual" ticket. (Student tickets don&rsquo;t count toward the group price because they&rsquo;re already discounted.)</p>
			  	    		<p class="info"><span class="pull-left"><strong>Scholarships for Pastor&rsquo;s Wives:</strong></span> &nbsp;We have a limited number of scholarships available for senior pastors’ wives only. Click &ldquo;Register for the Main Session&rdquo; to get your free ticket. </p>
	
			  	    		<p><a href="#" class="btn btn-cta">Register <i>for the</i> Main Session</a></p>
		    		    </div><!-- end block main session -->
								<div class="row down5">
									<div class="span6">
										<div class="pre-session" style="margin-right: 20px;">
											<h3>Leadership Pre-Event</h3>
											<table class="table table-bordered">
												<tr>
													<th colspan="2">Registration</th>
												</tr>
												<tr>
													<td>
														<strong>Early</strong> (by 5/1/14)
													</td>
													<td class="darken">
														<strong>$19.00</strong>
													</td>
												</tr>
												<tr>
													<td>
														<strong>Regular</strong> (by 5/2/14)
													</td>
													<td class="darken">
														<strong>$29.00</strong>
													</td>
												<tr>
													<td>
														<strong>Early</strong> (by 5/1/14)
													</td>
													<td class="darken">
														<strong>$19.00</strong>
													</td>
												</tr>
											</table>
											<p><a href="#" class="btn btn-cta btn-lpe">Register <i>for the</i> Leadership Pre-Event</a></p>
										</div>
									</div><!-- /span7 -->
									<div class="span6">
										<h3>Volunteering?</h3>
										<p><strong>Please do not register here.</strong> If you’re interested in volunteering for True Woman '14, we want to register you at a special 50% off price. <a href="">Get more information and details, along with a separate registration.</a></p>
										<p><a class="btn btn-flat" href="#">Register as a Volunteer</a></p>
									</div>
								</div><!-- /row -->
														
														
												
		    			</section> <!-- end article section -->
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
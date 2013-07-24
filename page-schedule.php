<?php
/*
Template Name: Schedule
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row schedule">
			
				<div id="main" class="span12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<div class="page-header"><h1><?php the_title(); ?> <a class="pull-right btn" href="#">Download Schedule <i class="icon-pdf"></i></a></h1></div>
						
						</header> <!-- end article header -->
						<div class="paper">
							<div class="row">
								<div class="span12">
							    <section class="post_content ">
				    				<?php the_content(); ?>
				    		    
				    		    <div class="table-schedule-wrap pre-session">
				    		      <h2>Thursday, October 9</h2>
			  	    		    <h3>Leadership Pre-Event</h3>
			  	    		    <div class="info-block">
												<p class="info block">Save the date: Oct&rsquo; 9 from 11:30 a.m. – 4 p.m. Details coming soon!</p>
											</div>
				    		    </div><!-- end block pre-session -->
				    		    <div class="break">
					    		    <h2>Registration Opens 4:30pm</h2>
					    		    <!-- p>Take a look around, Shop for books, grab some food, prepare your hearts for worship!</p-->
					    		  </div>
					    		  <div class="table-schedule-wrap main-session">
					    		  	<h3>Main Session</h3>
					    		  	<table class="table table-schedule table-bordered">
					    		  		<tr class="emphasize">
					    		  			<td class="name column-name">6:45&ndash;9:45pm</td>
					    		  			<td class="column-session">Evening Session</td>
					    		  			<td class="column-room">&nbsp;</td>
					    		  		</tr>
					    		  	</table>
					    		  </div><!-- end block pre-session -->
					    		  <hr />
					    		  <div class="table-schedule-wrap main-session">
						    		  <h2>Friday, October 10</h2>
					    		   	<table class="table table-schedule table-bordered">
						    		   	<tr>
						    		   		<td class="name column-name">7:30 &ndash; 8:15am</td>
						    		   		<td class="column-session">Prayer Time (optional)</td>
						    		   		<td class="column-room">&nbsp;</td>
						    		   	</tr>
						    		   	<tr class="emphasize">
						    		   		<td class="name column-name">8:30am</td>
						    		   		<td class="column-session">
						    		   			Morning Session / <a href="/teen-track/">Teen Track</a> Begins 
						    		   		</td>
						    		   		<td class="column-room">&nbsp;</td>
						    		   	</tr>
					    		   	</table>
						    		</div><!-- end block -->
						    		<div class="break">
							    		<h2>Lunch Break 11:45am</h2>
							    	</div>
					    		  <div class="table-schedule-wrap main-session">
				    		    	
				    		    	<table class="table table-schedule table-bordered">
				    		    		<tr>
				    		    			<th class="column-name">1:30pm &ndash; 4pm</th>
				    		    			<th colspan="2">Breakout Sessions<sup>*</sup></th>
				    		    		</tr>
				    		    		<tr class="emphasize">
					    		    		<td class="column-name indent">1:30&ndash;2:30pm</td>
					    		    		<td class="column-session">Session I</td>
					    		    		<td class="column-room">&nbsp;</td>
					    		    	</tr>
					    		    	<tr>
					    		    		<td class="column-name indent">2:30&ndash;3pm</td>
					    		    		<td class="column-session">Break</td>
					    		    		<td class="column-room">&nbsp;</td>
					    		    	</tr>
					    		    	<tr class="emphasize">
					    		    		<td class="column-name indent">3&ndash;4pm</td>
					    		    		<td class="column-session">Session II</td>
					    		    		<td class="column-room">&nbsp;</td>
					    		    	</tr>
					    		    	<tr>
					    		    		<td class="column-name indent">4pm</td>
					    		    		<td class="column-session">Teen Track Ends</td>
					    		    		<td class="column-room">&nbsp;</td>
					    		    	</tr>
				    		    	</table>
				    		    	<p class="info"><sup>*</sup>The breakout session rooms have limited capacities; plan to arrive early for the session of your choice.</p>
				    		    </div><!-- end block pre-session -->
				    		    <div class="break">
				    		    	<h2>Dinner Break 4 &ndash; 6:45pm</h2>
				    		    </div>
				    		    <div class="table-schedule-wrap main-session">
				    		    							
				    		    	<table class="table table-schedule table-bordered">
				    		    		<tr class="emphasize">
				    		    			<td class="column-name">6:45&ndash;9:30pm</th>
				    		    			<td colspan="2">Evening Session<sup>*</sup></th>
				    		    		</tr>
				    		    		<tr>
				    		    			<td class="column-name">9:45pm</td>
				    		    			<td class="column-session">Late Night Hymn Sing (optional)</td>
				    		    			<td class="column-room">&nbsp;</td>
				    		    		</tr>
		
				    		    	</table>
				    		    	<hr />
				    		    	<div class="table-schedule-wrap main-session">
				    		    		<h2>Saturday, October 11</h2>
				    		    		<table class="table table-schedule table-bordered">
				    		    			<tr>
				    		    				<td class="name column-name">7:30 &ndash; 8:15am</td>
				    		    				<td class="column-session">Prayer Time (optional)</td>
				    		    				<td class="column-room">&nbsp;</td>
				    		    			</tr>
				    		    			<tr class="emphasize">
				    		    				<td class="name column-name">8:30am&ndash;12pm</td>
				    		    				<td class="column-session">
				    		    					Final Morning Session 
				    		    				</td>
				    		    				<td class="column-room">&nbsp;</td>
				    		    			</tr>
				    		    		</table>
				    		    	</div><!-- end block -->
				    		    </div><!-- end block pre-session -->
				    			</section> <!-- end article section -->
				    		</div>
				    		<!--<div class="span3">
				    			<ul class="nav">
						    		<li><a href="#">Leadership Pre-Session</a></li>
						    		<li><a href="#">Main Session</a></li>
						    		<li><a href="#">Teen Track</a></li>
					    		</ul>
					    		
					    		
					    	</div>-->
					    </div>
		    		</div><!-- /paper -->
	    			<footer>
	    
	    				<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>
	    				
	    			</footer> <!-- end article footer -->

						
					
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
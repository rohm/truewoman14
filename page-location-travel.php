<?php
/*
Template Name: Location &amp; Travel
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="span12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<div class="page-header"><h1><?php the_title(); ?></h1></div>
						
						</header> <!-- /article header -->
						<div class="paper">
							<div class="row">
								<div class="span9">
					    		<section class="post_content">
		    						<?php the_content(); ?>
		    						<div class="section">
			    						<div class="page-hero photo">
			    							<img src="<?php echo get_template_directory_uri(); ?>/library/img/pagehero-location.jpg" alt="" />
			    						</div>
			    						<div class="section">
				    						<h3>Convention Center Information</h3>
				    						<p>
				    							<address>
				    								<h4><a href="http://www.icclos.com/">Indiana Convention Center</a></h4>
				    								100 South Capitol Ave.<br />
				    								Indianapolis, IN 46225
				    							</address>
				    						</p>
				    						<p><a href="http://visitindy.com/">Indiana Convention &amp; Visitors Association </a></p>
				    						<h3>Inside the Convention Center</h3>
				    						<p><a  href="http://www.icclos.com/pdf/ICCLOSMap100711.pdf">Convention Center Floor&nbsp;Maps (PDF)<i class="icon-pdf"></i></a></p>
									
				    						
				    					</div>
											<div class="section">
												<p>Here&rsquo;s what you need to know about getting to and around downtown Indianapolis:</p>
												<h2><span id="flying"></span>Flying to Indy</h2>
												<p>The Indianapolis Airport Ground Transportation Center, located on the first floor of the Parking Garage offers connection to bus service, hotel courtesy vehicles, car rental and limousines. Curbside taxicab service is available just outside Baggage Claim.</p>
							
												<p>If you are flying into Indianapolis, the airport is approximately 15 miles from downtown. It is important to know that not all of the hotels provide a shuttle service to/from the airport. You will need to check with the hotel where you are staying. The other options available would be a shared ride or limo service, or using a taxi (which could be approx. $40 for a one way trip).</p>
												
												<p><strong><a href="http://www.icclos.com/attendees/getting-around-transportation.aspx">Here is some helpful information</a> on public transportation, rental cars, limo and shared ride services, and taxis.</strong></p>
											</div>
					    		   	<div class="section">
					    		   		<h2><span id="driving"></span>Driving to Indy <a class="btn pull-right" href="http://www.icclos.com/pdf/Driving_Directions_to_ICC.pdf">Driving Directions (PDF)<i class="icon-pdf"></i></a></h2>
					    		   		<p>If you are driving to Indianapolis, <a href="http://www.icclos.com/attendees/getting-around-maps-directions.aspx#directions">here are some helpful directions</a>.</p>
					    		   	</div><!-- /driving -->
				    		    </div>
				    		    <div class="section">
				    		    	<h2><span id="parking"></span>Parking <a href="http://www.icclos.com/pdf/DTParkingMap.pdf" class="btn pull-right">Parking Map (PDF)</a></h2>
				    		    	
				    		    	
				    		    </div><!-- /parking-options -->
				    		    <div class="section">
					    		    <h2><span id="restaurants"></span>Restaurants <a class="btn pull-right" href="http://www.icclos.com/pdf/DTRestaurantsMap.pdf">Hotel Map (PDF)<i class="icon-pdf"></i></a></h2>
					    		    <p>There are a whole lot of yummy restaurants within walking distance of the Convention Center. Check them out with this <a href="http://www.icclos.com/pdf/DTRestaurantsMap.pdf">downtown restaurant map</a>. If you don&rsquo;t want to leave the Convention Center, you can eat in any of these areas: </p>
					    		    <ul>
						    		    <li>The Landing on Maryland Food Court (servicing Halls A–C) features the Espresso Caffé, Indiana Grille, Pizza, and American Delicatessen.</li>
												<li>The Capitol Food Court located at the Georgia Street Entrance also features the Espresso Caffé, Indiana Grille, Pizza, and American Delicatessen.</li>
												<li>The Crossroads Bistro located across from Exhibit Halls D &amp; E offers soups, sandwiches, and a daily lunch special. Adjacent to the Crossroads Bistro is the Espresso Caffé and Pizza Express.</li>
												<li>The refreshment stands in Exhibit Halls A–J offer Jumbo Tenderloin and Indiana BBQ Pork Sandwiches, fresh salads, Hoosier burgers &amp; fries, jumbo hot dogs, Italian subs, and beverages.</li>
												<li>The refreshment stand in the Hoosier Corridor offers a variety of items as well.</li>
						    		  </ul>
					    		  </div>
					    		  <div class="section">
						    		  <h2><span id="lodging"></span>Lodging <a class="btn pull-right" href="http://visitindy.com/files/map/DTHotelMap_c042309.pdf">Hotel Map (PDF)<i class="icon-pdf"></i></a></h2>
						    		  <p><strong>Will discount info be coming in soon?</strong></p>
						    		  <p>Check back soon for discounted rates for True Woman attendees at various hotels within walking distance of the Indiana Convention Center. </p> 
						    		  
						    		  <p>In the meantime, know that Indianapolis offers an enclosed pedestrian walkway from the Convention Center to twelve premium hotels including the Westin, Hyatt, Marriott, Conrad, Omni, Crowne Plaza at Union Station, Embassy Suites and JW Marriott. Cool, huh? <a href="http://visitindy.com/files/map/DTHotelMap_c042309.pdf">Here&rsquo;s a map of the downtown hotels</a> as well as a list of <a href="http://www.icclos.com/attendees/getting-around-hotels.aspx">hotels and their proximity to the Convention Center</a>. </p>

				    		    </div><!-- /hotels -->
				    		    
					    		  
					    		  
				    		    <div class="section">
				    		    	<h2><span id="map"></span>Map of Area<a class="btn pull-right" href="http://bit.ly/1aKaNDS">Open in Google Maps</a></h2>
				    		    	
				    		    	<iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://bit.ly/1aKaNDS" style="color:#0000FF;text-align:left">View Larger Map</a></small></iframe>
				    		    </div>
			    		    	
						    		
		    					</section> <!-- /article section -->
		    				</div>
		    				<div class="span3">
			    				<ul id="sidebar" class="nav nav-location">
			    					<li><a href="#flying">Flying Info</a></li>
			    					<li><a href="#driving">Driving Info</a></li>
			    					<li><a href="#parking">Parking</a></li>
			    					<li><a href="#restaurants">Restaurants</a></li>
			    					<li><a href="#lodging">Lodging</a></li>
			    					<li><a href="#map">Map of Area</a></li>
			    				</ul>
			    			</div>
		    			</div>						
					
					</article> <!-- /article -->
					
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
			
				</div> <!-- /#main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    		
			</div> <!-- /#content -->

<?php get_footer(); ?>
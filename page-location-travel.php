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
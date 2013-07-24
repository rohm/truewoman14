<?php
/*
Template Name: Teen Track
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
							
					    <p><strong>Save the date: October 10 from 8:30 a.m.&ndash;4 p.m.</strong></p>
					    
					    <p>True Woman is offering a special “For Teens Only” Track on Friday. This session is specially designed for young women in grades 9–12. Your teen(s) will love the worship, teaching, games, and fun during this special session.</p>
					    
					    <p>More details coming soon!</p>
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
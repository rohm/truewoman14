<?php
/*
Template Name: Promote
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row schedule">
			
				<div id="main" class="span12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<div class="page-header"><h1><?php the_title(); ?></h1></div>
						
						</header> <!-- end article header -->
						<div class="paper">
					    <section class="post_content ">
		    				<?php the_content(); ?>
		    		    
		    		    <p>Here are several ways to encourage the women in your life to experience True Woman ’14. Just click on a thumbnail below, and once it opens, right click the image and choose &ldquo;Save Image As.&rdquo;</p> 
		    		    
		    		    <p>Promo Video 1</br/>
		    		    Promo Video 2</br/>
		    		    Promo Video 3</p>
		    		    
		    		    <p>11x17 Color Poster</br/>
		    		    11x17 B&W Poster</br/>
		    		    8.5x11 Color Poster</br/>
		    		    8.5x11 B&W Poster</p>
		    		    
		    		    <p>5.5x8.5 Color Flyer</br/>
		    		    5.5x8.5 B&W Flyer </br/>
		    		    
		    		    <p>4x6 Color Rave Card</br/>
		    		    4x6 B&W Rave Card </p>
		    		    
		    		    <p>2x2 Color Bulletin Ad</br/>
		    		    2x2 B&W Bulletin Ad</br/>
		    		    4x4 Color Bulletin Ad</br/>
		    		    4x4 B&W Bulletin Ad </p> 

		    			</section> <!-- end article section -->
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
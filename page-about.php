<?php
/*
Template Name: About
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

					    <section class="post_content">
		    				<?php the_content(); ?>
							  <!--div class="video">
								  <div class="videowrapper">
									  <iframe src="http://player.vimeo.com/video/37554926?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> <p><a href="http://vimeo.com/37554926">TW10 - What Is a True Woman? – Nancy Leigh DeMoss</a> from <a href="http://vimeo.com/truewoman101">TrueWoman 101</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
								  </div>
								</div -->
							  
							  <!--more-->
							  
								</div>
		    			</section> <!-- /article section -->

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
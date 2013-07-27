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
		    				<div id="history">
    		    		<div class="page-hero photo">
	    		    		<img src="<?php echo get_template_directory_uri(); ?>/library/img/pagehero-about-1.jpg" alt="" />
	    		    	</div>
							  <p dir="ltr" class="lead">
								  Christ beside me, Christ before me,<br />
								  Christ behind me . . . Christ within me,<br />
								  Christ below me, Christ above me.
								  
							  </p>
							  <p>If you long to know Christ in the close, all-consuming way this hymn describes . . . if you long to come apart and fix your eyes on Him . . . True Woman &lsquo;14 is your ticket.</p>
								<p><em>Finding freedom, fullness, and fruitfulness in Christ</em> is our desire and prayer for you at this year&lsquo;s conference.</p>
							  <p>He is the Source of all freedom, fullness, fruitfulness, and every other good thing.</p>
							  <p>And that&lsquo;s why True Woman &lsquo;14 could be epic. Monumentally important in your life; monumentally important in the lives of women on a grand scale.</p>
								<p>It will begin and end with Christ. Come and meet with Him.</p>
								<h3>New to True Woman Conferences?</h3>
								<p>Watch, listen to, and read past True Woman Conference messages here. It’s not nearly the same as being there in person, but it will give you an idea of what to expect.</p>
								<p>Learn more about the <a href="http://www.truewoman.com">True Woman Movement</a>.</p>
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
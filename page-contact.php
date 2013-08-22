<?php
/*
Template Name: Contact
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
								<div class="row">
									<div class="span6">
										<h2>Email</h2>
										<p class="info">Feel free to send us any feedback or questions using the form below. But first, we encourage you to see if your question is answered in our <a href="/faqs/">frequently asked questions.</a></p>
										<?php the_content(); ?>
									</div>
									<div class="span5 offset1">
										<div class="well">
											<h3>More info</h3>
											<p><strong>True Woman is an outreach of&nbsp;<em><a href="http://www.reviveourhearts.com">Revive&nbsp;Our&nbsp;Hearts</a></strong></em>.</p>
											<address>
											<strong>Revive Our Hearts</strong><br />
											P.O. Box 2000<br />
											Niles, MI 49120<br />
											<a href="http://www.reviveourhearts.com">ReviveOurHearts.com</a><br /><br />
											<b>Email:</b> <a href="mailto:info@truewoman.com">Info@TrueWoman.com</a><br />
											<b>Call: &nbsp;+1 (877) 966-2608</b>
											</address>
										</div>
									</div>
								
						
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
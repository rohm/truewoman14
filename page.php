<?php get_header(); ?>
			
			<div id="content" class="clearfix">
			
				<div id="main" class="clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<header>
							<div class="page-header"><h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1></div>
						</header> <!-- end article header -->
						<div class="paper">
							
							<div class="row">
								<div class="span9">
									
										<section class="post_content clearfix" itemprop="articleBody">
											<?php the_content(); ?>
									
										</section> <!-- end article section -->
									
								</div><!-- end span9 -->
								<div class="span3">
									<?php get_sidebar(); // sidebar 1 ?>
								</div>
							</div><!-- end row -->
						</div><!-- end paper -->
					</article> <!-- end article -->
					
					<?php comments_template('',true); ?>
					
					<?php endwhile; ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <div class="paper">
						    <section class="post_content">
						    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
						    </section>
					    </div>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
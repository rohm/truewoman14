<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="clearfix" role="main">
				
					
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<div class="page-header page-header-search"><h1 class="page-title" itemprop="headline"><span><?php _e("Search Results for","bonestheme"); ?>:</span> <strong><?php echo esc_attr(get_search_query()); ?></strong></h1></div>
						
						</header> <!-- end article header -->
						<div class="paper">
							<div class="row">
								<div class="span9">
									
										<section class="post_content">
	
											<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
											<?php the_title(); ?>
											<?php the_excerpt('<span class="read-more">' . __("Read more on","bonestheme") . ' "'.the_title('', '', false).'" &raquo;</span>'); ?>
											<?php endwhile; ?>
										</section> <!-- end article section -->
							
									
								</div><!-- end span9 -->
								<div class="span3">
									<?php get_sidebar(); // sidebar 1 ?>
								</div>
							</div><!-- end row -->
						</div><!-- end paper -->
					</article> <!-- end article -->
					
						
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							</ul>
						</nav>
					<?php } ?>			
					
					<?php else : ?>
					
					<!-- this area shows up if there are no results -->
					
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

    
			</div> <!-- end #content -->

<?php get_footer(); ?>
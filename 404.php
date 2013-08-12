<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="span12 clearfix" role="main">

					<article id="post-not-found" class="page" role="article">
						
						<header>
							
							<div class="page-header"><h1><?php _e("Sorry, Article Not Found (404)","bonestheme"); ?></h1></div>
						
						</header> <!-- /article header -->
						<div class="paper paper-short">
							<section class="post_content">
	
								<p><?php _e("Sorry we couldn't find what you were looking for. Here&rsquo;s a list of pages to browse:","bonestheme"); ?></p>
								<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
								<?php bones_toolbar_nav(); // Adjust using Menus in Wordpress Admin ?>
								<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
								
						
							</section> <!-- end article section -->
						</div><!-- end paper -->

					
					</article> <!-- end article -->
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
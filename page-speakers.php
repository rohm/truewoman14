<?php
/*
Template Name: Speakers
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
					  <div class="row">
					    <div class="span9">
  					    <section class="post_content">
  		    				<?php the_content(); ?>

									<!-- hr />
										
									<ol class="nobullets speakers">
										<li>
										<h2 id="">Angela Ardvaark</h2>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum suscipit hendrerit arcu. Nulla dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent pellentesque elit eget tortor. Curabitur id ante in libero pharetra ornare. Morbi interdum dapibus lectus. Vestibulum massa erat, blandit eget, sagittis eget, placerat et, lacus. Donec id diam ac nisi nonummy pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Praesent a lacus vitae elit feugiat feugiat. Maecenas in dolor in dolor vulputate dictum.</li>
										<li>
										<h2 id="">Betty Bigglestein</h2>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum suscipit hendrerit arcu. Nulla dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent pellentesque elit eget tortor. Curabitur id ante in libero pharetra ornare. Morbi interdum dapibus lectus. Vestibulum massa erat, blandit eget, sagittis eget, placerat et, lacus. Donec id diam ac nisi nonummy pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Praesent a lacus vitae elit feugiat feugiat. Maecenas in dolor in dolor vulputate dictum.</li>
										<li>
										<h2 id="">Cynthia Cooper</h2>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum suscipit hendrerit arcu. Nulla dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent pellentesque elit eget tortor. Curabitur id ante in libero pharetra ornare. Morbi interdum dapibus lectus. Vestibulum massa erat, blandit eget, sagittis eget, placerat et, lacus. Donec id diam ac nisi nonummy pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Praesent a lacus vitae elit feugiat feugiat. Maecenas in dolor in dolor vulputate dictum.</li>
										<li>
										<h2 id="">Debbie Downer</h2>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum suscipit hendrerit arcu. Nulla dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent pellentesque elit eget tortor. Curabitur id ante in libero pharetra ornare. Morbi interdum dapibus lectus. Vestibulum massa erat, blandit eget, sagittis eget, placerat et, lacus. Donec id diam ac nisi nonummy pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Praesent a lacus vitae elit feugiat feugiat. Maecenas in dolor in dolor vulputate dictum.</li>
										
										
										<li>
										<h2 id="">Etienne Eareckson</h2>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum suscipit hendrerit arcu. Nulla dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent pellentesque elit eget tortor. Curabitur id ante in libero pharetra ornare. Morbi interdum dapibus lectus. Vestibulum massa erat, blandit eget, sagittis eget, placerat et, lacus. Donec id diam ac nisi nonummy pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Praesent a lacus vitae elit feugiat feugiat. Maecenas in dolor in dolor vulputate dictum.</li>
										<li>
										<h2 id="">Gertrude Googleston</h2>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum suscipit hendrerit arcu. Nulla dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent pellentesque elit eget tortor. Curabitur id ante in libero pharetra ornare. Morbi interdum dapibus lectus. Vestibulum massa erat, blandit eget, sagittis eget, placerat et, lacus. Donec id diam ac nisi nonummy pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Praesent a lacus vitae elit feugiat feugiat. Maecenas in dolor in dolor vulputate dictum.</li>
										<li>
										<h2 id="">Harriett Hopper</h2>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum suscipit hendrerit arcu. Nulla dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent pellentesque elit eget tortor. Curabitur id ante in libero pharetra ornare. Morbi interdum dapibus lectus. Vestibulum massa erat, blandit eget, sagittis eget, placerat et, lacus. Donec id diam ac nisi nonummy pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Praesent a lacus vitae elit feugiat feugiat. Maecenas in dolor in dolor vulputate dictum.</li>
										<li>
										<h2 id="">Inez Islander</h2>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum suscipit hendrerit arcu. Nulla dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent pellentesque elit eget tortor. Curabitur id ante in libero pharetra ornare. Morbi interdum dapibus lectus. Vestibulum massa erat, blandit eget, sagittis eget, placerat et, lacus. Donec id diam ac nisi nonummy pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Praesent a lacus vitae elit feugiat feugiat. Maecenas in dolor in dolor vulputate dictum.</li>
  		    		    </ol -->
  		    			</section> <!-- end article section -->

		    			</div><!-- end span9 -->
		    			<div class="span3">
		    			  <ul id="sidebar" class="nav nav-speakers">
		    			    <li><a href="#nancy">Nancy Leigh DeMoss</a></li>
		    			    <li><a href="#mary">Mary Kassian</a></li>
		    			    <li><a href="#janet">Janet Parshall</a></li>
		    			    <li><a href="#joni">Joni Eareckson Tada</a></li>
		    			  	<!-- li class="break">&nbsp;</li>
			    			  <li><a href="#">Angela Ardvaark</a></li>
			    			  <li><a href="#">Betty Bigglestein</a></li>
			    			  <li><a href="#">Cynthia Cooper</a></li>
			    			  <li><a href="#">Debbie Downer</a></li>
			    			  <li><a href="#">Etienne Eareckson</a></li>
			    			  <li><a href="#">Gertrude Googleston</a></li>
			    			  <li><a href="#">Harriett Hopper</a></li>
			    			  <li><a href="#">Inez Islander</a></li>
			    			  <li><a href="#">Jennifer Juniper</a></li>
			    			  <li><a href="#">Kendra Kant</a></li>
			    			  <li><a href="#">Lucy Lenado</a></li>
			    			  <li><a href="#">Margorie McDonald</a></li-->
		    			  </ul>
		    			</div><!-- end span3 -->
					  </div><!-- end row -->
					</div>
					
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
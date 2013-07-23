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
  		    		    <ol class="nobullets speakers">
  		    		    	<li id="demoss">
	  		    		    	<div class="row">
		  		    		    	<div class="span3 photo">
			  		    		    	<img src="<?php echo get_template_directory_uri(); ?>/library/img/nancy_leigh_demoss@2x.jpg" alt="Photo of Nancy Leigh DeMoss" />
			  		    		    </div>
			  		    		    <div class="span6">
				  		    		    <h2>Nancy Leigh DeMoss</h2>
				  		    		    Nancy Leigh DeMoss has touched the lives of millions of women through Revive Our Hearts and the True Woman Movement, calling them to a heart of revival and biblical womanhood. Her love for the Word and the Lord Jesus are infectious and permeate her online outreaches, conference messages, books, and two daily nationally syndicated radio programs-Revive Our Hearts and Seeking Him with Nancy Leigh DeMoss. Her books have sold more than 2,300,000 copies.

				  		    		  </div>
		  		    		    </div>
		  		    			<li id="kassian">
			  		    			<div class="row">
			  		    				<div class="span3 photo">
			  		    					<img src="<?php echo get_template_directory_uri(); ?>/library/img/mary_kassian@2x.jpg" alt="Photo of Mary Kassian" />
			  		    				</div>
			  		    				<div class="span6 bio">
			  		    					<h2>Mary Kassian</h2>
			  		    					Mary Kassian is an award winning author, internationally renowned speaker, and a distinguished professor at Southern Baptist Seminary in Lousiville, Kentucky. She has published several books, Bible studies and videos, including: In My Father’s House: Finding Your Heart’s True Home, Conversation Peace, and Vertically Inclined.
			  		    					At home in Alberta, Canada, Mary watches lots of sports! Three teenage sons play ice hockey, and her husband, Brent, is chaplain for the local professional football team. The Kassians enjoy biking, hiking, snorkeling, music, board games, mountains, campfires, and their family’s black lab, General Beau.
			  		    					Read more about Mary at her personal web site: <a href="http://www.marykassian.com">MaryKassian.com</a>.

			  		    				</div>
			  		    			</div>
			  		    		</li>
										<li id="parshall">
											<div class="row">
												<div class="span3 photo">
													<img src="<?php echo get_template_directory_uri(); ?>/library/img/janet_parshall@2x.jpg" alt="Photo of Janet Parshall" />
												</div>
												<div class="span6 bio">
													<h2>Janet Parshall</h2>
													Janet Parshall is the host of In The Market with Janet Parshall, a two-hour nationally syndicated program by Moody Radio. Broadcasting from the nation’s capital for over 15 years, Janet has become one of the most respected voices in Christian talk radio. She has received much recognition for her work, including the 2008 National Religious Broadcasters’ On-Air Personality of the Year award. Janet and her husband, Craig, have co-authored several books, including Tough Faith: Trusting God in Troubled Times, The Light in The City: Why Christians Must Advance and Not Retreat, and Traveling a Pilgrim’s Path: Preparing Your Child to Navigate the Journey of Faith.
												</div>
											</div>
										</li>
										<li id="tada">
											<div class="row">
												<div class="span3 photo">
													<img src="<?php echo get_template_directory_uri(); ?>/library/img/joni_eareckson_tada@2x.jpg" alt="Photo of Joni Eareckson Tada" />
												</div>
												<div class="span6 bio">
													<h2>Joni Eareckson Tada</h2>
													Joni Eareckson Tada is the Founder and CEO of Joni and Friends, an organization that promotes Christian ministry in the disability community. Ken Tada, Joni’s best friend and her husband of 25 years, serves with her as the director of ministry development.
												</div>
											</div>
										</li>
									</ol>
									<h3>More speakers will be listed soon...</h3>
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
  		    			
  		    			<footer>
  		    
  		    				<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>
  		    				
  		    			</footer> <!-- end article footer -->
		    			</div><!-- end span9 -->
		    			<div class="span3">
		    			  <ul class="nav nav-speakers">
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
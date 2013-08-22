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
		    		    <div class="page-hero photo">
		    		    <img src="http://truewoman14.com.s3.amazonaws.com/library/img/pagehero-promote.jpg" alt="" />
		    		    </div>
		    		    <p class="lead">Here are several ways to encourage the women in your life to experience True Woman ’14. Just click on a thumbnail below, and once it opens, right click the image and choose&nbsp;&ldquo;Save&nbsp;Image As.&rdquo;</p> 
		    		    <div class="promo-items">
		    		    <h4>Posters</h4>
		    		    <div class="row section">
  		    		      
  		    		      <div class="span3">
    		    		      <div class="info">11x17</div>
    		    		      <a href="http://rohgraphics.s3.amazonaws.com/English/Conference%20Assets/True%20Woman%2014/Promo/TW-promo-11x17.pdf"><img src="http://truewoman14.com.s3.amazonaws.com/library/img/TW-promo-11x17.jpg" alt="Promo 11 x 17" /></a>
    		    		      
    		    		    </div>
    		    		    <div class="span3">
      		    		    <div class="info">11x17 B&amp;W</div>
    		    		      <a href="http://rohgraphics.s3.amazonaws.com/English/Conference%20Assets/True%20Woman%2014/Promo/TW-promo-11x17-bw.pdf"><img src="http://truewoman14.com.s3.amazonaws.com/library/img/TW-promo-11x17-bw.jpg" alt="Promo 11 x 17 B&amp;W" /></a>
    		    		      
    		    		    </div>
    		    		    <div class="span3">
      		    		    <div class="info">8.5x11</div>
    		    		      <a href="http://rohgraphics.s3.amazonaws.com/English/Conference%20Assets/True%20Woman%2014/Promo/TW-promo-85x11.pdf"><img src="http://truewoman14.com.s3.amazonaws.com/library/img/TW-promo-85x11.jpg" alt="Promo 8.5 x 11" /></a>
    		    		     
    		    		    </div>
    		    		    <div class="span3">
      		    		    <div class="info">8.5x11 B&amp;W</div> 
    		    		      <a href="http://rohgraphics.s3.amazonaws.com/English/Conference%20Assets/True%20Woman%2014/Promo/TW-promo-85x11-bw.pdf"><img src="http://truewoman14.com.s3.amazonaws.com/library/img/TW-promo-85x11.jpg" alt="Promo 8.5 x 11 B&amp;W" /></a>
    		    		       
    		    		    </div>
  		    		    </div>
  		    		    <h4>Flyers</h4>
  		    		    <div class="row section">
  		    		      
  		    		      <div class="span3">
  		    		        <a href=""><img src="http://truewoman14.com.s3.amazonaws.com/library/img/TW-promo-55x85.jpg" alt="Promo 5.5 x 8.5" /></a>
  		    		      </div>
  		    		      <div class="span9">
  		    		        <a href=""><img src="http://truewoman14.com.s3.amazonaws.com/library/img/TW-promo-55x85-bw.jpg" alt="Promo 5.5 x 8.5 B&amp;W" /></a>
  		    		      </div>
  		    		    </div>
  		    		    <h4>Rave Cards</h4>
  		    		    <div class="row section">
  		    		      
  		    		      <div class="span3">
  		    		        <a href=""><img src="http://truewoman14.com.s3.amazonaws.com/library/img/TW-promo-55x85.jpg" alt="Promo 5.5 x 8.5" /></a>
  		    		      </div>
  		    		      <div class="span9">
  		    		        <a href=""><img src="http://truewoman14.com.s3.amazonaws.com/library/img/TW-promo-55x85-bw.jpg" alt="Promo 5.5 x 8.5 B&amp;W" /></a>
  		    		      </div>
  		    		    </div>
  		    		    <h4>Bulletins</h4>
  		    		    <div class="row">
  		    		      
  		    		      <div class="span3">
  		    		        <a href=""><img src="http://truewoman14.com.s3.amazonaws.com/library/img/TW-promo-2x2.jpg" alt="Promo 2 x 2" /></a>
  		    		      </div>
  		    		      <div class="span3">
  		    		        <a href=""><img src="http://truewoman14.com.s3.amazonaws.com/library/img/TW-promo-2x2-bw.jpg" alt="Promo 2 x 2 B&amp;W" /></a>
  		    		      </div>
  		    		      <div class="span3">
  		    		        <a href=""><img src="http://truewoman14.com.s3.amazonaws.com/library/img/TW-promo-4x4.jpg" alt="Promo 4 x 4" /></a>
  		    		      </div>
  		    		      <div class="span3">
  		    		        <a href=""><img src="http://truewoman14.com.s3.amazonaws.com/library/img/TW-promo-4x4.jpg" alt="Promo 4 x 4 B&amp;W" /></a>   
  		    		      </div>
  		    		    </div>
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
              </div><!-- end promo items -->
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
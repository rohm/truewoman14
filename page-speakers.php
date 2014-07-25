<?php
/*
Template Name: Speakers
*/
?>

<?php get_header(); ?>

			<div id="content" class="clearfix row">

				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

            <header>

                <div class="page-header"><h1><?php the_title(); ?></h1></div>

            </header> <!-- end article header -->
            <div class="paper">
              <div class="row">
                <div class="col-sm-9">
                  <section class="post_content">
                  <?php the_content(); ?>
                  </section> <!-- end article section -->

                </div><!-- end col-sm-9 -->
                 <div class="col-sm-3">
                  <ul id="sidebar" class="nav nav-speakers">
                    <li><a href="#nancy">Nancy Leigh DeMoss</a></li>
                    <li><a href="#joni">Joni Eareckson Tada</a></li>
                    <li><a href="#janet">Janet Parshall</a></li>
                    <li><a href="#mary">Mary Kassian</a></li>
                    <li><a href="#jim">Jim Cymbala</a></li>
                    <li><a href="#leslie">Leslie Bennett</a></li>
                    <li><a href="#gettys">Keith &amp; Kristyn Getty</a></li>
                    <li><a href="#bob">Bob Lepine</a></li>
                    <li><a href="#naghmeh">Naghmeh Abedini</a></li>
                    <li><a href="#chicago-tabernacle">Chicago Tabernacle Choir</a></li>
                    <li><a href="#blair">Blair Linne</a></li>
                    <li><a href="#jani">Jani Ortlund</a></li>
                    <li><a href="#angie">Angie Smith</a></li>
                    <li><a href="#lauren-chandler">Lauren Chandler</a></li>
                    <li><a href="#trillia">Trillia Newbell</a></li>
                    <li><a href="#susan">Susan Hunt</a></li>
                    <li><a href="#chrissy">Chrissy Toledo</a></li>
                    <li><a href="#scott">Scott Lindsey</a></li>
                    <li><a href="#dannah">Dannah Gresh</a></li>
                    <li><a href="#erin">Erin Davis</a></li>
                    <li><a href="#stephanie">Stephanie Martinez</a></li>
                  </ul>
                </div><!-- end col-sm-3 -->
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
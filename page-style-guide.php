<?php
/*
Template Name: Style Guide
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
						  <div class="row">
						      <div class="span9">
						          <section class="post_content style_guide">
  						            <h2 style="margin-top: 10px;"><span id="#overview"></span>Overview</h2>
  						            <p class="lead">This is a brief description of what the True Woman movement is and what the conferences are all about that should be written by Paula, Lindsay, Lindsey or someone of their caliber. It should include both the “message” and the “purpose” of the True Woman conferences. What is the need we are addressing? </p>
  						            <p><strong>Audience:</strong> All Christian women everywhere.</p>

  						            <h3>When to use these guidelines</h3>

  						            <ul>
  						              <li>Product names</li>
  						              <li>Table top displays</li>
  						              <li>Marketing literature</li>
  						              <li>Premiums or ad specialties</li>
  						              <li>Print Advertising</li>
  						              <li>Websites, apps, emails</li>
  						              <li>Correspondence</li>
  						              <li>Press releases</li>
  						              <li>Internal company documents</li>
  						              <li>Stationery and business forms</li>
  						              <li>Permanent facility signs</li>
  						              <li>Apparel/pins/uniforms</li>
  						            </ul>

                        <section class="style-guide-section">
    						            <h2 class="section-title"><span id="#identity"></span>Identity</h2>
    						            <p>The True Woman mark is shown below. It will appear on signage, amenities, business papers, literature, and other applications. Because the mark is a graphic version of our name, some special guidelines apply. Follow the guidelines following for using our mark in a clear and consistent manner.</p>
    						            <p><strong>The official tagline:</strong> True Woman ‘14 is a call for women to come together and find freedom, fullness, and fruitfulness&nbsp;in&nbsp;Christ. </p>
    						            <h3>Mark Usage</h3>
    						            <p>These are the variations that the TW'14 logo may appear:
                            <img style="margin: 30px 0;" src="<?php echo get_template_directory_uri(); ?>/library/img/styleguide-logos-good.png" alt />
                          <p>
                          <p><a class="btn" href="http://truewoman14.s3.amazonaws.com/downloads/tw14-logo.ai"><i class="icon icon-download-alt"></i> Download Vector Logo (1.6MB)</a></p>
    						            <h3>Do&rsquo;s and Don&rsquo;ts</h3>
                          <img style="margin: 30px 0;" src="<?php echo get_template_directory_uri(); ?>/library/img/identity-dos-donts.png" alt />
                        </section>


                        <section class="style-guide-section">
    						            <h2 class="section-title"><span id="#branding"></span>Branding</h2>
    						            <p>Preamble instructions go here . . . morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
    						            <h3>Freedom, Fullness &amp; Fruitfulness</h3>
    						            <p>We are using three primary watercolor images to communicate the concept of freedom, fullness &amp; fruitfulness in Christ. We chose watercolor paintings because of its subtle, imperfect, work-in-progress sort of beauty that is both calming and making you want to see more.</p>
    						            <h4>Freedom - Birds flying in the clouds</h4>
                          <img src="<?php echo get_template_directory_uri(); ?>/library/img/bg-art-freedom.jpg" alt />
                          <h4>Fullness &mdash; Cluster of ripe grapes</h4>
                          <img src="<?php echo get_template_directory_uri(); ?>/library/img/bg-art-grapes.jpg" alt />
                          <h4>Fruitfulness &mdash; Green full tree</h4>
                          <img src="<?php echo get_template_directory_uri(); ?>/library/img/bg-art-tree.jpg" alt />

                          <h3 style="margin-top: 50px;">Use of imagery (Do's and Don'ts)</h3>
                          <div class="row">
                            <div class="span4">
                              <h4>Do</h4>
                              <ul>
                                <li>Get all images approved before publishing</li>
                                <li>Lorem ipsum dolor sit</li>
                                <li>Lorem ipsum dolor sit</li>
                                <li>Lorem ipsum dolor sit</li>
                                <li>Lorem ipsum dolor sit</li>

                              </ul>
                            </div>
                            <div class="span5">
                              <h4>Don&rsquo;t</h4>
                              <ul>
                                <li>When using imagery for backgrounds, use watercolors. Do not use clip art or photography unless approved.</li>
                                <li>Lorem ipsum dolor sit</li>
                                <li>Lorem ipsum dolor sit</li>
                                <li>Lorem ipsum dolor sit</li>
                              </ul>
                            </div>
                          </div>


    						            <p>Whenever possible, direct people to TrueWoman.com. Capitalize the “T” and “W” and do not use the “www” prefix. Mention that True Woman is a ministry of Revive Our Hearts.</p>
                        </section>



                        <section class="style-guide-section">
    						            <h2 class="section-title"><span id="#color"></span>Palette</h2>
    						            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                          <img src="<?php echo get_template_directory_uri(); ?>/library/img/styleguide-palette.png" alt />

                        </section>

                        <section class="style-guide-section">
    						            <h2 class="section-title"><span id="#typography"></span>Typography</h2>

    						            <table class="table table-bordered table-condensed">
      						            <tr>
        						            <td style="white-space: nowrap"><h1>Heading 1</h1></td>
        						            <td><p>Futura PT, 44px, bold</p></td>
        						          </tr>
        						          <tr>
        						            <td><h2>Heading 2</h2></td>
        						            <td><p>Futura PT, 36px</p></td>
        						          </tr>
        						          <tr>
        						            <td><h3>Heading 3</h3></td>
        						            <td><p>Futura PT, 26px, Caps</p></td>
        						          </tr>
        						          <tr>
        						            <td><h4>Heading 4</h4></td>
        						            <td><p>Futura PT, 20px, bold</p></td>
        						          </tr>
        						          <tr>
        						            <td><h5>Heading 5</h5></td>
        						            <td><p>Futura PT, 16px, bold</p></td>
        						          </tr>
        						          <tr>
        						            <td><p>Paragraph, blockquotes, lists, addresses</p></td>
        						            <td>
          						            <p>
              						          Adobe Caslon Pro, 18px<br>
            						            line-height: 25px
            						          </p>
            						        </td>
        						          </tr>

      						          </table>
                          <h3 style="margin-top: 50px;">Examples</h3>
      						          <p><strong>This is a sample paragraph</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

      						          <h2>Header Level 2</h2>

      						          <ol>
      						             <li>Ordered list is left aligned, consectetuer adipiscing elit.</li>
      						             <li>Aliquam tincidunt mauris eu risus.</li>
      						          </ol>

      						          <blockquote>
        						          <p><strong>This is a blockquote</strong>. Blockquotes are styled like paragraphs but with a 20px padding on the left with a 5px rgb(238, 238, 238) bar.  Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
        						          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        						          <cite>&mdash; Nancy Leigh Demoss</cite>
        						        </blockquote>

      						          <h3>Header Level 3</h3>

      						          <ul>
      						             <li>Sample unordered list, consectetuer adipiscing elit.</li>
      						             <li>Aliquam tincidunt mauris eu risus.</li>
      						          </ul>

      						          <h4>Header Level 4</h4>

      						          <address>
        						          <strong>Sample Address</strong><br />
        						          555 Streetname<br />
        						          Niles, MI 45555<br />
        						        </address>


      						          <h5>Header Level 5</h5>
                        </section>


  						            <?php the_content(); ?>
  						          </section> <!-- end article section -->

  						         </div><!-- end span9 -->
  						         <div class="span3">
  						          <ul class="nav" id="sidebar">
    						          <li><a href="/style-guide/#overview">Overview</a></li>
    						          <li><a href="#identity">Identity</a></li>
    						          <li><a href="#branding">Branding</a></li>
    						          <li><a href="#color">Color Palette</a></li>
    						          <li><a href="#typography">Typography</a></li>
    						        </ul>
  						        </div><!-- end span3 -->
  						    </div><!-- end row -->
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
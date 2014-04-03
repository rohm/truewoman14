<?php
/*
Template Name: Leadership Pre-Event
*/
?>

<!doctype html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js" ><!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="google-site-verification" content="TNv2lZAQPh3hOwL1ntuVV0WiKSHIgGrBJZY8ZGxBRgU" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <meta name="viewport" content="width=device-width">
    <meta property="og:title" content="Register for True Woman &rsquo;14"/>
    <meta property="og:image" content="http://truewoman14.s3.amazonaws.com/library/img/facebook-og.jpg"/>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
    <meta property="og:description" content="If you long to know Christ in a close, all-consuming way . . . if you long to come apart and fix your eyes on Him . . . True Woman &rsquo;14 is your ticket." />
    <script type="text/javascript" src="//use.typekit.net/xmt6rje.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <!-- media-queries.js (fallback) -->
    <!--[if lt IE 9]>
      <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- html5.js -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- wordpress head functions -->
    <?php wp_head(); ?>
    <!-- end of wordpress head -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/library/css/theme.css" rel="stylesheet" type="text/css">
    <!--[if lte IE 10]>
      <link href="<?php echo get_template_directory_uri(); ?>/library/css/ie.css" rel="stylesheet" type="text/css"></link>
    <![endif]-->
    <!-- typeahead plugin - if top nav search bar enabled -->
    <!-- ?php require_once('library/typeahead.php'); ?-->

  </head>

  <body <?php body_class(); ?> data-type="background" data-speed="20">
  <div id="fb-root"></div>
  <div class="page-wrap" data-type="background" data-speed="10">
    <header role="banner">

      <div id="inner-header" class="clearfix">

        <div class="navbar navbar-fixed-top">
          <div id="ha-header" class="navbar-inner ha-header-large">
            <div id="ha-header-brand" class="container">
              <a class="brand" id="logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
                <?php if(of_get_option('branding_logo','')!='') { ?>
                  <img src="<?php echo of_get_option('branding_logo'); ?>" alt="<?php echo get_bloginfo('description'); ?>">
                  <?php }
                  if(of_get_option('site_name','1')) bloginfo('name'); ?></a>
              <div id="toolbar-nav">
                  <div class="nav-collapse toolbar-nav-collapse">
                    <?php bones_toolbar_nav(); // Adjust using Menus in Wordpress Admin ?>

                    <ul id="menu-share-nav" class="nav">

                      <li class="menu-item has-dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Share <i class="icon-share icon-white"></i></a>
                        <ul class="dropdown-menu">
                          <li id="menu-item-facebook" class="menu-item">
                            <div class="fb-like" data-href="http://www.truewoman14.com" data-width="450" data-layout="button_count" data-show-faces="false" data-send="false"></div>
                          </li>
                          <li id="menu-item-twitter" class="menu-item">
                            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.truewoman14.com" data-via="truewoman"  data-hashtags="truewoman14">Tweet</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                          </li>
                          <li id="menu-item-pinterest" class="menu-item">
                            <a href="//pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.truewoman14.com&media=http%3A%2F%2Ftruewoman14.com.s3.amazonaws.com%2Flibrary%2Fimg%2Ffacebook-og.jpg&description=True%20Woman%20%26rsquo%3B14%20%7C%20Finding%20Freedom%2C%20Fullness%20%26amp%3B%20Fruitfullness%20in%20Christ" data-pin-do="buttonPin" data-pin-config="none"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>
                          </li>
                        </ul>
                      </li>

                    </ul>

                  </div>

              </div>
            </div>
            <div id="ha-header-nav" class="nav-container">

              <nav class="main-nav" role="navigation">
                <div class="container">

                  <a class="btn btn-navbar btn-navbar-main" data-toggle="collapse" data-target=".nav-collapse">
                    <b class="caret"></b>
                  </a>

                  <div class="nav-collapse">

                    <?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>

                  </div>
                </div>
              </nav>

              <?php if(of_get_option('search_bar', '1')) {?>
              <form class="navbar-search pull-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                <input name="s" id="s" type="text" class="search-query" autocomplete="off" placeholder="<?php _e('Search','bonestheme'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
              </form>
              <?php } ?>

            </div> <!-- end .nav-container -->
          </div> <!-- end .navbar-inner -->
        </div> <!-- end .navbar -->

      </div> <!-- end #inner-header -->

    </header> <!-- end header -->




			<div id="content" class="clearfix row schedule">

				<div id="main" class="clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" style="margin-top: -4px;">

						<header>
              <div class="page-hero photo jumbotron">
                <div class="container">
                  <h1><?php bloginfo($name) ?> <?php the_title(); ?></h1>
									<p class="event-date">Thursday, October 9, 2014</p>
                  <h2>Be Equipped, Encouraged <i>&amp;</i> Energized</h2>
                  <a class="btn btn-cta" href="https://www.reviveourhearts.com/event-registration/true-woman-14-pre-event/">Register Today $55</a>
                </div>
              </div>

						</header> <!-- end article header -->
						<div class="container">
						<div class="paper">
  						  <section class="post_content">

								<!-- Who What Where -->
								<div class="row who-what-where">
  								  <div class="span8 offset2">
    									<p class="lead">As a women&rsquo;s ministry leader, you are constantly pouring yourself into others.  The Leadership Pre-Event is an opportunity to get away and seek the Lord for a fresh season of ministry.</p>

    									<p>By interacting with other leaders and through Bible teaching designed to meet your needs, you&rsquo;ll . . .</p>
    									<div class="row">
      									<div class="span8 offset2">
        									<ul class="no-bullets text-large">
        									 <li><i class="fa fa-heart-o"></i> Be <em>encouraged</em></li>
        									 <li><i class="fa fa-heart-o"></i> Be <em>equipped</em></li>
        									 <li><i class="fa fa-heart-o"></i> Be <em>energized</em></li>
            							</ul>
            						</div>
          						</div>
    									<p>If you&rsquo;re a women&rsquo;s ministry leader, pastor&rsquo;s wife, counselor, small group leader, or any woman who helps other women grow, this event is for you.</p>
    								</div>
    							</div>
                <!-- Featuring -->
                <div id="featuring">
                  <div class="row">
                    <div class="span4 offset2">
                      <a href="/speakers/#nancy"><img src="http://truewoman14.s3.amazonaws.com/library/img/leaders-speaker-nancy.jpg" alt="Nancy Leigh DeMoss" /></a>
                      <h3><a href="/speakers/#nancy">Nancy Leigh DeMoss</a></h3>
											<!-- <ul class="topic-list">
												<li>Candy canes sesame snaps</li>
												<li>Halvah chocolate bar</li>
											</ul> -->
                    </div>
                    <div class="span4">
                      <a href="/speakers/#leslie"><img src="http://truewoman14.s3.amazonaws.com/library/img/leaders-speaker-leslie.jpg" alt="Nancy Leigh DeMoss" /></a>
                      <h3><a href="/speakers/#leslie">Leslie Bennett</a></h3>
											<!-- <ul class="topic-list">
												<li>Equipping Women&rsquo;s Ministry</li>
												<li>Sweet roll cotton candy</li>
											</ul> -->
                    </div>
                    <!-- <div class="span8 offset2 also-featuring">
                      <p>Also, <a href="/speakers/#scott">Scott Lindsey</a> of <a href="http://www.logos.com">Logos</a> will offer helpful tips on the tools available that open the Word.</p>
                    </div> -->
                  </div>
                </div>
                <p class="text-center"><em>This is a &ldquo;pre-conference&rdquo; leading up to True Woman &rsquo;14, October 9&ndash;11.</p><p class="text-center"><strong>Space is limited so register early.</strong></em></p>
               	<!-- Schedule -->
  							 <div class="table-schedule-wrap pre-session">
  							 <h3>Schedule</h3>
  							 <table class="table table-schedule table-bordered">
  							 <tr class="">
  							 <td class="column-time">11:00 a.m.</td>
  							 <td class="column-session" colspan="2">Doors open</td>
  							 </tr>
  							 <tr class="">
  							 <td class="column-time">11:30 a.m.</td>
  							 <td class="column-session" colspan="2">Welcome</td>
  							 </tr>
  							 <tr class="">
  							  <td class="column-time">11:45 a.m.</td>
  							  <td class="column-session" colspan="2">Lunch</td>
  							  </tr>
  							 <tr class="emphasize">
  							 <td class="column-time">12:15 p.m.</td>
  							 <td class="column-session">Nancy Leigh DeMoss</td>
  							 <td class="column-topic">TBD</td>
  							 </tr>
  							 <tr class="">
  							 <td class="column-time">1:00 p.m.</td>
  							 <td class="column-session" colspan="2">Interaction around tables</td>
  							 </tr>
  							 <tr class="emphasize">
  							 <td class="column-time">1:30 p.m.</td>
  							 <td class="column-session">Panel</td>
  							 <td class="column-topic">TBD</td>
  							 </tr>
  							 <tr class="">
  							 <td class="column-time">2:10 p.m.</td>
  							 <td class="column-session" colspan="2">Break</td>
  							 </tr>
  							 <tr class="">
  							 <td class="column-time">2:30 p.m.</td>
  							 <td class="column-session"><a href="/speakers/#scott">Scott Lindsey</a></td>
  							 <td class="column-topic">Logos Software</td>
  							 </tr>
  							 <tr class="emphasize">
  							 <td class="column-time">2:45 p.m.</td>
  							 <td class="column-session">Leslie Bennett</td>
  							 <td class="column-topic">&ldquo;Equipping Women&rsquo;s Ministry&rdquo;</td>
  							 </tr>
  							 <tr class="">
  							 <td class="column-time">3:15 p.m.</td>
  							 <td class="column-session" colspan="2">True Woman information</td>
  							 </tr>
  							 <tr class="emphasize">
  							 <td class="column-time">3:35 p.m.</td>
  							 <td class="column-session" colspan="2">Interaction around tables</td>
  							 </tr>
  							 <tr class="">
  							 <td class="column-time">4:00 p.m.</td>
  							 <td class="column-session" colspan="2">Dismiss</td>
  							 </tr>
  							 </table>
  							 </div><!-- end block pre-session -->
								 <p class="note text-center"><em>* Schedule is subject to change</em></p>
    						</section>
								<?php the_content(); ?>

		    		</div><!-- /paper -->
		      	</div><!-- /container -->


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

<div class="container">
  <a href="/register/" class="btn btn-cta btn-register btn-register-global">Register Now <b class="arrow-right">›</b><div class="info">Pre-Event, Main Conference &amp; Volunteer Registration. Early Rates Through 5/1/14</div></a>
</div>

</div><!-- end page-wrap -->
<div class="small-screen-hide" style="height: 94px;">&nbsp;</div>
<footer role="contentinfo">
  <div class="container">

    <div id="inner-footer" class="clearfix">
      <div class="row">
        <div class="span6">
          <img id="footer-branding" src="<?php echo get_template_directory_uri(); ?>/library/img/footer_branding@2x.png" alt="True Woman is a Ministry of Revive Our Hearts" />
        </div>
        <div class="span6">
          <nav class="footer-social-nav pull-right">
            <em><strong>Connect with us!</strong></em>
            <a href="http://www.facebook.com/TrueWomanMovement" class="btn facebook"><i class="icon-facebook">Facebook</i></a>
            <a href="http://twitter.com/TrueWoman" class="btn twitter"><i class="icon-twitter">Twitter</i></a>
            <!--a href="http://www.pinterest.com/reviveourhearts/" class="btn pinterest"><i class="icon-pinterest">Pinterest</i></a-->
            <a href="http://vimeo.com/truewoman101" class="btn vimeo"><i class="icon-vimeo">Vimeo</i></a>
          </nav>
        </div>
      </div><!-- end .row -->

      <nav class="clearfix">
        <p class="attribution pull-left"><a href="http://www.truewoman.com">True Woman</a> is a ministry of <em><a href="http://www.reviveourhearts.com">Revive Our Hearts</a></em>.</p>
        <div class="footer-links-wrap">
          <?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
          <strong class="tel">(877) 966-2608</strong>
          <div id="toolbar-nav-2" class="small-screen-only footer-links"><?php bones_toolbar_nav(); // Adjust using Menus in Wordpress Admin ?></div>
        </div>
      </nav>



    </div> <!-- end #inner-footer -->
  </div><!-- end .container -->
</footer> <!-- end footer -->

<!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

<script src="<?php echo get_template_directory_uri(); ?>/library/js/waypoints.min.js"></script>
<script type="text/javascript">
var $head = jQuery( '#ha-header' );
jQuery( '.ha-waypoint' ).each( function(i) {
    var $el = jQuery( this ),
        animClassDown = $el.data( 'animateDown' ),
        animClassUp = $el.data( 'animateUp' );

    $el.waypoint( function( direction ) {
        if( direction === 'down' && animClassDown ) {
            $head.attr('class', 'navbar-inner ' + animClassDown);
        }
        else if( direction === 'up' && animClassUp ){
            $head.attr('class', 'navbar-inner ' + animClassUp);
        }
    }, { offset: '100%' } );
} );

var $intro = jQuery('.tw14-logo-purple');
jQuery('.ha-waypoint').each( function(i) {
  var $el = jQuery( this ),
      animClassDown = $el.data( 'animateDown' ),
      animClassUp = $el.data( 'animateUp' );

  $el.waypoint( function( direction ) {
      if( direction === 'down' && animClassDown ) {
          $intro.attr('class', 'tw14-logo-purple ' + animClassDown);
      }
      else if( direction === 'up' && animClassUp ){
          $intro.attr('class', 'tw14-logo-purple ' + animClassUp);
      }
  }, { offset: '100%' } );

});

</script>
<!-- script type="text/javascript">
    jQuery(function() {
        var offset = jQuery("#sidebar").offset();
        var topPadding = 353;
        jQuery(window).scroll(function() {
            var topDistance = jQuery(window).scrollTop();
            // If the distance scrolled is <= to height of the container - the height of the sidebar
            // Previous check would never have happened as offset.top is constantly increasing
            if (topDistance <= (jQuery('.paper').height() - jQuery("#sidebar").height())  && (jQuery(".span3").css("float") == "left")) {
                // Animate the sidebar down to the position (follow me!)
                jQuery("#sidebar").stop().animate({
                    marginTop: topDistance - offset.top + topPadding
                });
            // Otherwise, we've reached the end
            } else {
                // Send me back to the top!
                jQuery("#sidebar").stop().animate({
                    marginTop: 0
                });
            };
        });
    });
</script-->
<script type="text/javascript"> // Google Analytics
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-667755-34', 'truewoman14.com');
  ga('send', 'pageview');

</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
<?php wp_footer(); // js scripts are inserted using this function ?>

</body>

</html>
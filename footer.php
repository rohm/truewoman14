<a href="/register/" class="btn btn-cta btn-register btn-register-global">Register Now <b class="arrow-right">›</b><div class="info">Pre-Event, Main Conference &amp; Volunteer Registration. Early Rates Through 5/1/14</div></a>
	</div> <!-- end #container -->
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
<script type="text/javascript">
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
</script>
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
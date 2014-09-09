	</div> <!-- end #container -->
</div><!-- end page-wrap -->
<div class="small-screen-hide" style="height: 94px;">&nbsp;</div>
<footer role="contentinfo">
	<div class="container">

		<div id="inner-footer" class="clearfix">
			<nav class="clearfix">
				<p class="attribution pull-left"><a href="http://www.truewoman.com">True Woman</a> is a ministry of <em><a href="http://www.reviveourhearts.com">Revive Our Hearts</a></em>.</p>
				<div class="footer-links-wrap">
					<strong class="tel">(877) 966-2608</strong>
					
				</div>
			</nav>



		</div> <!-- end #inner-footer -->
	</div><!-- end .container -->
</footer> <!-- end footer -->

<!--[if lt IE 7 ]>
  	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->
<!-- <script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.plugin.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.countdown.min.js"></script> -->
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
// jQuery(function () {
//   var fullPriceDate = new Date();
//   fullPriceDate = new Date(2014, 5 - 1, 2);
//   jQuery('#defaultCountdown').countdown({until: fullPriceDate, format: 'DHm'});
// });
</script>
<!-- script type="text/javascript">
		jQuery(function() {
				var offset = jQuery("#sidebar").offset();
				var topPadding = 353;
				jQuery(window).scroll(function() {
            var topDistance = jQuery(window).scrollTop();
            // If the distance scrolled is <= to height of the container - the height of the sidebar
            // Previous check would never have happened as offset.top is constantly increasing
						if (topDistance <= (jQuery('.paper').height() - jQuery("#sidebar").height())  && (jQuery(".col-sm-3").css("float") == "left")) {
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

<div class="size">
	<div class="visible-xs">xs</div>
	<div class="visible-sm">sm</div>
	<div class="visible-md">md</div>
	<div class="visible-lg">lg</div>
</div>
</body>

</html>
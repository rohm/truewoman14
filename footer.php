		<a href="#" class="btn btn-cta btn-register btn-register-global">Register Now<div class="info">Early Rates through 5/1/14</div></a>
	</div> <!-- end #container -->
</div><!-- end page-wrap -->
<div style="height: 94px;">&nbsp;</div>
<footer role="contentinfo">
	<div class="container">
		
		<div id="inner-footer" class="clearfix">
		  <div id="widget-footer" class="clearfix row-fluid">
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		    <?php endif; ?>
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		    <?php endif; ?>
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		    <?php endif; ?>
		  </div>
		  <div class="row">
			  <div class="span6">
				  <img id="footer-branding" src="<?php echo get_template_directory_uri(); ?>/library/img/footer_branding@2x.png" alt="True Woman is a Ministry of Revive Our Hearts" />
				</div>
				<div class="span6">
					<nav class="footer-social-nav pull-right">
						<em><strong>Connect with us!</strong></em>
						<a href="https://www.facebook.com/ReviveOurHearts" class="btn facebook"><i class="icon-facebook">Facebook</i></a>
						<a href="http://twitter.com/reviveourhearts" class="btn twitter"><i class="icon-twitter">Twitter</i></a>
						<a href="http://www.pinterest.com/reviveourhearts/" class="btn pinterest"><i class="icon-pinterest">Pinterest</i></a>
						<a href="http://vimeo.com/reviveourhearts" class="btn vimeo"><i class="icon-vimeo">Vimeo</i></a>
					</nav>
				</div>
			</div><!-- end .row -->
			
			<nav class="clearfix">
				<p class="attribution pull-left"><em>True Woman</em> is a ministry of <em><a href="http://www.reviveourhearts.com">Revive Our Hearts</a></em></p> <?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
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
</script>

<?php wp_footer(); // js scripts are inserted using this function ?>

</body>

</html>
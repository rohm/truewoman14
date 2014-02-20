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
										<ul id="menu-back" class="nav"><li class="menu-item"><a href="/">Back to the Homepage</a></li></ul>
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
										<h1 class="special-page-title"><?php the_title(); ?></h1>
										<?php bones_register_nav(); // Adjust using Menus in Wordpress Admin ?>

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

		<div class="container">

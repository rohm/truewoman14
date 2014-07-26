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

		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/library/css/theme.css" rel="stylesheet" type="text/css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<!--[if lte IE 10]>
			<link href="<?php echo get_template_directory_uri(); ?>/library/css/ie.css" rel="stylesheet" type="text/css"></link>
		<![endif]-->
		<!-- typeahead plugin - if top nav search bar enabled -->
		<!-- ?php require_once('library/typeahead.php'); ?-->

	</head>

	<body <?php body_class(); ?> data-type="background" data-speed="20">

	<div id="fb-root"></div>
	<div class="page-wrap" data-type="background" data-speed="10">
		<nav id="main-nav-xs" class="navbar navbar-default visible-xs navbar-fixed-top" role="navigation">
			<div class="navbar-inner">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Brand</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
						<?php bones_toolbar_nav(); // Adjust using Menus in Wordpress Admin ?>

						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Link</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</div>
		</nav>
		<!-- Header -->
		<header role="banner" class="visible-sm visible-md visible-lg">

			<div id="inner-header" class="clearfix">

				<div class="navbar navbar-fixed-top">
						<!--
					<div class="adsliver">
						<p>
							True Woman &rsquo;14 <strong>early pricing ends</strong> in: <span id="defaultCountdown"></span> <a href="http://www.truewoman14.com/register" class="btn">Register Now</a>
						</p>
					</div>
					-->
					<div id="ha-header" class="navbar-inner ha-header-large">
						<div id="ha-header-brand" class="container">
							<a class="navbar-brand" id="logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
								<?php if(of_get_option('branding_logo','')!='') { ?>
									<img src="<?php echo of_get_option('branding_logo'); ?>" alt="<?php echo get_bloginfo('description'); ?>">
									<?php }
									if(of_get_option('site_name','1')) bloginfo('name'); ?></a>
							<div id="toolbar-nav" class="">
									<div class="nav-collapse toolbar-nav-collapse navbar-right">
										<?php bones_toolbar_nav(); // Adjust using Menus in Wordpress Admin ?>

										<ul id="menu-share-nav" class="navbar-nav nav">

											<li class="menu-item has-dropdown">

												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Share <i class="fa fa-share"></i></a>
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

										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>


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

		<div class="container">

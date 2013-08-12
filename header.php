<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title( '|', true, 'right' ); ?></title>
				
		<meta name="viewport" content="width=device-width">
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

		<!-- typeahead plugin - if top nav search bar enabled -->
		<!-- ?php require_once('library/typeahead.php'); ?-->

	</head>
	
	<body <?php body_class(); ?> data-type="background" data-speed="20">
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
		
		<div class="container">
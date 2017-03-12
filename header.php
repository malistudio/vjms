<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title('|'); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					
					<div id="logo" class="m-all t-2of5 d-2of5" itemscope itemtype="http://schema.org/Organization">
						<a itemprop="url" href="<?php echo home_url(); ?>" rel="nofollow"><img itemprop="logo" src="<?php bloginfo('template_url'); ?>/library/images/ms-logo-header.svg" width="182" height="72" alt="mali studio"></a>
					</div>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>

					<div class="m-all t-3of5 d-3of5 last-col cf">
						<div class="vjms-social-holder cf">
							<a class="tooltip" href="https://twitter.com/malistudio" title="twitter" rel="nofollow" target="_blank"><span class="dashicons dashicons-twitter"></span></a>
							<a class="tooltip" href="https://www.facebook.com/malistudio" title="facebook" rel="nofollow" target="_blank"><span class="dashicons dashicons-facebook-alt"></span></a>
							<a class="tooltip" href="https://plus.google.com/+VedranJukic" title="google+" rel="nofollow" target="_blank"><span class="dashicons dashicons-googleplus"></span></a>
							<a class="tooltip" href="<?php echo home_url(); ?>/kontakt" title="email" rel="nofollow"><span class="dashicons dashicons-email-alt"></span></a>
							<!-- html5 toggle search -->
				            <form role="search" method="get" class="search-form cf" action="<?php echo home_url( '/' ); ?>">
				              <label>
				               <span class="screen-reader-text"><?php _e('Search for:','vjms');?></span>
				               <input type="search" class="search-field tooltip" placeholder="<?php _e('Search...','vjms');?>" value="" name="s" title="<?php _e('Search for:','vjms');?>" autocomplete="off" />
				             </label>
				               &nbsp;<input type="button" class="search-submit " value="Search" />
				           </form> <!-- toggle search - END -->
						</div>
						<div class="cf"></div>

						<div class="vjms-nav-holder">
						<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<?php wp_nav_menu(array(
	    					         'container' => false,                           // remove nav container
	    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
	    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
	    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
	    					         'theme_location' => 'main-nav',                 // where it's located in the theme
	    					         'before' => '',                                 // before the menu
	        			               'after' => '',                                  // after the menu
	        			               'link_before' => '',                            // before each link
	        			               'link_after' => '',                             // after each link
	        			               'items_wrap'  => '<ul class="slimmenu">%3$s</ul>',   // added ul class for slimmenu
	        			               'depth' => 0,                                   // limit the depth of the nav
	    					         'fallback_cb' => ''                             // fallback function (if there is one)
							)); ?>

						</nav>
						</div>
					</div>

				</div>

			</header>

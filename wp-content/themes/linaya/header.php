<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package linaya
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo bloginfo('template_directory') ?>/css/bootstrap.min.css" rel="stylesheet">
	<!-- jQuery Version 1.11.1 -->
	<script src="<?php echo bloginfo('template_directory') ?>/js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>

	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body <?php body_class(); ?>>

	<?php /*<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'linaya' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->*/
?>

	<header>
		<div class="logo">
			<div class="col-lg-offset-2">
				<img src="<?php echo bloginfo('template_directory') ?>/image/logo.PNG" alt="" class="taille-logo">
			</div>
			<div class="logo">
				<div class="col-lg-offset-2">

					<div class="style-titre">
						<ul>

							<li>
								<a href="#" class="type1">Men</a>
							</li>
							<li>
								<a href="#" class="type1">Technology</a>
							</li>
							<li>
								<a href="#" class="type1">Busniss</a>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Navigation -->
		<div class="menu">
			<nav class="navbar navbar-inverse color-nav " role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
								data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php

							$defaults = array(
								'theme_location'  => '',
								'menu'            => '',
								'container'       => 'div',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							);

							wp_nav_menu( $defaults );

						?>
						<div class="form-group">
							<a href="#"><img src="<?php echo bloginfo('template_directory') ?>/image/fb.PNG" class="margin-img"></a>
							<a href="#"><img src="<?php echo bloginfo('template_directory') ?>/image/tw.PNG" class="margin-img"></a>
							<a href="#"><img src="<?php echo bloginfo('template_directory') ?>/image/fb.PNG"></a>
							<a href="#"><img src="<?php echo bloginfo('template_directory') ?>/image/in.PNG"></a>

							<form role="search" class="navbar-form  glyphicon searchform" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<div>
									<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
									<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Recherche" class="form-control recherche taille-search"/>
									<input type="submit" id="searchsubmit" value="" />
								</div>
							</form>



						</div>

					</div>

					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>
		</div>
	</header>

	<section class="content" id="content" >

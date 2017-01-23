<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package euphoria
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="jquery-1.12.4.min.js"></script>
<!-- Latest compiled and minified CSS-->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
	crossorigin="anonymous">
	<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"
	type="text/javascript"></script>
	<!--	Latest compiled and minified JavaScript-->
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
	crossorigin="anonymous" type="text/javascript">
	
</script>
<link href='https://fonts.googleapis.com/css?family=Lobster'
	rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'euphoria' ); ?></a>

	<!-- <header id="masthead" class="site-header" role="banner">
	-->
	<div class="navbar navbar-inverse navbar-fixed-top">
		
		
			
			<div class="navbar-header">
<div class="logo">			

<a class="nav-bar-brand" href="http://localhost:1234/dinosophy/wordpress"> <img class="logo-img"
						src="http://localhost:1234/dinosophy/wordpress/images/euphorialogosm1.png" alt="Home" width="" height=""><br />Home</a>

			</div>
			
				<button class="navbar-toggle" data-toggle="collapse"
					data-target=".navHeaderCollapse">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>

			</div>
			<div class="collapse navbar-collapse navHeaderCollapse">
			<ul class="nav navbar-nav navbar-right">

			<li><a href="http://localhost:1234/dinosophy/wordpress/book-now/"><img class="logo-img"
						src="http://localhost:1234/dinosophy/wordpress/images/book.png" alt="Home" width="" height="" syle="float:right;">
							
						</a></li>
			<li><a href="http://localhost:1234/dinosophy/wordpress/facilities/">Facilities</a></li>
			<li><a href=" http://localhost:1234/dinosophy/wordpress/location/">Location</a></li>	
			
				
					
		<li><a href="#">Tours</a></li>
					<li><a href="http://localhost:1234/dinosophy/wordpress/news/ ">News & Events</a></li>
					
					


		<!-- <li class="eesti">
		<a  class="">							
<img src="http://localhost:1234/dinosophy/wordpress/images/flag-heart-3d-250sm.png"></a>
		</li>
		-->

					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false">More!<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="images/shutterstock_99784436.jpg">Our Staff</a></li>
							<li><a href="#">Our friends</a></li>
							<li role="separator" class="divider"></li>
							<li><a
								href="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Rooster_silhouette.svg/962px-Rooster_silhouette.svg.png">Pictures
		of hippies</a></li>
		
		
</ul>
</li>
	

		
</div>
	</div>

		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php // esc_html_e( 'Primary Menu', 'euphoria' ); ?></button>
		
			<!-- <?php // wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?> -->
		</nav><!-- #site-navigation -->
		
	 </header> --><!-- #masthead -->
	 
<div class="container_content">
	<div id="content" class="site-content">


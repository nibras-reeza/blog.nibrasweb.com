<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package CeeVeeWordPress
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

   
	
	<meta name="description" content="<?php echo get_the_title(); ?>">
	<meta name="author" content="<?php the_author(); ?> ">

   
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/default.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/layout.css">
   <link rel="stylesheet" href="../css/media-queries.css">
   <link rel="stylesheet" href="../css/magnific-popup.css">
   

  
	<script src="../js/modernizr.js"></script>

   
	<link rel="shortcut icon" href="favicon.png" >

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'ceeveewordpress' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
	    <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li><a  href="http://www.nibrasweb.com/index.html#home">Home</a></li>
            <li><a  href="http://www.nibrasweb.com/index.html#about">About</a></li>
	         <li><a  href="http://www.nibrasweb.com/index.html#resume">Resume</a></li>
            <li><a  href="http://www.nibrasweb.com/index.html#portfolio">Projects</a></li>
            <li><a  href="http://www.nibrasweb.com/index.html#contact">Contact</a></li>
			<li class="current"><a  href="http://blog.nibrasweb.com">Blog</a></li>
         </ul> <!-- end #nav -->
      </nav> <!-- end #nav-wrap -->

<div class="row banner">
		<div class="site-branding">
			<h1 class="site-title responsive-headline"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<div class="banner-text">
			

			
			<hr/>
			<h3 class="site-description"><?php bloginfo( 'description' ); ?></h3>			
			</div>
		</div><!-- .site-branding -->
		

</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content row">

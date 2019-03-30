<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	

	<?php wp_head(); ?>
	

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css"/>

</head>

<body class=" <?php body_class(); ?> homepage is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<section id="header" class="container">

		<h1 id="logo" class="logo site-branding site-branding-container">
				<!--</*?php get_template_part( 'template-parts/header/site', 'branding' ); ?*/>-->
				 <a href="<?php echo home_url(); ?>">
				 <img src="<?php echo get_stylesheet_directory_uri();?>/images/logo.svg">
</a>
</h1><!-- .layout-wrap -->
			
			<!-- Nav -->
			<nav id="nav">
			<?php
echo wp_nav_menu();
?>
			</nav>
</section>
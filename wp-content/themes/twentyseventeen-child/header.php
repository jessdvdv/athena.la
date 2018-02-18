<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Athena.LA
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="A WordPress portfolio site, built by Jessica Weber for Athena.LA.">

	<?php wp_head(); ?>
</head>

<body <php? body_class(); ?>
<div id="page" class="hfeed site">
	<header id="masthead" class="container clearfix">
		<div class="page-header " id="header-logo">
			<a href="<?php echo site_url(); ?>" class="top-logo">
				<span class="title"><?php bloginfo('name'); ?></span>
			</a>
		</div>	
		<div class="page-header " id="header-nav">
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'top-nav', 
					'menu_class' => 'nav-menu',
					'menu' => 'Top Menu' ) ); ?>
			</nav>
		</div>
	</header>

<div id="main" class="site-main clearfix">

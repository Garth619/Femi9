<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<script src="https://use.typekit.net/bud2inz.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body <?php body_class(); ?>>
	
	<div class="wrapper">
		
		<div class="banner">
	
			<?php if(is_page('6')):?>
				<img src="<?php bloginfo('template_directory');?>/images/mobile-banner1.jpg"/>
			<?php endif;?>
			
			
			<?php if(is_page('10')):?>
				<img src="<?php bloginfo('template_directory');?>/images/mobile-banner2.jpg"/>
			<?php endif;?>
			
			<?php if(is_page('12')):?>
				<img src="<?php bloginfo('template_directory');?>/images/mobile-banner3.jpg"/>
			<?php endif;?>
			
			<?php if(is_page('14')):?>
				<img src="<?php bloginfo('template_directory');?>/images/mobile-banner4.jpg"/>
			<?php endif;?>

		</div><!-- banner -->

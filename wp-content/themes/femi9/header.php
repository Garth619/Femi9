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
<script src="<?php bloginfo('template_directory');?>/stick/jq-sticky-anything.min.js" type="text/javascript"></script>


<?php if (!is_mobile()):?>	


<script type="text/javascript">
	
	jQuery(document).ready(function(){
		
		jQuery('.desktop_menu').stickThis({
			
			zindex:     10000
			
		});
		
		
	});
	
	
</script>


<?php endif;?>




<?php if (is_mobile()):?>	


<script type="text/javascript">
	
	jQuery(document).ready(function(){
		
		jQuery('.e-tour').stickThis({
			
			zindex:     10000
			
		});
		
		
	});
	
	
</script>


<?php endif;?>






</head>

<body <?php body_class(); ?>>
	
	

	
	
	
	<div class="wrapper">
		
<?php if (is_mobile()):?>	
	
		<div class="banner">
	
			<?php if(is_page('6')):?>
				<img class="slide" src="<?php bloginfo('template_directory');?>/images/mobile-banner1.jpg"/>
			<?php endif;?>
			
			
			<?php if(is_page('10')):?>
				<img class="slide" src="<?php bloginfo('template_directory');?>/images/mobile-banner2.jpg"/>
			<?php endif;?>
			
			<?php if(is_page('12')):?>
				<img class="slide" src="<?php bloginfo('template_directory');?>/images/mobile-banner3.jpg"/>
			<?php endif;?>
			
			<?php if(is_page('14')):?>
				<img class="slide" src="<?php bloginfo('template_directory');?>/images/mobile-banner4.jpg"/>
			<?php endif;?>
			


		
		<div class="femi_bar">
			<img class="logo" src="<?php bloginfo('template_directory');?>/images/femi9.png"/>
			<div class="e-tour">
				<a href="<?php bloginfo('url');?>/next-steps#get_started"><img src="<?php bloginfo('template_directory');?>/images/etour.png"/></a>
		</div>
	
</div><!-- mobile_femi_bar -->
		
		
		</div><!-- banner -->
		
			<?php endif;?><!-- end of mobile -->
			
			
			
			
			
			
	<?php if (!is_mobile()):?>	
	
		<div class="banner">
	
			<?php if(is_page('6')):?>
				<img class="slide" src="<?php bloginfo('template_directory');?>/images/banner1.jpg"/>
			<?php endif;?>
			
			
			<?php if(is_page('10')):?>
				<img class="slide" src="<?php bloginfo('template_directory');?>/images/banner2d.jpg"/>
			<?php endif;?>
			
			<?php if(is_page('12')):?>
				<img class="slide" src="<?php bloginfo('template_directory');?>/images/banner3.jpg"/>
			<?php endif;?>
			
			<?php if(is_page('14')):?>
				<img class="slide" src="<?php bloginfo('template_directory');?>/images/banner4.jpg"/>
			<?php endif;?>
			


		
		<div class="femi_bar">
			<img class="logo" src="<?php bloginfo('template_directory');?>/images/femi9.png"/>
			<div class="e-tour">
				<a href="<?php bloginfo('url');?>/next-steps#get_started"><img src="<?php bloginfo('template_directory');?>/images/etour.png"/></a>
		</div>
	
		</div><!-- mobile_femi_bar -->
		
		
		</div><!-- banner -->
		
		<div class="desktop_menu">
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</div><!-- desktop menu -->
		
		
		
	<?php endif;?><!-- end of desktop -->
			
			
			
			
			



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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=4" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<script src="https://use.typekit.net/bud2inz.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script src="<?php bloginfo('template_directory');?>/stick/jq-sticky-anything.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory');?>/scrollmagic/scrollmagic/minified/ScrollMagic.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory');?>/scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
<?php if (!is_handheld()):?>	


<script type="text/javascript">
	
	jQuery(document).ready(function(){
		
		
		
	jQuery('.desktop_menu').stickThis({
			
			zindex:     10000
			
		});
		
		jQuery(".pre_loader").delay(2000).fadeOut("slow");
		
		<?php if(is_page('14')):?>
		
		// init controller
	var controller = new ScrollMagic.Controller({
		globalSceneOptions: {
			
			duration: 700
			
			}
		
		});

	// build scenes
	new ScrollMagic.Scene({triggerElement: "#get_started"})
					.setClassToggle("#get_started", "active") // add class toggle
					//.addIndicators() // add indicators (requires plugin)
					.addTo(controller);
					
	new ScrollMagic.Scene({triggerElement: "#get_started"})
					.setClassToggle(".buttons", "active") // add class toggle
					//.addIndicators() // add indicators (requires plugin)
					.addTo(controller);
		
		<?php endif;?>
		
		
	});
	
	
// 	jQuery('.active').css("background","red");
	
</script>


<?php endif;?>




<?php if (is_handheld()):?>	


<script type="text/javascript">
	
	jQuery(document).ready(function(){
		
		jQuery('.e-tour').stickThis({
			
			zindex:     10000
			
		});
		
		jQuery(".pre_loader").delay(2000).fadeOut("slow");
		
		<?php if(is_page('14')):?>
		
		// init controller
	var controller = new ScrollMagic.Controller({
		globalSceneOptions: {
			
			duration: 700
			
			}
		
		});

	// build scenes
	new ScrollMagic.Scene({triggerElement: ".page_three_box_two"})
					.setClassToggle(".page_three_box_two", "active") // add class toggle
					//.addIndicators() // add indicators (requires plugin)
					.addTo(controller);
					
	new ScrollMagic.Scene({triggerElement: ".page_three_box_two"})
					.setClassToggle(".e-tour.cloned", "active") // add class toggle
					//.addIndicators() // add indicators (requires plugin)
					.addTo(controller);
		
		<?php endif;?>

		
		
	});
	
	
</script>




<?php endif;?>




<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71637241-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body <?php body_class(); ?>>
	
	

	
	
	
	<div class="wrapper">
		
<?php if (is_handheld()):?>	
	
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
				
			<?php if(is_page('14')):?>
				<a href="#get_started"><img src="<?php bloginfo('template_directory');?>/images/etour.png"/></a>
				<?php else:?>
				<a href="<?php bloginfo('url');?>/next-steps#get_started"><img src="<?php bloginfo('template_directory');?>/images/etour.png"/></a>
			<?php endif;?>
		</div>
	
</div><!-- mobile_femi_bar -->
		
		
		</div><!-- banner -->
		
			<?php endif;?><!-- end of mobile -->
			
			
			
			
			
			
	<?php if (!is_handheld()):?>	
	
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
				
				<?php if(is_page('14')):?>
					
					<a href="#get_started"><img src="<?php bloginfo('template_directory');?>/images/etour.png"/></a>
					<?php else:?>
					<a href="<?php bloginfo('url');?>/next-steps#get_started"><img src="<?php bloginfo('template_directory');?>/images/etour.png"/></a>
				<?php endif;?>
		</div>
	
		</div><!-- mobile_femi_bar -->
		
		
		</div><!-- banner -->
		
		<div class="desktop_menu">
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</div><!-- desktop menu -->
		
		
		
	<?php endif;?><!-- end of desktop -->
			
			
			
			
			



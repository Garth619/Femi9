<?php
/**
 * footer
 *

 */
?>


</div><!-- wrapper -->

<div class="fixed_footer">
	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
</div><!-- mobile footer -->

	<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/modernizr.js"></script>


<script type="text/javascript">
var mod = function(){
if (Modernizr.mq('(min-width: 700px)')) {
  
jQuery("body").load("<?php bloginfo('template_directory');?>/test-desktop.html");
        
  } else {
  // Clear the settings etc
  jQuery("body").load("<?php bloginfo('template_directory');?>/test-mobile.html");
  }
}

// Shortcut for $(document).ready()
jQuery(function() {
    // Call on every window resize
    jQuery(window).resize(mod);
    // Call once on initial load
    mod();
});
</script>



</body>
</html>

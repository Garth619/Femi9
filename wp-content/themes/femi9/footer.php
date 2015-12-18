<?php
/**
 * footer
 *

 */
?>


</div><!-- wrapper -->


<?php if (is_mobile()):?>
   
<div class="fixed_footer">
	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
</div><!-- mobile footer -->

<?php endif; ?>





	<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>


</body>
</html>

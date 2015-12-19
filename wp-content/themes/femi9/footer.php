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


<?php if (!is_mobile()):?>

	
	
	<div class="buttons">
		
		
		
			
		
		
		<a href="<?php bloginfo('url');?>/next-steps#get_started" class="e_tour_button">Take Our E-Tour</a>
		
				
		
		
		
		<?php $post_object = get_field('next');

			if( $post_object ): 

	// override $post
	$post = $post_object;
	setup_postdata( $post ); ?>
    <a class="next" href="<?php the_permalink(); ?>"><?php the_title(); ?><div class="arrow-right"></div></a></h3>
    	
    
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>


<?php endif; ?>
		
		
		
		
		
	</div><!-- buttons -->

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

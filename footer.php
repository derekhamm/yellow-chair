<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yellow_Chair
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p>Derek Hamm</p>
						<?php
			$yellow_chair_description = get_bloginfo( 'description', 'display' );
			if ( $yellow_chair_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $yellow_chair_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>	
			<p class="cv"><a href="/cv-dh.pdf" target="_blank">CV</a></p>
		</div><!-- .site-info -->
		<div class="site-contact">
			<p>Email: <a href="mailto:hamm.derek@gmail.com">hamm.derek@gmail.com</a></p>
		  <p>Instagram: <a href="https://www.instagram.com/derekhamm/">@derekhamm</a></p>
		  <p>Twitter: <a href="https://twitter.com/derekhamm">@derekhamm</a></p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

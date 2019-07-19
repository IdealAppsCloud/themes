<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * If the full site editing plugin is active then remove the widgets section,
 * privacy policy, and navigation area in place of the footer template part
 * that can be edited directly in the block editor.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	
	<?php 
		if ( class_exists( 'Full_Site_Editing' ) ) {
			fse_get_footer();
		} else {
			get_template_part( 'template-parts/footer/footer', 'widgets' ); 
		}
	?>
	
	<div class="site-info">
		<?php $blog_info = get_bloginfo( 'name' ); ?>
		
		<?php if ( ! empty( $blog_info ) ) : ?>
			<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>,
		<?php endif; ?>
		
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentynineteen' ) ); ?>" class="imprint">
			<?php
			/* translators: %s: WordPress. */
			printf( __( 'Proudly powered by %s.', 'twentynineteen' ), 'WordPress' );
			?>
		</a>

		<?php if ( !class_exists( 'Full_Site_Editing' ) ) : ?>

			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>

			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>

		<?php endif; ?>
	</div><!-- .site-info -->

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
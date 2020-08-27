<?php
/**
 * Displays the footer widget area
 *
 * @package Seedlet
 * @since 1.0.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<div class="widget-area">
		<?php
		if ( is_active_sidebar( 'sidebar-1' ) ) {
			?>
					<div class="widget-column footer-widget-1">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div>
				<?php
		}
		?>
	</div><!-- .widget-area -->

<?php endif; ?>

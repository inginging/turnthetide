<?php
/**
 * Sidebar - hero canvas setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php if ( is_active_sidebar( 'herocanvas' ) ) : ?>

	<!-- ******************* The Hero Canvas Widget Area ******************* -->
	<div class="c-hero">
		<?php dynamic_sidebar( 'herocanvas' ); ?>
	</div>

<?php endif; ?>
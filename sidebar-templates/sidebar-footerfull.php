<?php
/**
 * Sidebar setup for footer full.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->


	<div class="c-footer-top">
		<div class="container c-footer-top__container">
			<div class="row">
				<?php dynamic_sidebar( 'footerfull' ); ?>
			</div>
		</div>
	</div>

<?php endif; ?>

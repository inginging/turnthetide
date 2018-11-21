<?php
/**
 * Static hero sidebar setup.
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<?php if ( is_active_sidebar( 'statichero' ) ) : ?>

	<!-- ******************* The Hero Widget Area ******************* -->

	<div id="wrapper-static-hero">

				<div class="row">

					<?php dynamic_sidebar( 'statichero' ); ?>

				</div>

	</div><!-- #wrapper-static-hero -->

<?php endif; ?>

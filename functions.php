<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/widgets/button-widget.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom pagination for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom hooks.
 */
require get_template_directory() . '/inc/hooks.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

/**
 * Load Custom post types.
 */
require get_template_directory() . '/inc/custom-post-types.php'; 

/**
 * Load Mollie Donation additions.
 */
require get_template_directory() . '/inc/functions/function-mollie-donations-additions.php'; 

/**
 * Load Helpers.
 */
require get_template_directory() . '/inc/functions/function-sums.php'; 

/**
 * Load Advanced Custom Fields Additions
 */
require get_template_directory() . '/inc/functions/function-acf-additions.php';

function register_childtheme_menus() {
	register_nav_menu('meta', __( 'Meta Menu', 'child-theme-textdomain' ));
} 
add_action( 'init', 'register_childtheme_menus' );

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_action('upload_mimes', 'cc_mime_types'); 

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 35;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// function give_edit_theme_options( $caps ) {
	
// 	/* check if the user has the edit_pages capability */
// 	if( ! empty( $caps[ 'edit_pages' ] ) ) {
		
// 		/* give the user the edit theme options capability */
// 		$caps[ 'edit_theme_options' ] = true;
		
// 	}
	
// 	/* return the modified capabilities */
// 	return $caps;
	
// }

// add_filter( 'user_has_cap', 'give_edit_theme_options' );

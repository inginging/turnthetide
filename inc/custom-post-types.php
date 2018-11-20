<?php 
/**
 * Turn the Tide Custom Post Types
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function register_projects_init() {
    // Register Products
    $project_labels = array(
        'name'               => 'Projects',
        'singular_name'      => 'Project',
        'menu_name'          => 'Projects'
    );
    $project_args = array(
        'labels'             => $project_labels,
        'public'             => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' )
    );
    register_post_type('projects', $project_args);

}

// Register Custom Post Types
add_action('init', 'register_projects_init');

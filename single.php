<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container   = get_theme_mod( 'understrap_container_type' );

$projects_args = array(
    'post_type' => 'projects',
    );

$projects = new WP_Query( $projects_args );

$goals_args = array(
	'post_type' => 'goals',
	);

$goals = new WP_Query( $goals_args );	
?>

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php 
					if(is_singular('projects')) {
							get_template_part( 'post-templates/projects', 'single' ); 
					} 
					else if(is_singular('goals')) {
							get_template_part ( 'post-templates/goals', 'single' );
					}
					else {
							get_template_part( 'loop-templates/content', 'single' );
					} ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		<!-- Do the right sidebar check -->
		<?php if(!is_singular(['projects', 'goals'])) {

			get_template_part( 'global-templates/right-sidebar-check' );
			
		} ?>

<?php get_footer(); ?>

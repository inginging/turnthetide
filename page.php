<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

$args = array(
    'post_type' => 'projects',
    );

$projects = new WP_Query( $args );


?>

<?php if ( is_front_page()  ) : ?> <!-- inge: Removed && is_home() here -->
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<!-- Check if it is the home page -->
					<?php if ( is_front_page()  ) : ?>
						
						<h1><?php the_field('home_title', $post->ID); ?></h1>

						<!-- Loop through custom post type for projects -->
						<?php 					
							if( $projects->have_posts() ) {
								while( $projects->have_posts() ) {
								$projects->the_post();
								?>
									<?php the_title() ?>

								<?php
								}
							}
						?>

					<?php endif; ?> 

					<?php if ( !is_front_page()  ) : ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php endif; // end of the loop. ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

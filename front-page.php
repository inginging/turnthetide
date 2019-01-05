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

$argsProject = array(
    'post_type' => 'projects',
    );

$projects = new WP_Query( $argsProject );

$argsGoal = array(
    'post_type' => 'goals',
    );

$goals = new WP_Query( $argsGoal );


?>

<?php get_template_part( 'global-templates/hero' ); ?>

<div id="page-wrapper">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

						<div class="container wrapper text-center">

							<h1 class="callout"><?php echo get_bloginfo('description'); ?></h1>

						</div>

						<!-- Loop through custom post type for projects -->
						<div class="container wrapper pt-3 pb-0">
							<div class="row">
								<?php 					
									if( $projects->have_posts() ) {
										while( $projects->have_posts() ) {
										$projects->the_post();
										?>
										
											<div class="col-sm-12 col-lg-6">
												<div class="c-project-block">
													<a href="<?php the_permalink() ?>" class="c-project-block__link">
														<img src="<?php the_field('project_image') ?>" class="c-project-block__img" />
														<span class="c-project-block__label px-2"><?php the_field('project_location') ?></span>
														<h2 class="mb-0 px-2"><?php the_title() ?></h2>
													</a>
													
												</div>
											</div>
										
										<?php
										}
									}
								?>
							</div>
						</div>


					<?php 					
						if( $goals->have_posts() ) {
							while( $goals->have_posts() ) {
							$goals->the_post();
							?>

							<?php get_template_part( 'loop-templates/content', 'goals' ); ?>
								
						<?php
						}
					}
				?>
				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

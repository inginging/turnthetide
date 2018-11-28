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

							<h1 class="callout"><?php the_field('home_title', $post->ID); ?></h1>

						</div>

						<!-- Loop through custom post type for projects -->
						<div class="container wrapper px-3">
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

						<!-- Loop through custom post type for goals -->
						<div class="wrapper u-bg-gradient pb-7">
							<div class="container px-3">
								<div class="row">
								<?php 					
									if( $goals->have_posts() ) {
										while( $goals->have_posts() ) {
										$goals->the_post();

										$percentage =  round(get_percentage(get_field('goal_total_amount_needed'),get_field('goal_amount_reached'))) . '%';

										?>
										<div class="col-sm">
											<div class="c-goal-block">
												<a href="<?php the_permalink() ?>">
													<div class="c-goal-block__title-container">
														<span class="c-goal-block__label"><?php the_field('goal_label') ?>:</span>
														<h2 class="mb-0"><?php the_title() ?></h2>
													</div>
													<img src="<?php the_field('goal_image') ?>" class="c-goal-block__img" />
													<div class="c-goal-block__goal-container">

														<div class="c-progress mb-3">
															<div class="c-progress-bar" role="progressbar" style="width: <?php echo $percentage ?>"></div>
														</div>
														<div class="d-md-flex">
															<div class="flex-md-grow-1">
															<?php echo $percentage; ?>
																<?php the_field('goal_reached_text') ?> 
																<?php the_field('goal_amount_still_needed_text') ?> &euro; <?php echo number_format(get_substraction(get_field('goal_total_amount_needed'), get_field('goal_amount_reached')), 0, ',', '.') ?> 
																<span class="c-goal-block__text-light">
																	<?php the_field('goal_total_amount_needed_text') ?> &euro; <?php echo number_format(get_field('goal_total_amount_needed'), 0, ',', '.') ?>
																</span>															</div>
															<div>
																<span class="c-button c-button--inversed"><?php the_field('goal_button_text') ?></span>
															</div>
														</div>
													</div>
												</a>
											</div>
										</div>	
										<?php
										}
									}
								?>
								</div>
							</div>
						</div>						

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

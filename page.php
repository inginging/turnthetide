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

<?php if ( is_front_page()  ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div id="page-wrapper">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<!-- Check if it is the home page -->
					<?php if ( is_front_page()  ) : ?>

						<div class="container wrapper">

							<h1><?php the_field('home_title', $post->ID); ?></h1>

						</div>

						<!-- Loop through custom post type for projects -->
						<div class="container wrapper">
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
														<span class="c-project-block__label"><?php the_field('project_location') ?></span>
														<h2 class="mb-0"><?php the_title() ?></h2>
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
						<div class="wrapper u-bg-gradient">
							<div class="container">
								<div class="row">
								<?php 					
									if( $goals->have_posts() ) {
										while( $goals->have_posts() ) {
										$goals->the_post();
										?>
										<div class="col-sm">
											<div class="c-goal-block">
												<a href="<?php the_permalink() ?>" class="c-project-block__link">
													<div class="c-goal-block__title-container">
														<span class="c-goal-block__label"><?php the_field('goal_label') ?></span>
														<h2 class="mb-0"><?php the_title() ?></h2>
													</div>
													<img src="<?php the_field('goal_image') ?>" class="c-goal-block__img" />
													<div class="c-goal-block__goal-container">
													<div class="c-progress">
  														<div class="c-progress-bar" role="progressbar" style="width: <?php the_field('goal_percentage') ?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
														<?php the_field('goal_percentage') ?>&#37; <?php the_field('goal_percentage_text') ?> <?php the_field('goal_amount_needed_text') ?> <?php the_field('goal_amount_needed') ?> <span class="c-goal-block__text-light"><?php the_field('goal_total_amount_needed_text') ?> </span>
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

					<?php endif; ?> 

					<?php if ( !is_front_page()  ) : ?>

						<?php include( get_template_directory() . '/includes/myfile.php'); ?>
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
</div><!-- Wrapper end -->

<?php get_footer(); ?>

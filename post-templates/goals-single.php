<?php
/*
Template Name: Goals Single Page
Template Post Type: goals
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$argsGoal = array(
    'post_type' => 'goals',
    );

$goals = new WP_Query( $argsGoal );



?>

	<?php 			
		$goal = get_field('goal_id'); 
		total_donations_reached_per_project($goal, $post->ID);

		$percentage =  round(get_percentage(get_field('goal_total_amount_needed'),get_field('goal_amount_reached'))) . '%';
			?>

		<article>
			<div class="container">
				<div class="c-image-container">
					<img src="<?php the_field('goal_image') ?>" class="c-goal__img"/>
				</div>
			</div>

			<div class="wrapper">
				<div class="container text-center">
					<span class="page-label"><?php the_field('goal_label') ?></span>
					<h1 class="mt-2 mb-0"><?php the_title() ?></h1>
				</div>
			</div>
			
			<div class="wrapper pt-0">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-xs-12">
							<div class="c-content">
								<?php the_content(); ?>
							</div>
						</div>
						<div class="col-lg-4 col-xs-12">

							<div class="c-progress mb-3">
								<div class="c-progress-bar" role="progressbar" style="width: <?php echo $percentage ?>"></div>
							</div>

							<h3 style="max-width: 300px;">
								<?php echo $percentage; ?>
								<?php the_field('goal_reached_text') ?> 
								<?php the_field('goal_amount_still_needed_text') ?> &euro;<?php echo number_format(get_substraction(get_field('goal_total_amount_needed'), get_field('goal_amount_reached')), 0, ',', '.') ?> 
								<span class="c-goal-block__text-light">
									<?php the_field('goal_total_amount_needed_text') ?> &euro;<?php echo number_format(get_field('goal_total_amount_needed'), 0, ',', '.') ?>
								</span>
							</h3>	
						</div>
					</div>
				</div>
			</div>
		</article>
		<div class="u-bg-gradient wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-xs-12">
						<?php the_field('goal_form_text') ?>
						<div class="pt-3">
							<input id="goalId" type="hidden" value="<?php the_field('goal_id') ?>"/> 
							<?php echo do_shortcode("[doneren_met_mollie]"); ?>
						</div>
					</div>
					<div class="col-lg-4 col-xs-12">
						<div class="c-featured-image">
							
							<?php the_post_thumbnail() ?>
							
						</div>
					</div>
				</div>
			</div>	
		</div>




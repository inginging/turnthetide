

<?php
/**
 * Partial template for goals front-page, goals and goals-single.php
 *
 * <!-- <?php get_template_part( 'loop-templates/content', 'goals' ); ?> -->
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php 			
    total_donations_reached_per_project($goal, $post->ID);
    $percentage =  round(get_percentage(get_field('goal_total_amount_needed'),get_field('goal_amount_reached'))) . '%';
?>

<div class="wrapper u-bg-gradient pb-4">
    <div class="container px-3">
        <div class="row">
                <div class="col-sm-12">
                    <div class="c-goal-block">
                        <a href="<?php the_permalink() ?>">
                            <div class="c-goal-block__title-container">
                                <span class="c-goal-block__label"><?php the_field('goal_label') ?>:</span>
                                <h2 class="mb-0"><?php the_title() ?></h2>
                            </div>
                            <div class="c-image-container c-image-container--large">
                                <img src="<?php the_field('goal_image') ?>" class="c-goal-block__img" />
                            </div>
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
                                        </span>															
                                    </div>
                                    <div>
                                        <span class="c-button c-button--inversed"><?php the_field('goal_button_text') ?></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>								
            </div>
        </div>
    </div>
<?php
/**
 * The template for displaying goals pages.
 * Template Name: Goals
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$argsGoals = array(
    'post_type' => 'goals',
    );

$goals = new WP_Query( $argsGoals );

?>
<?php get_header(); ?>

<div id="container">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php if ( has_post_thumbnail() ) { ?>
				<div class="container">
					<div class="c-image-container">
						<img src="<?php the_post_thumbnail_url(); ?>" style="width: 100%"/>
					</div>
				</div>
			<?php 
			} 
			?>

			<div class="wrapper">
				<div class="container text-center <?php if (!has_post_thumbnail() ) { echo 'mt-7'; } ?>">
					<span class="page-label"><?php the_title(); ?></span>
					<h1><?php the_field('goals_description'); ?></h1>
				</div>
			</div>

			<?php if ( !empty( get_the_content() ) ){ ?>
			<div class="wrapper pt-0"> 
				<div class="container">
					<div class="row">
						<div class="col-lg-8 offset-lg-2 col-xs-12">
							<div class="c-content">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php 
			} 
			?>

		<?php endwhile; // end of the loop. ?>

											<?php 					
						if( $goals->have_posts() ) {
							while( $goals->have_posts() ) {
							$goals->the_post();
							?>

						<!-- Loop through custom post type for goals -->
							<?php get_template_part( 'loop-templates/content', 'goals' ); ?>			
						<?php
						}
					}
				?>

	</div><!-- #content -->
</div><!-- #container -->
<?php get_footer(); ?>


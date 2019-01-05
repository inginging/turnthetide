<?php
/**
 * The template for displaying project pages.
 * Template Name: Projects
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$argsProject = array(
    'post_type' => 'projects',
    );

$projects = new WP_Query( $argsProject );

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
					<h1><?php the_field('project_description'); ?></h1>
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


	</div><!-- #content -->
</div><!-- #container -->
<?php get_footer(); ?>


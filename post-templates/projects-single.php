<?php
/*
Template Name: Projects Single Page
Template Post Type: projects
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$argsProjects = array(
    'post_type' => 'projects',
    );

$projects = new WP_Query( $argsProjects );

?>
		<article>
			<div class="container">
				<img src="<?php the_field('project_image') ?>" class="c-project__img"/>
			</div>

			<div class="wrapper">
				<div class="container text-center">
					<span class="page-label"><?php the_field('project_location') ?></span>
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
							<?php dynamic_sidebar( 'projectssidebar' ); ?>
						</div>
					</div>
				</div>
			</div>
		</article>




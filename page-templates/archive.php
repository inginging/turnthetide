<?php
/**
 * The template for displaying archive pages.
 * Template Name: Archive
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php get_header(); ?>

<div id="container">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php if ( has_post_thumbnail() ) { ?>
				<div class="container">
					<img src="<?php the_post_thumbnail_url(); ?>" style="width: 100%"/>
				</div>
			<?php 
			} 
			?>

			<div class="wrapper">
				<div class="container text-center <?php if (!has_post_thumbnail() ) { echo 'mt-7'; } ?>">
					<span class="page-label"><?php  the_title(); ?></span>
					<h1><?php the_field('archive_description'); ?></h1>
				</div>
			</div>

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

		<?php endwhile; // end of the loop. ?>

		<div class="wrapper pt-0"> 
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-xs-12">


						<?php 
						// the query
						$wpb_all_query = new WP_Query( array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=> -1)); ?>
						
						<?php if ( $wpb_all_query->have_posts() ) : ?>
						
							<!-- the loop -->
							<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<?php the_excerpt(); ?>
							<?php endwhile; ?>
							<!-- end of the loop -->
						

						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>		


	</div><!-- #content -->
</div><!-- #container -->
<?php get_footer(); ?>


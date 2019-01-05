<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php if ( has_post_video() ) { ?>
		<div class="container">
				<?php echo do_shortcode('[video src="https://youtu.be/91yjbWmWj0g" ]'); ?>
		</div>
	<?php } ?>

	<?php if ( has_post_thumbnail() ) { ?>
		<div class="container">
			<img src="<?php the_post_thumbnail_url(); ?>" style="width: 100%"/>
		</div>
	<?php } ?>

	<div class="wrapper">
		<div class="container text-center <?php if (!has_post_thumbnail() ) { echo 'mt-7'; } ?>">
			<span class="page-label"><?php  the_title(); ?></span>
			<h1><?php the_field('page_label') ?></h1>
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

</article><!-- #post-## -->

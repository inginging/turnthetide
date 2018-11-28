<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php if ( has_post_thumbnail() ) { ?>
		<div class="container">
			<img src="<?php the_post_thumbnail_url(); ?>" style="width: 100%"/>
		</div>
	<?php } ?>

	<div class="wrapper">
		<div class="container text-center <?php if (!has_post_thumbnail() ) { echo 'mt-7'; } ?>">
		<span class="page-label"><?php the_field('page_label') ?></span>
			<h1><?php the_title(); ?></h1>
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
	<div class="entry-content">

</article><!-- #post-## -->

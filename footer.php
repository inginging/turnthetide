<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="c-footer-bottom" id="wrapper-footer">

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<footer >

						<span>© Stichting Turn the Tide &nbsp; &#9825; &nbsp; website: Code Oranje Development &nbsp; &#9825; &nbsp; design: &nbsp; Co Peters &nbsp; &#9825; &nbsp; fotografie: Scheurwater Fotografie</span>
				</footer>

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</footer><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>


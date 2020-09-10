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

?>

<div id="page-wrapper">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

			<article class="post-355 page type-page status-publish has-post-thumbnail hentry" id="post-355">
	
			<div class="container">
				<div class="c-image-container">
					<img src="http://new.turnthetide.nl/wp-content/uploads/2019/05/mislukt.jpg" style="width: 100%">
				</div>
			</div>

			<div class="wrapper">
				<div class="container text-center ">
					<span class="page-label">Pagina niet gevonden</span>
					<h1>Pagina niet gevonden</h1>
				</div>
			</div> 

			<div class="wrapper pt-0"> 
				<div class="container">
					<div class="row">
						<div class="col-lg-8 offset-lg-2 col-xs-12">
							<div class="c-content">
								<h2>De pagina die u zoekt is niet gevonden.</h2>
								<p>Ga naar <a href="/">home</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>

	</article>

			</main><!-- #main -->

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>
</div><!-- Wrapper end -->

<?php get_footer(); ?>
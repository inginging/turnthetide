<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="c-navbar navbar navbar-expand-md">

			<div class="container">

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) : ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php else: ?>

						<div class="c-logo">
							<?php the_custom_logo() ?>
						</div>

					<?php endif; ?><!-- end custom logo -->

				<button class="c-navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="c-navbar-toggler__icon navbar-toggler-icon">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="40px" viewBox="0 0 40 40" version="1.1">
						<!-- Generator: sketchtool 52.4 (67378) - http://www.bohemiancoding.com/sketch -->
						<title>EBD03131-A5BF-4326-9EBD-BC97DA5DBEB8</title>
						<desc>Created with sketchtool.</desc>
						<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g id="1.-Home-mobile" transform="translate(-264.000000, -16.000000)">
								<g id="Group-11" transform="translate(264.000000, 16.000000)">
									<g id="Group-12">
										<rect id="Rectangle" stroke="#1C407F" fill="#FFFFFF" x="0.5" y="0.5" width="39" height="39" rx="4"/>
										<g id="Group-10" transform="translate(8.000000, 8.000000)" fill="#1C407F">
											<g id="Group-9">
												<rect id="Rectangle" x="0" y="0" width="24" height="2"/>
												<rect id="Rectangle" x="0" y="6" width="24" height="2"/>
												<rect id="Rectangle" x="0" y="12" width="24" height="2"/>
											</g>
										</g>
										<text id="MENU" font-family="Roboto-Bold, Roboto" font-size="7" font-weight="bold" line-spacing="8" letter-spacing="1" fill="#1C407F">
											<tspan x="8.69042969" y="34">MEN</tspan>
											<tspan x="26.7021484" y="34">U</tspan>
										</text>
									</g>
								</g>
							</g>
						</g>
					</svg>

					</span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'c-navigation-main collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'c-navigation-main__list navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</header><!-- #wrapper-navbar end -->

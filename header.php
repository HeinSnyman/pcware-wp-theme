<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PCware
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pcware' ); ?></a>

	<header id="masthead" class="site-header">

		<nav class="navbar navbar-expand-lg">
			<a href="#" class="navbar-brand"> <?php the_custom_logo(); ?> </a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler0icon">
					<i class="fa fa-navicon"></i>
				</span>
			</button>

					<?php
					
						wp_nav_menu(
							array(
								'theme_location'	=>	'menu-1',
								'menu_class'		=> 	'navbar-nav ml-auto',
								'container_class'	=>	'collapse navbar-collapse',
								'container_id'		=> 	'navbarSupportedContent'
							)
						);
					?>
		</nav>

		<?php if(class_exists( 'WooCommerce' ) && is_woocommerce()): ?>

			<?php woocommerce_breadcrumb();?>

		<?php endif; ?>

	</header>



	<div id="content" class="site-content">

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PCware
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer footer">
		<div class="container-fluid">
			<div class="row d-flex align-items-center">

				<div class="col-sm-4 footer__shop-nav">

				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2'
						)
						);
				?>

				</div><!--COL-MD-3-->
				<div class="col-sm-4 footer__brand">
					<?php the_custom_logo(); ?>
				</div><!--BRAND-->
				<div class="col-sm-4">
					<?php
						wp_nav_menu(
							array(
								'theme_location'	=>  'menu-1'
							)
						);
					?>
				</div><!--NAV-->
			</div>
			<div class="row">
				<div class="col-md-12 designer-cred">
					<p>Designed By Hein Snyman</p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>

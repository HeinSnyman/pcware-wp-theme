<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */
defined( 'ABSPATH' ) || exit;
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );
if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'container' ); ?>>
<div class="row">
	<div class="col-md-6">

	
	<div class="row"><?php do_action( 'woocommerce_before_single_product_summary' ); ?> </div>

	<?php	
	
	do_action( 'woocommerce_before_add_to_cart_form' );
	do_action( 'woocommerce_before_variations_form' );
	do_action( 'woocommerce_before_add_to_cart_button' );
	do_action( 'woocommerce_before_single_variation' );
	do_action( 'woocommerce_single_variation' );
	do_action( 'woocommerce_after_single_variation' );
	do_action( 'woocommerce_after_add_to_cart_button' );
	do_action( 'woocommerce_after_variations_form' );
	do_action( 'woocommerce_after_add_to_cart_form' );
	do_action( 'woocommerce_after_single_variation' );
	
	?>
	</div>
	
	<div class="col-md-6">
	<?php 

	do_action( 'woocommerce_single_product_summary' );
	do_action( 'woocommerce_after_single_product_summary' );
	do_action( 'woocommerce_after_single_product' );


	?>
	</div>

</div>

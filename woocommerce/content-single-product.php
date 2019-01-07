<?php 

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


<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'row' ); ?>>
	
	<div class="col-md-6">
		<?php 
			do_action( 'woocommerce_before_single_product_summary' ); 
		?>
	</div><!--Col-md-6-->


	<div class="col-md-6">
		<?php

			do_action( 'woocommerce_single_product_summary' );
			do_action( 'woocommerce_after_single_product_summary' );

		?>
	</div><!--Col-md-6-->

</div>

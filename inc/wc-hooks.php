<?php
	
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 1);
	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
?>

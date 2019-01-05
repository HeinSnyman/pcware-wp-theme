<?php
	
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 1);
	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
    remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation', 10 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);

?>

<?php

    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 1 );


    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );



    //CHECKOUT FILTER
    add_filter( 'woocommerce_checkout_fields', 'checkout_field_classes' );

    function checkout_field_classes( $fields ){
        $fields['order']['order_comments']['type'] = 'textarea';
        $fields['billing']['billing_address_2']['label'] = 'HELLLLO';

        $fields['order']['order_comments'] = array(
            'label'             =>      __('Order notes (optional)','woocommerce'),
            'class'             =>      array('order-notes__field'),
            'placeholder'       =>      _x('Special Order Notes','woocommerce')
            
        );
        return $fields;
    }


?>

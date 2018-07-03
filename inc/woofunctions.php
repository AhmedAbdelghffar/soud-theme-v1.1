<?php
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count',20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering',30);

function unyson_fields(){
    $option_value = fw_get_db_post_option(get_the_ID(), 'woo');
    echo $option_value;
}
add_action( 'woocommerce_single_product_summary', 'unyson_fields', 7 );

<?php
require get_template_directory() . '/inc/post_types/slider.php';
require get_template_directory() . '/inc/post_types/products.php';
require get_template_directory() . '/inc/post_types/services.php';




add_action( 'init', function(){
new be4_slider();
new be4_services();
});


add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'post', 'services'); // don't forget nav_menu_item to allow menus to work!
    $query->set('post_type',$post_type);
    return $query;
    }
}

// Flush rewrite rules to add "review" as a permalink slug
/*
function my_rewrite_flush() {
    my_custom_posttypes();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );
*/

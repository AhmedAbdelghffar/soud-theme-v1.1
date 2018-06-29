<?php
class be4_products{

public function __construct(){
  $this->register_post_type();
  $this->register_taxonomy();

  register_activation_hook( __FILE__, function(){
    $this->register_post_type();
    $this->register_taxonomy();
      flush_rewrite_rules();
  } );
}

public function register_post_type(){


      $labels = array(
          'name'               => 'products',
          'singular_name'      => 'products',
          'menu_name'          => 'products',
          'name_admin_bar'     => 'products',
          'add_new'            => 'Add New',
          'add_new_item'       => 'Add New products',
          'new_item'           => 'New products',
          'edit_item'          => 'Edit products',
          'view_item'          => 'View products',
          'all_items'          => 'All products',
          'search_items'       => 'Search products',
          'parent_item_colon'  => 'Parent products:',
          'not_found'          => 'No products found.',
          'not_found_in_trash' => 'No products found in Trash.',
      );

      $args = array(
          'labels'             => $labels,
          'public'             => true,
          'publicly_queryable' => true,
          'show_ui'            => true,
          'show_in_menu'       => true,
          'menu_icon'          => 'dashicons-cart',
          'query_var'          => true,
          'rewrite'            => array( 'slug' => 'products' ),
          'capability_type'    => 'post',
          'has_archive'        => true,
          'hierarchical'       => false,
          'menu_position'      => 5,
          'exclude_from_search'=> true,
          'supports'           => array( 'title', 'editor', 'thumbnail','excerpt' )
      );
      register_post_type( 'products', $args );


}

public function register_taxonomy(){
  $labels = array(
         'name'              => 'Type of products',
         'singular_name'     => 'Type of products',
         'search_items'      => 'Search Types of products',
         'all_items'         => 'All Types of products',
         'parent_item'       => 'Parent Type of products',
         'parent_item_colon' => 'Parent Type of products:',
         'edit_item'         => 'Edit Type of Service',
         'update_item'       => 'Update Type of products',
         'add_new_item'      => 'Add New Type of products',
         'new_item_name'     => 'New Type of products Name',
         'menu_name'         => 'Type of products',
     );

     $args = array(
         'hierarchical'      => true,
         'labels'            => $labels,
         'show_ui'           => true,
         'show_admin_column' => true,
         'query_var'         => true
     );

     register_taxonomy( 'products-type', array( 'products' ), $args );

}



}

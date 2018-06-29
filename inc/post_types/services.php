<?php
class be4_services{

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
          'name'               => 'services',
          'singular_name'      => 'services',
          'menu_name'          => 'services',
          'name_admin_bar'     => 'services',
          'add_new'            => 'Add New',
          'add_new_item'       => 'Add New services',
          'new_item'           => 'New services',
          'edit_item'          => 'Edit services',
          'view_item'          => 'View services',
          'all_items'          => 'All services',
          'search_items'       => 'Search services',
          'parent_item_colon'  => 'Parent services:',
          'not_found'          => 'No services found.',
          'not_found_in_trash' => 'No services found in Trash.',
      );

      $args = array(
          'labels'             => $labels,
          'public'             => true,
          'publicly_queryable' => true,
          'show_ui'            => true,
          'show_in_menu'       => true,
          'menu_icon'          => 'dashicons-hammer',
          'query_var'          => true,
          'rewrite'            => array( 'slug' => 'services' ),
          'capability_type'    => 'post',
          'has_archive'        => true,
          'hierarchical'       => false,
          'menu_position'      => 5,
          'exclude_from_search'=> true,
          'supports'           => array( 'title', 'editor', 'thumbnail','excerpt' )
      );
      register_post_type( 'services', $args );


}

public function register_taxonomy(){
  $labels = array(
         'name'              => 'Type of Services',
         'singular_name'     => 'Type of Service',
         'search_items'      => 'Search Types of Services',
         'all_items'         => 'All Types of Services',
         'parent_item'       => 'Parent Type of Service',
         'parent_item_colon' => 'Parent Type of Service:',
         'edit_item'         => 'Edit Type of Service',
         'update_item'       => 'Update Type of Service',
         'add_new_item'      => 'Add New Type of Service',
         'new_item_name'     => 'New Type of Service Name',
         'menu_name'         => 'Type of Service',
     );

     $args = array(
         'hierarchical'      => true,
         'labels'            => $labels,
         'show_ui'           => true,
         'show_admin_column' => true,
         'query_var'         => true
     );

     register_taxonomy( 'services-type', array( 'services' ), $args );

}



}

<?php
class be4_slider{

public function __construct(){
  $this->register_post_type();
}

public function register_post_type(){


      $labels = array(
          'name'               => 'slider',
          'singular_name'      => 'slider',
          'menu_name'          => 'slider',
          'name_admin_bar'     => 'slider',
          'add_new'            => 'Add New',
          'add_new_item'       => 'Add New slider',
          'new_item'           => 'New slider',
          'edit_item'          => 'Edit slider',
          'view_item'          => 'View slider',
          'all_items'          => 'All slider',
          'search_items'       => 'Search slider',
          'parent_item_colon'  => 'Parent slider:',
          'not_found'          => 'No slider found.',
          'not_found_in_trash' => 'No slider found in Trash.',
      );

      $args = array(
          'labels'             => $labels,
          'public'             => true,
          'publicly_queryable' => true,
          'show_ui'            => true,
          'show_in_menu'       => true,
          'menu_icon'          => 'dashicons-images-alt',
          'query_var'          => true,
          'rewrite'            => array( 'slug' => 'slider' ),
          'capability_type'    => 'post',
          'has_archive'        => true,
          'hierarchical'       => false,
          'menu_position'      => 5,
          'exclude_from_search'=> true,
          'supports'           => array( 'title', 'editor', 'thumbnail' )
      );
      register_post_type( 'slider', $args );


}

}

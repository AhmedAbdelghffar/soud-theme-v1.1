<?php

// include theme customization files
//require get_template_directory() . '/inc/customize.php';
require get_template_directory() . '/inc/posttypes.php';
require get_template_directory() . '/inc/woofunctions.php';
//require get_template_directory() . '/admin-folder/admin/admin-init.php';







//include css and javascript files
function Be4_links() {
     wp_enqueue_style( 'global', get_template_directory_uri().'/style.css' );
     //wp_enqueue_style( 'rtl support', get_template_directory_uri().'/rtl.css' );
     wp_enqueue_script( 'global', get_template_directory_uri() . '/js/globalJS.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'Be4_links' );


// include wow js files
add_action( 'wp_enqueue_scripts', 'sk_enqueue_scripts' );
function sk_enqueue_scripts() {
	wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/css/animate.css' );
	wp_enqueue_script( 'wow', get_stylesheet_directory_uri() . '/js/wow.min.js', array(), '', true );
}
//* Enqueue script to activate WOW.js
add_action('wp_enqueue_scripts', 'sk_wow_init_in_footer');
function sk_wow_init_in_footer() {
	add_action( 'print_footer_scripts', 'wow_init' );
}




//navigations
function Be4_theme_setup(){
add_theme_support( "menus" );
register_nav_menu( 'primary', 'primary navigation' );
register_nav_menu( 'footer', 'footer navigation' );
add_theme_support( "post-thumbnails" );
add_theme_support( "title-tag" );
}
add_action( 'init', 'Be4_theme_setup' );



//sidebar
function be4widgerinit(){
    register_sidebar(array(
        'name'=>'sidebar',
        'id'=>'sidebar1',
        'before_widget'=>'<div class="item-widget">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4 class="widget-title">',
        'after_title'=>'</h4>'
        ));
    }
add_action( 'widgets_init', 'be4widgerinit' );




//corect permalinks
function remove_more_jump_link($link) {
	$offset = strpos($link, '#more-');
	if ($offset) { $end = strpos($link, '"',$offset); }
	if ($end) { $link = substr_replace($link, '', $offset, $end-$offset); }
	return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');


//disable jquery include for contact-form-7
add_action( 'wp_print_scripts', 'my_deregister_javascript', 100 );
function my_deregister_javascript() {
    wp_deregister_script( 'contact-form-7' );
}

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

<?php
// function my_theme_enqueue_styles() {
//
//     $parent_style = 'parent-style';
//
//     wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
//     wp_enqueue_style( 'styles',
//     get_stylesheet_directory_uri() . '/style.css',
//     array( $parent_style, 'enough_base' ),
//     wp_get_theme()->get('Version')
//     );
// }
// add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 99 );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

 ?>

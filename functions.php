<?php
//require get_stylesheet_directory() . '/customizer/customizer-framework.php';

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = '_s-style'; // This is the name of the stylesheet for DuckDiverFramework
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.min.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/custom.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
?>

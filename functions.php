<?php
//require get_stylesheet_directory() . '/customizer/customizer-framework.php';

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    wp_enqueue_style( 'theme-bootstrap', get_stylesheet_directory_uri(). '/bootstrap/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/custom.css',
        array( 'theme-bootstrap' ),
        filemtime(get_stylesheet_directory() . '/custom.css')
    );

}

// Remove Parent Style
add_action('wp_enqueue_scripts', function(){wp_dequeue_style('_s-style');}, 20);

// Uncomment to remove CPT from Parent Theme
/*function remove_parent_theme_cpts(){
    remove_action('init', 'my_post_type_header_image');
}
add_action('after_setup_theme', 'remove_parent_theme_cpts'); */

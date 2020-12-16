<?php
    add_action( 'wp_enqueue_scripts', 'tt_child_enqueue_parent_styles' );
    function tt_child_enqueue_parent_styles() {
       wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
       
        wp_enqueue_style( 'custom',
            get_stylesheet_directory_uri() . '/css/site.css',
            'child-style',
            false
        );
    }
?>
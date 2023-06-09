<?php
function jackpettheme_add_stylesheet() {
    wp_enqueue_style( 'jackpettyle', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'jackpettheme_add_stylesheet' );

function jackpet_add_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary' ),
    ) );
}
add_action( 'after_setup_theme',
            'jackpet_add_menus' );



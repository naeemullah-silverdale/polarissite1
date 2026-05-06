<?php
function polaris_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'polaris_setup' );

function polaris_scripts() {
    wp_enqueue_style( 'polaris-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&display=swap' );
    wp_enqueue_script( 'tailwind', 'https://cdn.tailwindcss.com', array(), null, false );
    wp_enqueue_script( 'lucide', 'https://unpkg.com/lucide@latest', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'polaris_scripts' );

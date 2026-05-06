<?php
/**
 * Polaris Wellbeing functions and definitions
 */

function polaris_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'polaris' ),
    ));
}
add_action( 'after_setup_theme', 'polaris_setup' );

function polaris_scripts() {
    // Tailwind CSS via CDN
    wp_enqueue_style( 'tailwind', 'https://cdn.tailwindcss.com', array(), '3.4.1' );
    
    // Lucide Icons
    wp_enqueue_script( 'lucide', 'https://unpkg.com/lucide@latest', array(), null, true );
    wp_add_inline_script( 'lucide', 'lucide.createIcons();' );
    
    // Custom logic to handle Tailwind configuration if needed
    wp_add_inline_script( 'tailwind', "
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            navy: '#1A2E35',
                            teal: '#2D7F87',
                            gold: '#C5A059',
                            cream: '#F9F7F2',
                            slate: '#4A5568',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    " );
}
add_action( 'wp_enqueue_scripts', 'polaris_scripts' );

<?php
/**
 * Polaris Wellbeing functions and definitions
 */

function polaris_wellbeing_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'polaris-wellbeing'),
    ));
}
add_action('after_setup_theme', 'polaris_wellbeing_setup');

function polaris_wellbeing_scripts() {
    // Tailwind CDN
    wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false);
    
    // Lucide Icons CDN
    wp_enqueue_script('lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, true);
    
    // Tailwind Config
    wp_add_inline_script('tailwind-cdn', "
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            navy: '#1a2a44',
                            teal: '#2da0a0',
                            gold: '#d4af37',
                            cream: '#fdfcf8',
                            slate: '#64748b'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Outfit', 'sans-serif']
                    }
                }
            }
        }
    ");
}
add_action('wp_enqueue_scripts', 'polaris_wellbeing_scripts');

function polaris_wellbeing_footer_scripts() {
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });
    </script>
    <?php
}
add_action('wp_footer', 'polaris_wellbeing_footer_scripts');

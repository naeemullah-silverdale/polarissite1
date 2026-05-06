<?php
/**
 * Polaris Wellbeing Visits functions and definitions
 */

function polaris_theme_setup() {
    // Add support for menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'polaris-theme' ),
        'footer'  => __( 'Footer Menu', 'polaris-theme' ),
    ) );

    // Add support for featured images
    add_theme_support( 'post-thumbnails' );
    
    // Add support for title tag
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'polaris_theme_setup' );

function polaris_enqueue_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style( 'polaris-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&display=swap' );
    
    // Enqueue Tailwind CSS (Play CDN for rapid deployment)
    wp_enqueue_script( 'tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false );
    
    // Configure Tailwind (Matching our React theme)
    wp_add_inline_script( 'tailwind-cdn', "
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
    " );

    // Enqueue Lucide Icons
    wp_enqueue_script( 'lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, true );
    wp_add_inline_script( 'lucide-icons', "document.addEventListener('DOMContentLoaded', () => { lucide.createIcons(); });" );
}
add_action( 'wp_enqueue_scripts', 'polaris_enqueue_scripts' );

// Custom Page Template registration (simplified for this export)
function polaris_add_page_templates( $templates ) {
    $templates['template-about.php'] = 'About Us Template';
    $templates['template-services.php'] = 'Services Template';
    $templates['template-pricing.php'] = 'Pricing Template';
    $templates['template-safeguarding.php'] = 'Safeguarding Template';
    $templates['template-referrals.php'] = 'Referrals Template';
    $templates['template-contact.php'] = 'Contact Template';
    $templates['template-policies.php'] = 'Policies Template';
    return $templates;
}
add_filter( 'theme_page_templates', 'polaris_add_page_templates' );

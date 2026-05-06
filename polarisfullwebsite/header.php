<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-brand-cream/20'); ?>>
    <header class="fixed top-0 left-0 right-0 z-[100] bg-white/80 backdrop-blur-md border-b border-brand-slate/5">
        <nav class="mx-auto max-w-7xl px-6 lg:px-8 h-24 flex items-center justify-between">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-3">
                <div class="h-10 w-10 bg-brand-navy rounded-xl flex items-center justify-center">
                    <i data-lucide="compass" class="text-brand-gold h-6 w-6"></i>
                </div>
                <div class="flex flex-col">
                    <span class="text-xl font-display font-bold text-brand-navy leading-none tracking-tight">POLARIS</span>
                    <span class="text-[10px] font-bold text-brand-teal uppercase tracking-[0.2em] mt-1">Wellbeing Visits</span>
                </div>
            </a>
            
            <div class="hidden lg:flex items-center gap-8">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'flex gap-8 text-sm font-bold text-brand-navy uppercase tracking-widest',
                    'fallback_cb' => '__return_false',
                ) );
                ?>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="bg-brand-navy text-white px-6 py-3 rounded-full text-xs font-bold hover:bg-brand-teal transition-all tracking-widest">
                    BOOK A VISIT
                </a>
            </div>
            
            <button class="lg:hidden p-2 text-brand-navy">
                <i data-lucide="menu" class="h-6 w-6"></i>
            </button>
        </nav>
    </header>

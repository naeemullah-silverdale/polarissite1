<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <style>
        .nav-link { position: relative; }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: #2da0a0;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after { width: 100%; }
        
        [data-lucide] { display: inline-block; }
    </style>
</head>
<body <?php body_class('bg-brand-cream font-sans text-brand-navy selection:bg-brand-teal selection:text-white'); ?>>

<header class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-brand-teal/10">
    <nav class="mx-auto max-w-7xl px-6 lg:px-8 h-20 flex items-center justify-between">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-3">
            <div class="bg-brand-navy p-2 rounded-lg text-white">
                <i data-lucide="shield-check" class="h-6 w-6"></i>
            </div>
            <span class="font-display font-bold text-2xl tracking-tighter text-brand-navy uppercase italic">
                Polaris <span class="text-brand-teal">Wellbeing</span> Visits
            </span>
        </a>

        <div class="hidden lg:flex items-center gap-8 font-bold text-sm uppercase tracking-widest">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link text-brand-navy hover:text-brand-teal transition-colors">Home</a>
            <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="nav-link text-brand-navy hover:text-brand-teal transition-colors">About Us</a>
            <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="nav-link text-brand-navy hover:text-brand-teal transition-colors">Services</a>
            <a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>" class="nav-link text-brand-navy hover:text-brand-teal transition-colors">Pricing</a>
            <a href="<?php echo esc_url( home_url( '/safeguarding' ) ); ?>" class="nav-link text-brand-navy hover:text-brand-teal transition-colors">Safeguarding</a>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="bg-brand-navy text-white px-6 py-2.5 rounded-full hover:bg-brand-teal transition-all shadow-lg shadow-brand-navy/10">
                Contact Us
            </a>
        </div>
        
        <!-- Mobile menu toggle (simple implementation for WordPress) -->
        <button class="lg:hidden p-2 text-brand-navy" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
            <i data-lucide="menu" class="h-6 w-6"></i>
        </button>
    </nav>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white border-b border-brand-teal/10 px-6 py-8 space-y-4 font-bold uppercase tracking-widest text-sm">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block py-2">Home</a>
        <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="block py-2">About Us</a>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="block py-2">Services</a>
        <a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>" class="block py-2">Pricing</a>
        <a href="<?php echo esc_url( home_url( '/safeguarding' ) ); ?>" class="block py-2">Safeguarding</a>
        <a href="<?php echo esc_url( home_url( '/referrals' ) ); ?>" class="block py-2">Referrals</a>
        <a href="<?php echo esc_url( home_url( '/policies' ) ); ?>" class="block py-2 text-brand-teal">Policies</a>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="block py-4 text-center bg-brand-navy text-white rounded-full">Contact Us</a>
    </div>
</header>
<main class="pt-20">

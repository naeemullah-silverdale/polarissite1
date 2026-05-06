<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-brand-cream font-sans text-brand-navy min-h-screen'); ?>>
    <?php wp_body_open(); ?>

    <header class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-brand-teal/10">
        <nav class="mx-auto max-w-7xl px-6 lg:px-8 h-20 flex items-center justify-between">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3">
                <div class="bg-brand-navy p-2 rounded-lg text-white">
                    <i data-lucide="shield-check" class="h-6 w-6"></i>
                </div>
                <span class="font-display font-bold text-2xl tracking-tighter text-brand-navy uppercase italic">
                    Polaris <span class="text-brand-teal">Wellbeing</span> Visits
                </span>
            </a>
            
            <div class="hidden lg:flex items-center gap-8 font-bold text-sm uppercase tracking-widest">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-brand-teal transition-colors">Home</a>
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="hover:text-brand-teal transition-colors">About</a>
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="hover:text-brand-teal transition-colors">Services</a>
                <a href="<?php echo esc_url(home_url('/pricing')); ?>" class="hover:text-brand-teal transition-colors">Pricing</a>
                <a href="<?php echo esc_url(home_url('/safeguarding')); ?>" class="hover:text-brand-teal transition-colors">Safeguarding</a>
                <a href="<?php echo esc_url(home_url('/referrals')); ?>" class="hover:text-brand-teal transition-colors">Referrals</a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="bg-brand-navy text-white px-6 py-2 rounded-full hover:bg-brand-teal transition-all">Contact</a>
            </div>

            <!-- Mobile Menu Toggle (Simplified) -->
            <button class="lg:hidden p-2 text-brand-navy">
                <i data-lucide="menu" class="h-6 w-6"></i>
            </button>
        </nav>
    </header>

    <main id="content">

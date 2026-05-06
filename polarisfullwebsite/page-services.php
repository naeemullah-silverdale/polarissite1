<?php
/**
 * Template Name: Services Page
 */
get_header(); ?>

<div class="pt-32 min-h-screen bg-brand-cream/30">
    <section class="bg-white py-32 border-b border-brand-slate/10 text-center">
        <h1 class="text-5xl lg:text-7xl font-display font-bold text-brand-navy">Our <span class="text-brand-teal italic">Services</span></h1>
        <p class="mt-8 text-xl text-brand-navy/70 max-w-2xl mx-auto">Providing companionship and wellbeing support across Birmingham.</p>
    </section>

    <section class="py-24 mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            <div class="bg-white p-12 rounded-[3rem] shadow-sm">
                <h3 class="text-xl font-bold mb-4 text-brand-navy">Companionship Visits</h3>
                <p class="text-brand-navy/60 leading-relaxed">Friendly, meaningful visits that reduce loneliness and promote engagement.</p>
            </div>
            <div class="bg-white p-12 rounded-[3rem] shadow-sm">
                <h3 class="text-xl font-bold mb-4 text-brand-navy">Wellbeing Check-ins</h3>
                <p class="text-brand-navy/60 leading-relaxed">Short visits to ensure safety, hydration and nutrition reminders.</p>
            </div>
            <div class="bg-white p-12 rounded-[3rem] shadow-sm text-brand-navy">
                <h3 class="text-xl font-bold mb-4">Community Support</h3>
                <p class="text-brand-navy/60 leading-relaxed">Support with local walks, social activities and attending events.</p>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

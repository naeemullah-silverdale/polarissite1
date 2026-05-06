<?php
/**
 * Template Name: Pricing Page
 */
get_header(); ?>

<div class="pt-32 min-h-screen bg-brand-cream/30">
    <section class="bg-white py-32 border-b border-brand-slate/10 text-center">
        <h1 class="text-5xl lg:text-7xl font-display font-bold text-brand-navy">Transparent <span class="text-brand-teal italic">Rates</span></h1>
        <p class="mt-8 text-xl text-brand-navy/70 max-w-2xl mx-auto">Fees are charged according to our current structure. Monthly packages paid in advance.</p>
    </section>

    <section class="py-24 mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-brand-slate/10">
                <h4 class="font-bold text-brand-navy mb-2">Basic Package</h4>
                <p class="text-3xl font-display font-bold text-brand-navy mb-6">£95<span class="text-sm font-medium text-slate-400">/mo</span></p>
                <p class="text-xs text-brand-teal font-bold uppercase tracking-widest">1 Visit Per Week</p>
            </div>
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-brand-slate/10">
                <h4 class="font-bold text-brand-navy mb-2">Check-In Package</h4>
                <p class="text-3xl font-display font-bold text-brand-navy mb-6">£110<span class="text-sm font-medium text-slate-400">/mo</span></p>
                <p class="text-xs text-brand-teal font-bold uppercase tracking-widest">2 Visits Per Week</p>
            </div>
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-brand-slate/10">
                <h4 class="font-bold text-brand-navy mb-2">Full Support</h4>
                <p class="text-3xl font-display font-bold text-brand-navy mb-6">£240<span class="text-sm font-medium text-slate-400">/mo</span></p>
                <p class="text-xs text-brand-teal font-bold uppercase tracking-widest">Extended Support</p>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

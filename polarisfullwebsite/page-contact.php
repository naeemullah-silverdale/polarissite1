<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>

<div class="pt-32 min-h-screen bg-brand-cream/30">
    <section class="py-24 mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-24">
            <div>
                <h1 class="text-5xl font-display font-bold text-brand-navy mb-8">Contact Us</h1>
                <p class="text-xl text-brand-navy/70 mb-12">Supporting independence at home while giving families peace of mind. We're here to help.</p>
                <div class="space-y-6">
                    <div class="flex items-center gap-4 text-xl font-bold text-brand-navy">
                        <i data-lucide="phone" class="text-brand-teal"></i> 07592265774
                    </div>
                    <div class="flex items-center gap-4 text-lg font-bold text-brand-navy">
                        <i data-lucide="mail" class="text-brand-teal"></i> polariswellbeingvisitsltd@gmail.com
                    </div>
                </div>
            </div>
            <div class="bg-white p-12 rounded-[3rem] shadow-xl">
                 <form class="space-y-6">
                    <input type="text" placeholder="Name" class="w-full px-4 py-3 rounded-xl bg-brand-cream/10 border border-brand-slate/20 outline-none focus:ring-2 focus:ring-brand-teal">
                    <textarea rows="5" placeholder="Message" class="w-full px-4 py-3 rounded-xl bg-brand-cream/10 border border-brand-slate/20 outline-none focus:ring-2 focus:ring-brand-teal"></textarea>
                    <button class="w-full py-4 bg-brand-navy text-white rounded-xl font-bold">SEND REQUEST</button>
                 </form>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

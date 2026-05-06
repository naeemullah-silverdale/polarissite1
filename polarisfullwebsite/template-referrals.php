<?php
/**
 * Template Name: Referrals Page
 */
get_header(); ?>

<div class="pt-32 min-h-screen bg-brand-cream/30">
    <section class="bg-white py-32 border-b border-brand-slate/10 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/4 h-full bg-brand-gold/5 blur-[60px] rounded-full translate-x-1/2"></div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <div class="flex items-center gap-3 mb-6">
                    <div class="h-px w-12 bg-brand-teal"></div>
                    <span class="text-brand-teal font-bold uppercase tracking-[0.3em] text-xs">Collaboration</span>
                </div>
                <h1 class="text-5xl lg:text-7xl font-display font-bold tracking-tight text-brand-navy leading-none">
                    Professional <span class="text-brand-teal italic">Referrals</span>
                </h1>
                <p class="mt-8 text-xl leading-8 text-brand-navy/70 font-medium max-w-xl">
                    We welcome referrals from families, health professionals and local organisations. Our visits provide structured reassurance support.
                </p>
            </div>
        </div>
    </section>

    <section class="py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <div>
                    <h2 class="text-2xl font-bold mb-8 uppercase tracking-widest text-sm text-brand-gold">Why Refer to Polaris Wellbeing Visits LTD?</h2>
                    <div class="space-y-6">
                        <div class="flex items-center gap-4 p-4 bg-white rounded-2xl border border-brand-slate/10 shadow-sm">
                            <div class="bg-brand-navy/5 p-3 rounded-xl"><i data-lucide="users" class="h-6 w-6 text-brand-teal"></i></div>
                            <span class="font-semibold text-brand-navy">Experienced, DBS-checked practitioners</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-white rounded-2xl border border-brand-slate/10 shadow-sm">
                            <div class="bg-brand-navy/5 p-3 rounded-xl"><i data-lucide="shield-check" class="h-6 w-6 text-brand-teal"></i></div>
                            <span class="font-semibold text-brand-navy">Strong safeguarding culture</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-white rounded-2xl border border-brand-slate/10 shadow-sm">
                            <div class="bg-brand-navy/5 p-3 rounded-xl"><i data-lucide="clipboard-check" class="h-6 w-6 text-brand-teal"></i></div>
                            <span class="font-semibold text-brand-navy">Clear boundaries (non-regulated support only)</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-white rounded-2xl border border-brand-slate/10 shadow-sm">
                            <div class="bg-brand-navy/5 p-3 rounded-xl"><i data-lucide="message-square" class="h-6 w-6 text-brand-teal"></i></div>
                            <span class="font-semibold text-brand-navy">Reliable communication</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-3xl shadow-xl p-8 border border-brand-slate/10">
                    <h2 class="text-2xl font-bold mb-6 text-brand-navy uppercase tracking-widest text-xs">Referral Contact Form</h2>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-brand-navy/70 mb-2">Your Name</label>
                                <input type="text" class="w-full px-4 py-3 rounded-xl border border-brand-slate/20 outline-none focus:ring-2 focus:ring-brand-teal">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-brand-navy/70 mb-2">Organisation</label>
                                <input type="text" class="w-full px-4 py-3 rounded-xl border border-brand-slate/20 outline-none focus:ring-2 focus:ring-brand-teal">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-brand-navy/70 mb-2">Person Being Referred</label>
                            <input type="text" class="w-full px-4 py-3 rounded-xl border border-brand-slate/20 outline-none focus:ring-2 focus:ring-brand-teal">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-brand-navy/70 mb-2">Summary of Support Requested</label>
                            <textarea rows="4" class="w-full px-4 py-3 rounded-xl border border-brand-slate/20 outline-none focus:ring-2 focus:ring-brand-teal resize-none"></textarea>
                        </div>
                        <button type="submit" class="w-full py-4 bg-brand-navy text-white rounded-xl font-bold hover:bg-brand-teal transition-all tracking-[0.2em] font-display">SEND REFERRAL ENQUIRY</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

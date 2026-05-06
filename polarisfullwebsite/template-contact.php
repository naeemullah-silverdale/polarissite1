<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>

<div class="pt-32 min-h-screen bg-brand-cream/30">
    <section class="py-32 bg-white border-b border-brand-slate/10 relative overflow-hidden">
        <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-brand-teal/5 rounded-full blur-[80px]"></div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10 text-center">
            <div class="flex items-center justify-center gap-3 mb-6">
                <div class="h-px w-8 bg-brand-gold"></div>
                <span class="text-brand-gold font-bold uppercase tracking-[0.3em] text-xs">Reach Out</span>
                <div class="h-px w-8 bg-brand-gold"></div>
            </div>
            <h1 class="text-5xl lg:text-7xl font-display font-bold tracking-tight text-brand-navy leading-none">
                Contact <span class="text-brand-teal italic">Us</span>
            </h1>
            <p class="mt-8 text-xl text-brand-navy/70 max-w-2xl mx-auto leading-relaxed font-medium">
                Supporting independence at home while giving families peace of mind. We're here to help across Birmingham and surrounding areas.
            </p>
        </div>
    </section>

    <section class="py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24">
                <div class="space-y-12">
                    <div>
                        <h2 class="text-3xl font-bold text-brand-navy mb-8">Polaris Wellbeing Visits Ltd</h2>
                        <div class="space-y-8">
                            <a href="tel:07592265774" class="flex items-center gap-6 group">
                                <div class="bg-brand-navy/5 p-4 rounded-xl group-hover:bg-brand-navy group-hover:text-white transition-all">
                                    <i data-lucide="phone" class="h-6 w-6 text-brand-teal group-hover:text-white"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold uppercase tracking-widest text-brand-slate">Call us</p>
                                    <p class="text-xl font-bold text-brand-navy">07592265774</p>
                                </div>
                            </a>
                            <a href="mailto:polariswellbeingvisitsltd@gmail.com" class="flex items-center gap-6 group">
                                <div class="bg-brand-navy/5 p-4 rounded-xl group-hover:bg-brand-navy group-hover:text-white transition-all">
                                    <i data-lucide="mail" class="h-6 w-6 text-brand-teal group-hover:text-white"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold uppercase tracking-widest text-brand-slate">Email us</p>
                                    <p class="text-xl font-bold text-brand-navy">polariswellbeingvisitsltd@gmail.com</p>
                                </div>
                            </a>
                            <div class="flex items-center gap-6 group">
                                <div class="bg-brand-navy/5 p-4 rounded-xl">
                                    <i data-lucide="clock" class="h-6 w-6 text-brand-teal"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold uppercase tracking-widest text-brand-slate">Availability</p>
                                    <p class="text-xl font-bold text-brand-navy">Monday — Sunday</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 md:p-12 rounded-[2.5rem] shadow-sm border border-brand-slate/10">
                    <form class="space-y-6">
                        <h3 class="text-xl font-bold text-brand-navy mb-8 uppercase tracking-widest text-xs">Send a Message</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <input type="text" placeholder="Name" class="w-full px-4 py-3 rounded-xl border border-brand-slate/20 outline-none focus:ring-2 focus:ring-brand-teal bg-brand-cream/10">
                            <input type="tel" placeholder="Phone" class="w-full px-4 py-3 rounded-xl border border-brand-slate/20 outline-none focus:ring-2 focus:ring-brand-teal bg-brand-cream/10">
                        </div>
                        <input type="email" placeholder="Email" class="w-full px-4 py-3 rounded-xl border border-brand-slate/20 outline-none focus:ring-2 focus:ring-brand-teal bg-brand-cream/10">
                        <textarea rows="5" placeholder="Your Message" class="w-full px-4 py-3 rounded-xl border border-brand-slate/20 outline-none focus:ring-2 focus:ring-brand-teal bg-brand-cream/10 resize-none"></textarea>
                        <button type="submit" class="w-full py-4 bg-brand-navy text-white rounded-xl font-bold hover:bg-brand-teal tracking-[0.2em] font-display">REQUEST CALLBACK</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

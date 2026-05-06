<?php
/**
 * Template Name: Policies Page
 */
get_header(); ?>

<div class="pt-32 min-h-screen bg-brand-cream/30">
    <section class="bg-white py-32 border-b border-brand-slate/10 relative overflow-hidden">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
          <div class="mx-auto max-w-2xl lg:mx-0">
             <div class="flex items-center gap-3 mb-6">
                <div class="h-px w-12 bg-brand-gold"></div>
                <span class="text-brand-gold font-bold uppercase tracking-[0.3em] text-xs">Governance</span>
             </div>
             <h1 class="text-5xl lg:text-7xl font-display font-bold tracking-tight text-brand-navy leading-none">
                Our <span class="text-brand-teal italic">Policies</span>
             </h1>
          </div>
        </div>
    </section>

    <section class="py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
                <div class="lg:col-span-1 border-r border-brand-slate/10 pr-8 hidden lg:block">
                    <div class="sticky top-32 space-y-4">
                        <a href="#safeguarding-policy" class="block text-sm font-bold text-brand-teal uppercase tracking-widest">1. Safeguarding</a>
                        <a href="#complaints-policy" class="block text-sm font-bold text-brand-slate/60 uppercase tracking-widest">2. Complaints</a>
                        <a href="#gdpr" class="block text-sm font-bold text-brand-slate/60 uppercase tracking-widest">3. GDPR</a>
                        <a href="#cancellation" class="block text-sm font-bold text-brand-slate/60 uppercase tracking-widest">4. Cancellation</a>
                    </div>
                </div>
                <div class="lg:col-span-3 space-y-24">
                    <div id="safeguarding-policy" class="scroll-mt-32">
                        <h2 class="text-3xl font-bold text-brand-navy mb-8">1. Safeguarding Policy</h2>
                        <p class="text-brand-navy/80 leading-relaxed">Polaris Wellbeing Visits Ltd is committed to the safety and wellbeing of every individual we support. All practitioners undergo Enhanced DBS checks and safeguarding training.</p>
                    </div>
                    <div id="complaints-policy" class="scroll-mt-32">
                        <h2 class="text-3xl font-bold text-brand-navy mb-8">2. Complaints Policy</h2>
                        <p class="text-brand-navy/80 mb-6">If you have any concerns regarding our service, please follow the steps below:</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                           <div class="bg-brand-navy/5 p-8 rounded-2xl">
                              <h4 class="font-bold mb-4 uppercase tracking-widest text-xs">Informal</h4>
                              <p class="text-sm">Discuss any concerns directly with the Directors. We aim to resolve most issues promptly.</p>
                           </div>
                           <div class="bg-white p-8 rounded-2xl border border-brand-slate/10">
                              <h4 class="font-bold mb-4 uppercase tracking-widest text-xs">Formal</h4>
                              <p class="text-sm">Submit via email to polariswellbeingvisitsltd@gmail.com. We acknowledge within 3 working days.</p>
                           </div>
                        </div>
                    </div>
                    <div id="gdpr" class="scroll-mt-32">
                        <h2 class="text-3xl font-bold text-brand-navy mb-8">3. GDPR Statement</h2>
                        <p class="text-brand-navy/80 leading-relaxed">All personal data is stored securely and processed in accordance with UK GDPR. Information is never shared without consent, unless there is a safeguarding concern.</p>
                    </div>
                    <div id="cancellation" class="scroll-mt-32">
                        <h2 class="text-3xl font-bold text-brand-navy mb-8">4. Cancellation Policy</h2>
                        <p class="text-brand-navy/80 leading-relaxed">We kindly request at least 24 hours’ notice for cancellations. Late cancellations may be chargeable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

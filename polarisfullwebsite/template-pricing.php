<?php
/**
 * Template Name: Pricing Page
 */
get_header(); ?>

<div class="pt-32 min-h-screen bg-brand-cream/30">
    <section class="bg-white py-32 border-b border-brand-slate/10 relative overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-10">
           <i data-lucide="pound-sterling" class="absolute -top-10 -right-10 h-64 w-64 text-brand-teal transform rotate-12"></i>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <div class="flex items-center gap-3 mb-6">
              <div class="h-px w-12 bg-brand-gold"></div>
              <span class="text-brand-gold font-bold uppercase tracking-[0.3em] text-xs">Transparency</span>
            </div>
            <h1 class="text-5xl lg:text-7xl font-display font-bold tracking-tight text-brand-navy leading-none">
              Pricing & <span class="text-brand-teal italic">Support</span>
            </h1>
            <p class="mt-8 text-xl leading-8 text-brand-navy/70 font-medium max-w-xl">
              Transparent rates and structured wellbeing visit packages designed to provide consistent, reliable support.
            </p>
          </div>
        </div>
    </section>

    <section class="py-12 bg-brand-navy text-white shadow-inner">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
               <div class="flex items-center gap-3">
                 <div class="p-2 bg-white/10 rounded-lg"><i data-lucide="calendar" class="h-5 w-5 text-brand-gold"></i></div>
                 <span class="font-semibold text-sm tracking-tight">Consistent visit times</span>
               </div>
               <div class="flex items-center gap-3">
                 <div class="p-2 bg-white/10 rounded-lg"><i data-lucide="check" class="h-5 w-5 text-brand-gold"></i></div>
                 <span class="font-semibold text-sm tracking-tight">Continuity of support</span>
               </div>
               <div class="flex items-center gap-3">
                 <div class="p-2 bg-white/10 rounded-lg"><i data-lucide="clock" class="h-5 w-5 text-brand-gold"></i></div>
                 <span class="font-semibold text-sm tracking-tight">Reliable scheduling</span>
               </div>
               <div class="flex items-center gap-3">
                 <div class="p-2 bg-white/10 rounded-lg"><i data-lucide="heart" class="h-5 w-5 text-brand-gold"></i></div>
                 <span class="font-semibold text-sm tracking-tight">Relationship-based support</span>
               </div>
            </div>
        </div>
    </section>

    <section class="py-24 px-6">
        <div class="mx-auto max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
                <div class="lg:col-span-1">
                    <h3 class="text-2xl font-bold mb-6 text-brand-navy">Visit Rate Options</h3>
                    <p class="text-brand-navy/60 mb-8 leading-relaxed">Fees are charged according to our current structure. Services are provided through monthly support packages paid in advance.</p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4 p-4 bg-white rounded-2xl border border-brand-slate/10 hover:border-brand-teal transition-colors group">
                            <i data-lucide="calculator" class="h-6 w-6 text-brand-gold mt-1 group-hover:text-brand-teal shrink-0"></i>
                            <div>
                                <h4 class="font-bold text-sm text-brand-navy">Evenings & Weekends</h4>
                                <p class="text-sm text-brand-navy/50">Additional £3 per hour</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-white rounded-2xl border border-brand-slate/10 hover:border-brand-teal transition-colors group">
                            <i data-lucide="calendar" class="h-6 w-6 text-brand-gold mt-1 group-hover:text-brand-teal shrink-0"></i>
                            <div>
                                <h4 class="font-bold text-sm text-brand-navy">Bank Holidays</h4>
                                <p class="text-sm text-brand-navy/50">50% additional charge</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-white rounded-2xl border border-brand-slate/10 hover:border-brand-teal transition-colors group">
                            <i data-lucide="map-pin" class="h-6 w-6 text-brand-gold mt-1 group-hover:text-brand-teal shrink-0"></i>
                            <div>
                                <h4 class="font-bold text-sm text-brand-navy">Mileage</h4>
                                <p class="text-sm text-brand-navy/50">45p per mile outside local service radius</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-3xl shadow-sm border border-brand-slate/10 overflow-hidden">
                        <div class="p-8 border-b border-brand-slate/10 bg-slate-50/50">
                            <h4 class="font-bold uppercase tracking-widest text-xs text-brand-slate">Individual Visit Rates</h4>
                        </div>
                        <div class="divide-y divide-brand-slate/10">
                            <div class="flex justify-between items-center p-6 hover:bg-slate-50">
                                <span class="font-semibold text-brand-navy">Standard wellbeing visits (1 hour)</span>
                                <span class="text-2xl font-display font-bold text-brand-navy">£25</span>
                            </div>
                            <div class="flex justify-between items-center p-6 hover:bg-slate-50">
                                <span class="font-semibold text-brand-navy">Standard wellbeing visits (1.5 hours)</span>
                                <span class="text-2xl font-display font-bold text-brand-navy">£36</span>
                            </div>
                            <div class="flex justify-between items-center p-6 hover:bg-slate-50">
                                <span class="font-semibold text-brand-navy">Standard wellbeing visits (2 hours)</span>
                                <span class="text-2xl font-display font-bold text-brand-navy">£48</span>
                            </div>
                            <div class="flex justify-between items-center p-6 hover:bg-slate-50">
                                <span class="font-semibold text-brand-navy">Short reassurance visits (30 mins)</span>
                                <span class="text-2xl font-display font-bold text-brand-navy">£15</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-3xl font-bold tracking-tight text-brand-navy uppercase tracking-widest">Monthly Support Packages</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">
                <!-- Package 1 -->
                <div class="flex flex-col p-8 bg-slate-50 rounded-3xl border border-brand-slate/10 shadow-sm hover:bg-white transition-all">
                    <h4 class="font-bold text-lg mb-2 text-brand-navy">Companionship Support Package</h4>
                    <p class="text-brand-teal text-sm font-bold mb-4 uppercase tracking-wider">1 visit per week</p>
                    <p class="text-3xl font-display font-bold text-brand-navy mb-6">£95 / month</p>
                    <p class="text-sm text-brand-navy/70 leading-relaxed">Structured companionship to reduce isolation and support wellbeing.</p>
                </div>
                <!-- Package 2 -->
                <div class="flex flex-col p-8 bg-slate-50 rounded-3xl border border-brand-slate/10 shadow-sm hover:bg-white transition-all">
                    <h4 class="font-bold text-lg mb-2 text-brand-navy">Shopping Support Package</h4>
                    <p class="text-brand-teal text-sm font-bold mb-4 uppercase tracking-wider">1 visit per week</p>
                    <p class="text-3xl font-display font-bold text-brand-navy mb-6">£100 / month</p>
                    <p class="text-sm text-brand-navy/70 leading-relaxed">Support with weekly shopping and essential errands.</p>
                </div>
                <!-- Package 3 -->
                <div class="flex flex-col p-8 bg-slate-50 rounded-3xl border border-brand-slate/10 shadow-sm hover:bg-white transition-all">
                    <h4 class="font-bold text-lg mb-2 text-brand-navy">Wellbeing Check-In Package</h4>
                    <p class="text-brand-teal text-sm font-bold mb-4 uppercase tracking-wider">Two short visits per week</p>
                    <p class="text-3xl font-display font-bold text-brand-navy mb-6">£110 / month</p>
                    <p class="text-sm text-brand-navy/70 leading-relaxed">Regular check-ins providing reassurance and peace of mind.</p>
                </div>
                <!-- Package 4 -->
                <div class="flex flex-col p-8 bg-slate-50 rounded-3xl border border-brand-slate/10 shadow-sm hover:bg-white transition-all">
                    <h4 class="font-bold text-lg mb-2 text-brand-navy">Community Access Package</h4>
                    <p class="text-brand-teal text-sm font-bold mb-4 uppercase tracking-wider">Weekly 2-hour outing support</p>
                    <p class="text-3xl font-display font-bold text-brand-navy mb-6">£240 / month</p>
                    <p class="text-sm text-brand-navy/70 leading-relaxed">Enhanced support for community engagement and outings.</p>
                </div>
            </div>
            <div class="mt-16 bg-brand-navy rounded-3xl p-8 text-white flex flex-col md:flex-row items-center gap-8">
                <i data-lucide="info" class="h-8 w-8 text-brand-gold shrink-0"></i>
                <div class="flex-grow">
                    <h4 class="text-xl font-bold mb-2">Personalised Arrangements</h4>
                    <p class="text-slate-400">Flexible arrangements can be discussed depending on individual needs. Invoices are issued monthly.</p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

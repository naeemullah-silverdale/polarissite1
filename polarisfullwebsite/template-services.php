<?php
/**
 * Template Name: Services Page
 */
get_header(); ?>

<div class="pt-32 min-h-screen bg-brand-cream/30">
    <div class="bg-white py-32 relative overflow-hidden border-b border-brand-slate/10">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-gold/5 blur-[80px] rounded-full translate-x-1/2"></div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="h-px w-12 bg-brand-gold"></div>
                        <span class="text-brand-gold font-bold uppercase tracking-[0.3em] text-xs">Wellbeing Visits</span>
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-display font-bold tracking-tight text-brand-navy leading-none">
                        Our <span class="text-brand-teal italic">Services</span>
                    </h1>
                    <p class="mt-8 text-xl leading-8 text-brand-navy/70 font-medium max-w-xl">
                        Polaris Wellbeing Visits Ltd provides structured companionship and reassurance visits tailored to individual needs.
                    </p>
                </div>
                <div class="hidden lg:block">
                    <div class="bg-brand-navy p-10 rounded-[3rem] shadow-2xl relative">
                        <div class="absolute -top-4 -right-4 bg-brand-gold p-4 rounded-2xl">
                            <i data-lucide="heart" class="h-8 w-8 text-white"></i>
                        </div>
                        <p class="text-white text-lg font-display italic leading-relaxed">
                            "Helping individuals navigate daily life with confidence while remaining independent in their own homes."
                        </p>
                        <div class="mt-6 flex items-center gap-3">
                            <div class="h-px w-8 bg-brand-teal"></div>
                            <span class="text-brand-teal font-bold uppercase tracking-widest text-xs">The Polaris Promise</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Companionship Visits -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200 hover:shadow-md transition-shadow relative overflow-hidden group">
                    <div class="inline-flex p-3 rounded-2xl mb-6 border bg-brand-navy/5 text-brand-teal border-brand-teal/20">
                        <i data-lucide="heart" class="h-6 w-6"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-slate-900">Companionship Visits</h3>
                    <p class="text-slate-600 leading-relaxed text-sm mb-4">Friendly, meaningful visits that reduce loneliness, promote engagement, build confidence and support emotional wellbeing.</p>
                </div>
                <!-- Check-in Visits -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200 hover:shadow-md transition-shadow relative overflow-hidden group">
                    <div class="inline-flex p-3 rounded-2xl mb-6 border bg-brand-navy/5 text-brand-gold border-brand-gold/20">
                        <i data-lucide="calendar-check" class="h-6 w-6"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-slate-900">Short Wellbeing Check-in Visits</h3>
                    <p class="text-slate-600 leading-relaxed text-sm mb-4">Short visits to ensure safety, routine, hydration, nutrition reminders, emotional reassurance and peace of mind to loved ones.</p>
                </div>
                <!-- Appointment Support -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200 hover:shadow-md transition-shadow relative overflow-hidden group">
                    <div class="inline-flex p-3 rounded-2xl mb-6 border bg-brand-navy/5 text-brand-teal border-brand-teal/20">
                        <i data-lucide="clock" class="h-6 w-6"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-slate-900">Appointment Escort Support</h3>
                    <p class="text-slate-600 leading-relaxed text-sm mb-4">Safe, reliable support attending GP appointments, hospital visits, therapy sessions and community activities.</p>
                    <div class="mt-4 p-4 bg-slate-50 rounded-xl border border-slate-100 flex gap-3 text-xs text-slate-500 italic">
                        <i data-lucide="info" class="h-4 w-4 text-indigo-400 flex-shrink-0"></i>
                        <p>Note: We do not transport clients in our own vehicles. We accompany and support individuals using public transport or taxis.</p>
                    </div>
                </div>
                <!-- Community Access -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200 hover:shadow-md transition-shadow relative overflow-hidden group">
                    <div class="inline-flex p-3 rounded-2xl mb-6 border bg-brand-navy/5 text-brand-gold border-brand-gold/20">
                        <i data-lucide="map-pin" class="h-6 w-6"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-slate-900">Community Access Support</h3>
                    <p class="text-slate-600 leading-relaxed text-sm mb-4">Support accessing local walks, social activities, community events and visiting friends – helping individuals remain connected and confident.</p>
                </div>
                <!-- Shopping Support -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200 hover:shadow-md transition-shadow relative overflow-hidden group">
                    <div class="inline-flex p-3 rounded-2xl mb-6 border bg-brand-navy/5 text-brand-teal border-brand-teal/20">
                        <i data-lucide="shopping-bag" class="h-6 w-6"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-slate-900">Shopping Support</h3>
                    <p class="text-slate-600 leading-relaxed text-sm mb-4">Support with essential errands, maintaining independence at home, weekly shopping, picking up prescriptions and other everyday tasks.</p>
                </div>
                <!-- Family Updates -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200 hover:shadow-md transition-shadow relative overflow-hidden group">
                    <div class="inline-flex p-3 rounded-2xl mb-6 border bg-brand-navy/5 text-brand-gold border-brand-gold/20">
                        <i data-lucide="bell" class="h-6 w-6"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-slate-900">Family Reassurance Updates</h3>
                    <p class="text-slate-600 leading-relaxed text-sm mb-4">Regular updates to families following visits, helping keep relatives informed about the wellbeing and general welfare of their loved ones.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white border-y border-slate-200">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-8">What Makes Us Different</h2>
                    <p class="text-lg text-slate-600 mb-12">Not all wellbeing services are the same. At Polaris, your safety and wellbeing truly come first.</p>
                    <ul class="grid grid-cols-1 gap-6">
                        <li class="flex items-center gap-4 text-brand-navy font-medium"><i data-lucide="check-circle-2" class="h-5 w-5 text-brand-teal"></i> Experienced care professionals</li>
                        <li class="flex items-center gap-4 text-brand-navy font-medium"><i data-lucide="check-circle-2" class="h-5 w-5 text-brand-teal"></i> Professionals with strong safeguarding background</li>
                        <li class="flex items-center gap-4 text-brand-navy font-medium"><i data-lucide="check-circle-2" class="h-5 w-5 text-brand-teal"></i> Practitioners Enhanced DBS checks</li>
                        <li class="flex items-center gap-4 text-brand-navy font-medium"><i data-lucide="check-circle-2" class="h-5 w-5 text-brand-teal"></i> Clear professional boundaries</li>
                        <li class="flex items-center gap-4 text-brand-navy font-medium"><i data-lucide="check-circle-2" class="h-5 w-5 text-brand-teal"></i> Reliable, consistent support</li>
                    </ul>
                </div>
                <div class="bg-brand-navy p-12 rounded-[2.5rem] text-white">
                    <div class="flex items-center gap-3 mb-8 text-brand-gold">
                        <i data-lucide="shield-alert" class="h-8 w-8"></i>
                        <h3 class="text-2xl font-bold">Important Service Boundaries</h3>
                    </div>
                    <p class="text-slate-300 mb-8 font-medium">Polaris Wellbeing Visits Ltd provides companionship and wellbeing visits only. We do not provide:</p>
                    <ul class="grid grid-cols-1 gap-4 text-slate-400 text-sm">
                        <li class="flex items-center gap-3"><i data-lucide="x-circle" class="h-4 w-4 text-brand-slate"></i> Personal care</li>
                        <li class="flex items-center gap-3"><i data-lucide="x-circle" class="h-4 w-4 text-brand-slate"></i> Dressing support</li>
                        <li class="flex items-center gap-3"><i data-lucide="x-circle" class="h-4 w-4 text-brand-slate"></i> Medication administration</li>
                        <li class="flex items-center gap-3"><i data-lucide="x-circle" class="h-4 w-4 text-brand-slate"></i> Moving and handling support</li>
                        <li class="flex items-center gap-3"><i data-lucide="x-circle" class="h-4 w-4 text-brand-slate"></i> Clinical or healthcare services</li>
                        <li class="flex items-center gap-3"><i data-lucide="x-circle" class="h-4 w-4 text-brand-slate"></i> Financial Management</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

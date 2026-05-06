<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

<div class="pt-24 min-h-screen bg-brand-cream/30">
    <section class="bg-white py-24 sm:py-32 relative overflow-hidden">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="max-w-2xl lg:w-1/2">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="h-px w-12 bg-brand-teal"></div>
                        <span class="text-brand-teal font-bold uppercase tracking-[0.3em] text-xs">Our Story</span>
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-display font-bold text-brand-navy tracking-tight leading-none">
                         About <span class="text-brand-teal italic">Us</span>
                    </h1>
                    <p class="mt-8 text-xl font-medium text-brand-navy leading-relaxed max-w-xl">
                        Polaris has guided travellers for centuries, offering direction and reassurance in uncertain times.
                    </p>
                    <p class="mt-6 text-lg leading-8 text-brand-navy/70">
                        We chose the name Polaris because that reflects what we aim to be for the people we support—a steady, reliable presence helping individuals navigate daily life with confidence.
                    </p>
                </div>
                <div class="lg:w-1/2 w-full">
                    <div class="rounded-[4rem] overflow-hidden shadow-2xl relative">
                        <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&q=80&w=1200&h=800" class="w-full aspect-[4/3] object-cover" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1581579186913-45ac3e6efe93?auto=format&fit=crop&q=80&w=800" class="rounded-2xl shadow-xl w-full h-[500px] object-cover ring-1 ring-brand-slate/20" />
                </div>
                <div>
                  <h2 class="text-3xl font-bold mb-8 uppercase tracking-widest text-lg text-brand-navy">Managing Directors</h2>
                  <div class="space-y-6 text-lg text-brand-navy/80 leading-relaxed">
                    <p>Polaris Wellbeing Visits Ltd was founded by experienced care professionals with backgrounds in adult care, safeguarding and frontline support. Through our work in community and residential care settings, we repeatedly saw a gap: many older adults did not require regulated personal care services but would still benefit greatly from regular reassurance visits.</p>
                    <p class="font-bold text-brand-teal italic">"Our service was created to meet that need."</p>
                  </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

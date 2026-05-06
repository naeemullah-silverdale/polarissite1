<?php
/**
 * Template Name: Services Template
 */
get_header(); ?>

<section class="bg-brand-navy pt-48 pb-32 text-white relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
        <h1 class="text-6xl lg:text-8xl font-display font-bold mb-8">Our Services</h1>
        <p class="text-xl text-brand-gold font-bold uppercase tracking-[0.3em]">Bespoke Wellbeing Support</p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl mb-20">
            <h2 class="text-3xl font-bold text-brand-navy mb-8 italic">Structured companionship and reassurance visits tailored to individual needs.</h2>
            <p class="text-lg text-brand-navy/70 leading-relaxed">Visit schedules are agreed in advance with clients and/or families. Visit duration and frequency are confirmed before support begins.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Service Cards -->
            <?php 
            $services = array(
                array('title' => 'Companionship Visits', 'desc' => 'Friendly, meaningful visits that reduce loneliness, promote engagement, build confidence and support emotional wellbeing.', 'icon' => 'heart'),
                array('title' => 'Short Wellbeing Check-in Visits', 'desc' => 'Short visits to ensure safety, routine, hydration, nutrition reminders and peace of mind.', 'icon' => 'calendar-check'),
                array('title' => 'Appointment Escort Support', 'desc' => 'Safe, reliable support attending GP appointments, hospital visits and community activities.', 'icon' => 'clock', 'note' => 'Note: We do not transport clients in our own vehicles. We accompany using taxis or community transport.'),
                array('title' => 'Community Access Support', 'desc' => 'Support accessing local walks, social activities, and visiting friends – helping individuals remain connected.', 'icon' => 'map-pin'),
                array('title' => 'Shopping Support', 'desc' => 'Support with essential errands, maintaining independence at home, and weekly shopping.', 'icon' => 'shopping-bag'),
                array('title' => 'Family Reassurance Updates', 'desc' => 'Regular updates to families following visits, helping keep relatives informed about wellbeing.', 'icon' => 'phone-forwarded')
            );
            foreach($services as $s): ?>
            <div class="p-10 bg-brand-cream/30 rounded-[3rem] border border-brand-cream border-transparent hover:border-brand-teal transition-all group">
                <div class="bg-white p-4 rounded-2xl w-fit shadow-sm mb-8 group-hover:scale-110 transition-transform">
                    <i data-lucide="<?php echo $s['icon']; ?>" class="h-8 w-8 text-brand-teal"></i>
                </div>
                <h3 class="text-2xl font-display font-bold text-brand-navy mb-4"><?php echo $s['title']; ?></h3>
                <p class="text-brand-navy/70 leading-relaxed mb-6"><?php echo $s['desc']; ?></p>
                <?php if(isset($s['note'])): ?>
                <p class="text-xs text-brand-teal italic font-bold">★ <?php echo $s['note']; ?></p>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- What Makes Us Different -->
<section class="py-24 bg-brand-navy text-white relative">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-24 items-center">
            <div>
                 <h2 class="text-4xl font-display font-bold text-brand-gold mb-8 uppercase tracking-widest">What Makes Us Different</h2>
                 <p class="text-xl text-slate-300 italic mb-12">"Not all wellbeing services are the same."</p>
                 <ul class="space-y-6">
                    <?php $diffs = ['Experienced care professionals', 'Strong safeguarding background', 'Practitioners Enhanced DBS checks', 'Clear professional boundaries', 'Reliable, consistent support'];
                    foreach($diffs as $d): ?>
                    <li class="flex items-center gap-4 text-xl font-bold">
                        <i data-lucide="check-circle" class="h-6 w-6 text-brand-teal shrink-0"></i>
                         <?php echo $d; ?>
                    </li>
                    <?php endforeach; ?>
                 </ul>
                 <p class="mt-12 text-brand-gold font-display text-2xl italic">Your safety and wellbeing truly come first.</p>
            </div>
            <div class="bg-white/5 p-12 rounded-[4rem] border border-white/10 shadow-3xl">
                <i data-lucide="alert-triangle" class="h-10 w-10 text-brand-gold mb-8"></i>
                <h3 class="text-3xl font-display font-bold mb-8 uppercase tracking-tighter">Important Service Boundary</h3>
                <p class="text-slate-400 mb-10 leading-relaxed">Polaris Wellbeing Visits Ltd provides companionship and wellbeing visits only. We do not provide regulated care.</p>
                <h5 class="text-brand-teal font-bold mb-6 text-sm uppercase tracking-widest">We do not provide:</h5>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-slate-300">
                    <?php $no_provide = ['Personal care', 'Dressing support', 'Medication administration', 'Lifting and hoisting', 'Clinical services', 'Financial Management'];
                    foreach($no_provide as $n): ?>
                    <li class="flex items-center gap-2">
                        <div class="h-1.5 w-1.5 bg-brand-gold rounded-full"></div><?php echo $n; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

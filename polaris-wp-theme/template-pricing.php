<?php
/**
 * Template Name: Pricing Template
 */
get_header(); ?>

<section class="bg-brand-navy pt-48 pb-32 text-white relative overflow-hidden text-center">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
        <h1 class="text-6xl lg:text-8xl font-display font-bold mb-8">Pricing</h1>
        <p class="text-xl text-brand-gold font-bold uppercase tracking-[0.3em]">Transparent Support Packages</p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center mb-20">
            <h2 class="text-3xl font-display font-bold text-brand-navy mb-6">Transparent & Simple Packages</h2>
            <p class="text-lg text-brand-navy/60 italic leading-relaxed">"While individual visit rates are shown for transparency, services are provided through agreed monthly support packages paid in advance to ensure reliable scheduling and continuity of support."</p>
        </div>

        <!-- Visit Options -->
        <div class="mb-24">
            <h3 class="text-xl font-bold text-brand-teal mb-12 uppercase tracking-[0.3em] text-center">Standard Visit Rates</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php 
                $rates = [
                    ['name' => 'Standard wellbeing visits', 'time' => '1 hour', 'price' => '25'],
                    ['name' => 'Standard wellbeing visits', 'time' => '1.5 hours', 'price' => '36'],
                    ['name' => 'Standard wellbeing visits', 'time' => '2 hours', 'price' => '48'],
                    ['name' => 'Short reassurance visits', 'time' => '30 minutes', 'price' => '15'],
                    ['name' => 'Appointment escort visits', 'time' => 'Per hour', 'price' => '30'],
                    ['name' => 'Community access visits', 'time' => 'Per hour', 'price' => '30', 'note' => 'Min 2 hours']
                ];
                foreach($rates as $r): ?>
                <div class="bg-brand-cream/30 p-10 rounded-[3rem] border border-brand-cream text-center">
                    <p class="text-xs uppercase font-bold text-brand-navy/40 tracking-widest mb-4"><?php echo $r['name']; ?></p>
                    <p class="text-brand-navy font-bold text-lg mb-2"><?php echo $r['time']; ?></p>
                    <p class="text-4xl font-display font-bold text-brand-teal">£<?php echo $r['price']; ?></p>
                    <?php if(isset($r['note'])): ?>
                    <p class="mt-4 text-xs font-bold text-brand-gold bg-white px-4 py-1 rounded-full w-fit mx-auto"><?php echo $r['note']; ?></p>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Monthly Packages -->
        <div class="bg-brand-navy rounded-[4rem] p-12 lg:p-20 text-white shadow-3xl">
             <div class="flex items-center gap-4 mb-16">
                 <div class="h-px w-12 bg-brand-gold"></div>
                 <h2 class="text-3xl font-display font-bold uppercase tracking-widest">Monthly Support Packages</h2>
             </div>
             
             <div class="grid md:grid-cols-2 gap-10">
                 <?php 
                 $packages = [
                    ['name' => 'Companionship Support', 'price' => '95', 'details' => '1 visit per week', 'desc' => 'Structured companionship to reduce isolation and support wellbeing.'],
                    ['name' => 'Shopping Support', 'price' => '100', 'details' => '1 visit per week', 'desc' => 'Support with weekly shopping and essential errands.'],
                    ['name' => 'Wellbeing Check-In', 'price' => '110', 'details' => 'Two short visits per week', 'desc' => 'Regular check-ins providing reassurance and peace of mind.'],
                    ['name' => 'Community Access', 'price' => '240', 'details' => 'Weekly 2-hour outing support', 'desc' => 'Enhanced support for community engagement and outings.']
                 ];
                 foreach($packages as $p): ?>
                 <div class="bg-white/5 border border-white/10 p-10 rounded-[2.5rem] hover:bg-white/10 transition-colors">
                     <h4 class="text-2xl font-bold text-brand-gold mb-2"><?php echo $p['name']; ?></h4>
                     <p class="text-brand-teal font-bold uppercase tracking-widest text-xs mb-6"><?php echo $p['details']; ?></p>
                     <p class="text-5xl font-display font-bold text-white mb-6 leading-none">£<?php echo $p['price']; ?><span class="text-xl text-slate-500">/mo</span></p>
                     <p class="text-slate-400 leading-relaxed font-medium"><?php echo $p['desc']; ?></p>
                 </div>
                 <?php endforeach; ?>
             </div>
             
             <div class="mt-20 pt-16 border-t border-white/10">
                  <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-sm">
                      <div>
                          <p class="text-brand-gold font-bold uppercase tracking-widest mb-4">Evenings & Weekends</p>
                          <p class="text-slate-400">Additional £3 per hour for support outside standard weekday hours.</p>
                      </div>
                      <div>
                          <p class="text-brand-gold font-bold uppercase tracking-widest mb-4">Bank Holidays</p>
                          <p class="text-slate-400">50% additional charge applicable for visits on recognized bank holidays.</p>
                      </div>
                      <div>
                          <p class="text-brand-gold font-bold uppercase tracking-widest mb-4">Mileage</p>
                          <p class="text-slate-400">45p per mile outside local service radius for escorting or community support.</p>
                      </div>
                  </div>
             </div>
        </div>

        <!-- Payment Info -->
        <div class="mt-24 bg-brand-cream/30 p-12 rounded-[3rem] border border-brand-cream flex flex-col lg:flex-row items-center gap-12">
             <div class="bg-brand-navy p-6 rounded-3xl text-brand-gold shrink-0">
                 <i data-lucide="credit-card" class="h-10 w-10"></i>
             </div>
             <div class="flex-grow">
                 <h4 class="text-2xl font-display font-bold text-brand-navy mb-4">Payment & Invoicing</h4>
                 <p class="text-brand-navy/70 leading-relaxed font-bold">Flexible arrangements can be discussed depending on individual needs. Invoices are issued monthly which are paid in advance. Payment may be made via: <span class="text-brand-teal">bank transfer or standing order</span>.</p>
             </div>
             <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="bg-brand-navy text-white px-10 py-5 rounded-full font-bold hover:bg-brand-teal transition-all text-sm uppercase tracking-widest shrink-0">
                 Contact to Discuss
             </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>

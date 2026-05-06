<?php
/**
 * Template Name: Referrals Template
 */
get_header(); ?>

<section class="bg-brand-navy pt-48 pb-32 text-white relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="text-6xl lg:text-8xl font-display font-bold mb-8 italic">Referrals</h1>
        <p class="text-xl text-brand-gold font-bold uppercase tracking-[0.3em]">Health & Social Care Partnerships</p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-start">
            <div>
                 <h2 class="text-xs font-bold uppercase tracking-[0.3em] text-brand-teal mb-8">Why Refer to Polaris?</h2>
                 <h3 class="text-4xl font-display font-bold text-brand-navy mb-12">Structured reassurance support for non-regulated care needs.</h3>
                 <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                     <?php $usp = [
                        'Experienced Practitioners', 
                        'Safe & Compliant Culture', 
                        'Clear Service Boundaries', 
                        'Reliable Visit Notes', 
                        'Fast Onboarding', 
                        'Flexible Scheduling'
                     ];
                     foreach($usp as $u): ?>
                     <div class="flex items-center gap-3 font-bold text-brand-navy">
                         <i data-lucide="check-circle" class="h-5 w-5 text-brand-gold"></i> <?php echo $u; ?>
                     </div>
                     <?php endforeach; ?>
                 </div>
                 
                 <div class="bg-brand-cream/50 p-12 rounded-[3.5rem] border border-brand-cream relative overflow-hidden shadow-sm">
                    <div class="absolute top-0 right-0 p-8 opacity-10">
                        <i data-lucide="users" class="h-24 w-24 text-brand-gold"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-10 text-brand-navy uppercase tracking-widest text-xs">We welcome referrals from:</h4>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-6 relative z-10">
                        <?php $referrers = ['Families', 'GP & Health Professionals', 'Social Prescribers', 'Community & Housing', 'Charitable organisations', 'Faith groups'];
                        foreach($referrers as $r): ?>
                        <li class="flex items-center gap-3 text-brand-navy/70 font-medium">
                             <div class="h-2 w-2 bg-brand-teal rounded-full"></div><?php echo $r; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                 </div>
            </div>
            
            <div class="bg-brand-cream p-12 lg:p-16 rounded-[4rem] border border-brand-cream/50 shadow-xl relative">
                <div class="absolute top-10 right-10 flex gap-2">
                    <div class="w-1.5 h-1.5 rounded-full bg-brand-teal"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-brand-gold"></div>
                </div>
                <h2 class="text-3xl font-display font-bold text-brand-navy mb-4">Referral Form</h2>
                <p class="text-brand-navy/60 mb-12 italic font-medium">Please complete the details below to submit an initial referral enquiry.</p>
                
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-brand-navy/70 mb-2 uppercase tracking-tight">Your Name</label>
                            <input type="text" class="w-full px-5 py-4 rounded-2xl border border-brand-teal/10 focus:border-brand-teal outline-none shadow-sm transition-all" placeholder="Manager/Relative Name">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-brand-navy/70 mb-2 uppercase tracking-tight">Organisation</label>
                            <input type="text" class="w-full px-5 py-4 rounded-2xl border border-brand-teal/10 focus:border-brand-teal outline-none shadow-sm transition-all" placeholder="e.g. Social Services / GP Surgery">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-brand-navy/70 mb-2 uppercase tracking-tight">Contact Number</label>
                            <input type="tel" class="w-full px-5 py-4 rounded-2xl border border-brand-teal/10 focus:border-brand-teal outline-none shadow-sm transition-all" placeholder="Mobile or Office">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-brand-navy/70 mb-2 uppercase tracking-tight">Email</label>
                            <input type="email" class="w-full px-5 py-4 rounded-2xl border border-brand-teal/10 focus:border-brand-teal outline-none shadow-sm transition-all" placeholder="Work or Personal">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-brand-navy/70 mb-2 uppercase tracking-tight">Person being referred</label>
                        <input type="text" class="w-full px-5 py-4 rounded-2xl border border-brand-teal/10 focus:border-brand-teal outline-none shadow-sm transition-all" placeholder="Full Name or Initials">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-brand-navy/70 mb-2 uppercase tracking-tight">Summary of support requested</label>
                        <textarea rows="4" class="w-full px-5 py-4 rounded-2xl border border-brand-teal/10 focus:border-brand-teal outline-none shadow-sm transition-all resize-none" placeholder="Details of support needs..."></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-brand-navy/70 mb-2 uppercase tracking-tight">Preferred Contact Method</label>
                        <div class="flex gap-6">
                             <label class="flex items-center gap-2 text-sm font-bold cursor-pointer">
                                 <input type="radio" name="contact" checked class="text-brand-teal"> Email
                             </label>
                             <label class="flex items-center gap-2 text-sm font-bold cursor-pointer">
                                 <input type="radio" name="contact" class="text-brand-teal"> Phone
                             </label>
                        </div>
                    </div>
                    <button type="submit" class="w-full py-5 bg-brand-navy text-white rounded-2xl font-bold hover:bg-brand-teal transition-all shadow-xl shadow-brand-navy/20 font-display tracking-[0.3em] text-lg uppercase mt-4">
                         Send Referral Enquiry
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

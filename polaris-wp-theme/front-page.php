<?php get_header(); ?>

<!-- Hero Section -->
<section class="relative min-h-[90vh] flex items-center bg-brand-navy overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6954?auto=format&fit=crop&q=80&w=2000" alt="Care background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-navy via-brand-navy/80 to-transparent"></div>
    </div>
    
    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10 w-full pt-20 pb-32">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-6xl lg:text-[5.5rem] font-display font-bold text-white tracking-tighter leading-[0.9] drop-shadow-2xl opacity-90 mb-8">
                Polaris <br />
                <span class="text-brand-gold">Wellbeing</span> <br />
                Visits
            </h1>
            <p class="text-xl md:text-2xl text-slate-200 max-w-xl font-medium leading-relaxed mb-12 italic border-l-4 border-brand-teal pl-6">
                "Reliable wellbeing visits you can trust"
            </p>
            <div class="flex flex-wrap gap-6">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="bg-brand-teal text-white px-10 py-5 rounded-full font-bold text-lg hover:bg-white hover:text-brand-navy transition-all shadow-2xl flex items-center gap-3">
                    Book an Introduction
                    <i data-lucide="arrow-right" class="h-5 w-5"></i>
                </a>
                <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="text-white border border-white/20 px-10 py-5 rounded-full font-bold text-lg hover:bg-white/10 transition-all backdrop-blur-sm">
                    View Our Services
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="py-24 bg-white relative">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
            <div class="relative">
                <div class="aspect-[4/5] bg-brand-cream rounded-[3rem] overflow-hidden shadow-2xl relative z-10">
                    <img src="https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?auto=format&fit=crop&q=80&w=800" alt="Wellbeing visit" class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-brand-gold/10 rounded-full blur-3xl -z-10"></div>
            </div>
            
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="h-px w-12 bg-brand-teal"></div>
                    <span class="text-brand-teal font-bold uppercase tracking-[0.3em] text-xs">Reliable Care</span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-display font-bold text-brand-navy leading-tight mb-10">
                    Polaris Wellbeing Visits <br />
                    <span class="text-brand-gold italic">Reliable wellbeing visits you can trust</span>
                </h2>
                <div class="space-y-6 text-lg text-brand-navy/70 leading-relaxed mb-12">
                    <p class="font-bold text-brand-navy text-xl">Supporting older adults to remain independent at home while giving families peace of mind.</p>
                    <p>We provide structured companionship and reassurance visits across Birmingham and surrounding areas.</p>
                    <p>Now welcoming new clients across Birmingham.</p>
                    <p class="font-bold text-brand-teal uppercase tracking-widest text-sm">Call us today to discuss support options.</p>
                </div>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="inline-flex items-center gap-3 bg-brand-navy text-white px-10 py-5 rounded-full font-bold hover:bg-brand-teal transition-all shadow-lg shadow-brand-navy/10">
                    Contact Us Today
                    <i data-lucide="phone-call" class="h-5 w-5"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- WHAT WE DO -->
<section class="py-24 bg-brand-cream/30">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl mb-16">
            <h2 class="text-4xl font-display font-bold text-brand-navy mb-8 uppercase">What We Do</h2>
            <p class="text-xl text-brand-navy/70 leading-relaxed font-medium">
                Polaris Wellbeing Visits Ltd provides friendly, reliable companionship and reassurance visits designed to help older adults remain confident, independent and socially connected while living in their own homes.
            </p>
            <p class="mt-6 text-lg text-brand-navy/60 leading-relaxed italic">
                Our visits also provide reassurance for families who want regular wellbeing contact for their loved ones.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-16">
            <div class="bg-white p-12 rounded-[3rem] shadow-sm border border-brand-cream">
                <h3 class="text-xl font-bold text-brand-teal mb-8 uppercase tracking-widest">Support may include:</h3>
                <ul class="space-y-4">
                    <?php 
                    $support_items = array(
                        'companionship visits',
                        'short reassurance check-in visits',
                        'appointment escort support',
                        'leisure walks and social activities',
                        'shopping support and errands',
                        'community outings and access',
                        'Routine building',
                        'Wellbeing visits',
                        'light practical support at home (non-personal care)',
                        'optional reassurance updates for families following visits'
                    );
                    foreach($support_items as $item): ?>
                    <li class="flex items-start gap-3 text-brand-navy/80 font-bold capitalize">
                        <i data-lucide="check-circle" class="h-5 w-5 text-brand-teal shrink-0 mt-0.5"></i>
                        <?php echo $item; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="bg-brand-navy p-12 rounded-[3rem] shadow-2xl text-white">
                <h3 class="text-xl font-bold text-brand-gold mb-8 uppercase tracking-widest">Who Our Service Supports</h3>
                <p class="text-sm text-slate-400 mb-8 italic">Our service is suitable for:</p>
                <ul class="space-y-4">
                    <?php 
                    $support_users = array(
                        'older adults living independently at home',
                        'Adults with Learning Disabilities',
                        'Adults with Mental-Health Needs',
                        'Adults with Physical Disabilities (non-personal care)',
                        'Individuals experiencing loneliness or reduced confidence',
                        'Families living at a distance seeking peace of mind',
                        'Individuals awaiting regulated care packages',
                        'Individuals recently discharged from hospital'
                    );
                    foreach($support_users as $user): ?>
                    <li class="flex items-start gap-3 text-slate-200 font-medium">
                        <i data-lucide="users" class="h-5 w-5 text-brand-gold shrink-0 mt-0.5"></i>
                        <?php echo $user; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="py-24 bg-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-display font-bold text-brand-navy mb-16 uppercase tracking-tight">Why Families Choose Polaris</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php 
            $reasons = array(
                'Reliable scheduled visits',
                'DBS-checked care professionals',
                'Consistent reassurance support',
                'Safeguarding-aware service',
                'Flexible visit arrangements',
                'Family updates available',
                'Independence-focused approach'
            );
            foreach($reasons as $reason): ?>
            <div class="bg-brand-cream/20 p-8 rounded-3xl border border-brand-cream/50 hover:border-brand-teal transition-all group">
                <div class="bg-white w-12 h-12 rounded-full flex items-center justify-center mb-6 mx-auto shadow-sm group-hover:bg-brand-teal transition-colors">
                    <i data-lucide="star" class="h-6 w-6 text-brand-gold group-hover:text-white"></i>
                </div>
                <p class="text-brand-navy/80 font-bold leading-relaxed"><?php echo $reason; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="mt-24 p-12 bg-brand-navy rounded-[3rem] text-white shadow-2xl relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <i data-lucide="heart" class="absolute -top-10 -left-10 w-64 h-64 text-brand-gold"></i>
            </div>
            <div class="relative z-10">
                <h3 class="text-3xl font-display font-bold mb-8 italic">Arrange an introductory conversation today to discuss how we can support you or your loved one.</h3>
                <div class="flex flex-wrap justify-center gap-10">
                    <a href="tel:07592265774" class="flex items-center gap-4 text-2xl font-bold text-brand-gold hover:text-white transition-colors">
                        <i data-lucide="phone-call" class="h-8 w-8"></i>
                        07592265774
                    </a>
                    <a href="mailto:polariswellbeingvisitsltd@gmail.com" class="flex items-center gap-4 text-2xl font-bold text-brand-teal hover:text-white transition-colors">
                        <i data-lucide="mail" class="h-8 w-8"></i>
                        Email Us Today
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

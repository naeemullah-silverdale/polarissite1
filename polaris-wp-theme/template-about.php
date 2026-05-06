<?php
/**
 * Template Name: About Us Template
 */
get_header(); ?>

<!-- Page Hero -->
<section class="bg-brand-navy pt-48 pb-32 text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1516733725897-1aa73b87c8e8?auto=format&fit=crop&q=80')] bg-cover bg-center opacity-10"></div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
        <h1 class="text-6xl lg:text-8xl font-display font-bold mb-8">About Us</h1>
        <p class="text-xl text-brand-gold font-bold uppercase tracking-[0.3em]">Our Identity & Heritage</p>
    </div>
</section>

<!-- About Section -->
<section class="py-24 bg-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-start">
            <div class="space-y-8 text-lg text-brand-navy/80 leading-relaxed">
                <p class="text-2xl font-bold text-brand-navy leading-tight">
                    Polaris has guided travellers for centuries, offering direction and reassurance in uncertain times.
                </p>
                <p>
                    We chose the name Polaris because that reflects what we aim to be for the people we support which is a steady, reliable presence helping individuals navigate daily life with confidence while remaining independent in their own homes.
                </p>
                <p>
                    Polaris Wellbeing Visits Ltd was founded by experienced care professionals with backgrounds in adult care, safeguarding and frontline support. Through our work in community and residential care settings, we repeatedly saw a gap: many older adults did not require regulated personal care services but would still benefit greatly from regular reassurance visits, companionship and practical support to remain safe, connected and confident at home.
                </p>
                <p class="font-bold text-brand-teal italic border-l-4 border-brand-teal pl-6">
                    Our service was created to meet that need.
                </p>
            </div>
            <div class="bg-brand-cream/50 p-12 rounded-[3rem] border border-brand-cream relative">
                <i data-lucide="sparkles" class="absolute top-10 right-10 h-12 w-12 text-brand-gold opacity-20"></i>
                <h2 class="text-3xl font-display font-bold text-brand-navy mb-8 uppercase tracking-widest">Our Approach</h2>
                <p class="mb-10 text-brand-navy/70 leading-relaxed">At Polaris Wellbeing Visits Ltd, we believe regular companionship and reassurance visits help individuals remain confident within their own homes and communities.</p>
                
                <div class="space-y-10">
                    <div>
                        <h4 class="text-brand-teal font-bold mb-6 text-xs uppercase tracking-[0.2em]">Our approach focuses on being:</h4>
                        <ul class="space-y-4">
                            <?php $approach = ['Safeguarding-led', 'Professional and reliable', 'Person-centred', 'Respectful and dignified', 'Clear boundaries', 'Transparent communication'];
                            foreach($approach as $item): ?>
                            <li class="flex items-center gap-3 font-bold text-brand-navy">
                                <i data-lucide="shield" class="h-4 w-4 text-brand-teal"></i> <?php echo $item; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-24 bg-brand-navy text-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mb-24">
            <div class="p-12 rounded-3xl bg-white/5 border border-white/10">
                <i data-lucide="anchor" class="h-10 w-10 text-brand-gold mb-8"></i>
                <h3 class="text-3xl font-display font-bold mb-6 italic">Mission</h3>
                <p class="text-xl text-slate-300 leading-relaxed">To provide safe, professional, non-regulated wellbeing support that helps vulnerable adults live independently with dignity and confidence.</p>
            </div>
            <div class="p-12 rounded-3xl bg-white/5 border border-white/10">
                <i data-lucide="eye" class="h-10 w-10 text-brand-gold mb-8"></i>
                <h3 class="text-3xl font-display font-bold mb-6 italic">Vision</h3>
                <p class="text-xl text-slate-300 leading-relaxed">A community where every adult, regardless of age, ability, or circumstance has access to meaningful support that enhances wellbeing and reduces isolation.</p>
            </div>
        </div>
        
        <div class="text-center">
            <h3 class="text-xs font-bold uppercase tracking-[0.5em] text-brand-gold mb-12">Our Values</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                <?php $values = [
                    'Dignity' => 'Every person deserves respect.',
                    'Safety' => 'Safeguarding is at heart.',
                    'Compassion' => 'Warmth and understanding.',
                    'Professionalism' => 'High standards always.',
                    'Connection' => 'Stay engaged locally.'
                ];
                foreach($values as $title => $desc): ?>
                <div class="group">
                    <p class="text-xl font-bold mb-2 group-hover:text-brand-gold transition-colors"><?php echo $title; ?></p>
                    <div class="h-1 w-12 bg-brand-teal mx-auto mb-4 group-hover:w-full transition-all"></div>
                    <p class="text-sm text-slate-400"><?php echo $desc; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- The Team -->
<section class="py-24 bg-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mb-20">
            <span class="text-brand-gold font-bold uppercase tracking-[0.3em] text-xs">Leadership</span>
            <h2 class="mt-4 text-5xl font-display font-bold text-brand-navy">The Team</h2>
        </div>

        <div class="space-y-32">
            <!-- Director 1 -->
            <div class="flex flex-col lg:flex-row gap-16">
                <div class="lg:w-1/3">
                    <div class="aspect-[4/5] bg-slate-100 rounded-3xl overflow-hidden mb-8 shadow-xl border-4 border-brand-cream">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=800" alt="Nonye Emenike" class="w-full h-full object-cover grayscale">
                    </div>
                    <h3 class="text-3xl font-display font-bold text-brand-navy mb-2">Nonye Emenike</h3>
                    <p class="text-brand-gold font-bold uppercase tracking-widest text-sm mb-6">Director</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-brand-navy/5 px-3 py-1 rounded text-[10px] font-bold uppercase tracking-tighter">Level 5 Diploma</span>
                        <span class="bg-brand-navy/5 px-3 py-1 rounded text-[10px] font-bold uppercase tracking-tighter">MBA</span>
                    </div>
                </div>
                <div class="lg:w-2/3 prose prose-lg prose-slate max-w-none text-brand-navy/80">
                    <p class="font-bold text-xl text-brand-navy border-l-4 border-brand-teal pl-6 py-2 mb-8">Director Profile — Nonye Emenike</p>
                    <p>Nonye Emenike is a care professional with a strong leadership background across adult social care and safeguarding-focused support services. She holds a Master’s degree in Analytical and Forensic Chemistry and an MBA from Hult International Business School (UK).</p>
                    <p>She later transferred her analytical, organisational and leadership skills into the social care sector, beginning her journey at grassroots level as a Support Worker and progressing into supervisory and managerial responsibilities.</p>
                    <p>Her approach to service delivery is strongly grounded in safeguarding awareness, professionalism and compliance-led practice. Polaris Wellbeing Visits Ltd reflects her commitment to providing reliable, structured reassurance visits that support independence while giving families confidence that their loved ones are being supported safely and respectfully.</p>
                </div>
            </div>
            
            <!-- Director 2 -->
            <div class="flex flex-col lg:flex-row-reverse gap-16">
                <div class="lg:w-1/3">
                    <div class="aspect-[4/5] bg-slate-100 rounded-3xl overflow-hidden mb-8 shadow-xl border-4 border-brand-cream">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=800" alt="Muskan Begum" class="w-full h-full object-cover grayscale">
                    </div>
                    <h3 class="text-3xl font-display font-bold text-brand-navy mb-2 text-right">Muskan Begum</h3>
                    <p class="text-brand-gold font-bold uppercase tracking-widest text-sm mb-6 text-right">Director</p>
                </div>
                <div class="lg:w-2/3 prose prose-lg prose-slate max-w-none text-brand-navy/80">
                    <p class="font-bold text-xl text-brand-navy border-r-4 border-brand-teal pr-6 py-2 text-right mb-8">Director Profile — Muskan Begum</p>
                    <p>Muskan Begum is an experienced care professional with over eight years’ experience supporting vulnerable adults and young people across health and social care settings.</p>
                    <p>Her experience spans both CQC-regulated adult services and Ofsted-regulated children’s residential care environments, giving her strong safeguarding awareness across multiple areas of social care practice.</p>
                    <p>Together with her co-director, she helped establish Polaris Wellbeing Visits Ltd to provide reliable, safeguarding-aware companionship and reassurance visits that families can trust. She is particularly committed to supporting individuals to remain socially connected, emotionally supported and confident within their own homes.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

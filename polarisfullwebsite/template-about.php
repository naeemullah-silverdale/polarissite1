<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

<div class="pt-24 min-h-screen bg-brand-cream/30">
    <section class="bg-white py-24 sm:py-32 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-brand-teal/5 lg:clip-path-slant-left hidden lg:block"></div>
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
                        <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&q=80&w=1200&h=800" alt="Caring team" class="w-full aspect-[4/3] object-cover">
                        <div class="absolute inset-0 bg-brand-navy/10"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 overflow-hidden bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1581579186913-45ac3e6efe93?auto=format&fit=crop&q=80&w=800" alt="Compassionate care" class="rounded-2xl shadow-xl w-full h-[500px] object-cover ring-1 ring-brand-slate/20">
                    <div class="absolute -bottom-8 -right-8 bg-brand-gold p-8 rounded-2xl shadow-2xl hidden md:block">
                        <i data-lucide="star" class="h-12 w-12 text-white animate-pulse"></i>
                    </div>
                </div>
                <div>
                    <h2 class="text-3xl font-bold mb-8 uppercase tracking-widest text-lg text-brand-navy">About Polaris Wellbeing Visits Ltd</h2>
                    <div class="space-y-6 text-lg text-brand-navy/80 leading-relaxed">
                        <p>Polaris has guided travellers for centuries, offering direction and reassurance in uncertain times. We chose the name Polaris because that reflects what we aim to be for the people we support which is a steady, reliable presence helping individuals navigate daily life with confidence while remaining independent in their own homes.</p>
                        <p>Polaris Wellbeing Visits Ltd was founded by experienced care professionals with backgrounds in adult care, safeguarding and frontline support. Through our work in community and residential care settings, we repeatedly saw a gap: many older adults did not require regulated personal care services but would still benefit greatly from regular reassurance visits, companionship and practical support to remain safe, connected and confident at home.</p>
                        <p class="font-semibold text-brand-teal italic">Our service was created to meet that need.</p>
                        <p>We provide structured companionship and wellbeing visits designed to support older adults to remain independent, socially connected and reassured within their own homes and communities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-brand-cream/30">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl font-display font-bold text-brand-navy mb-4">OUR APPROACH</h2>
                <p class="text-lg text-brand-navy/70">At Polaris Wellbeing Visits Ltd, we believe regular companionship and reassurance visits help individuals remain confident within their own homes and communities.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-white p-10 rounded-[3rem] shadow-sm">
                    <h3 class="text-xl font-bold text-brand-teal mb-6 uppercase tracking-widest">Our approach focuses on being:</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-brand-navy font-bold"><i data-lucide="shield" class="h-5 w-5 text-brand-teal shrink-0"></i> Safeguarding-led</li>
                        <li class="flex items-center gap-3 text-brand-navy font-bold"><i data-lucide="shield" class="h-5 w-5 text-brand-teal shrink-0"></i> Professional and reliable</li>
                        <li class="flex items-center gap-3 text-brand-navy font-bold"><i data-lucide="shield" class="h-5 w-5 text-brand-teal shrink-0"></i> Person-centred</li>
                        <li class="flex items-center gap-3 text-brand-navy font-bold"><i data-lucide="shield" class="h-5 w-5 text-brand-teal shrink-0"></i> Respectful and dignified</li>
                        <li class="flex items-center gap-3 text-brand-navy font-bold"><i data-lucide="shield" class="h-5 w-5 text-brand-teal shrink-0"></i> Clear boundaries (non-regulated support only)</li>
                        <li class="flex items-center gap-3 text-brand-navy font-bold"><i data-lucide="shield" class="h-5 w-5 text-brand-teal shrink-0"></i> Transparent communication with families and referrers</li>
                    </ul>
                </div>
                <div class="bg-white p-10 rounded-[3rem] shadow-sm">
                    <h3 class="text-xl font-bold text-brand-gold mb-6 uppercase tracking-widest">Our visits are designed to:</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-brand-navy font-bold capitalize"><i data-lucide="heart" class="h-5 w-5 text-brand-gold shrink-0"></i> reduce isolation</li>
                        <li class="flex items-center gap-3 text-brand-navy font-bold capitalize"><i data-lucide="heart" class="h-5 w-5 text-brand-gold shrink-0"></i> support emotional wellbeing</li>
                        <li class="flex items-center gap-3 text-brand-navy font-bold capitalize"><i data-lucide="heart" class="h-5 w-5 text-brand-gold shrink-0"></i> encourage community connection</li>
                        <li class="flex items-center gap-3 text-brand-navy font-bold capitalize"><i data-lucide="heart" class="h-5 w-5 text-brand-gold shrink-0"></i> provide reassurance for families</li>
                        <li class="flex items-center gap-3 text-brand-navy font-bold capitalize"><i data-lucide="heart" class="h-5 w-5 text-brand-gold shrink-0"></i> promote independence at home</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-brand-navy text-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-24">
                <div class="bg-white/5 p-12 rounded-3xl border border-white/10">
                    <h3 class="text-2xl font-bold mb-6 flex items-center gap-3">
                        <i data-lucide="sparkles" class="h-6 w-6 text-brand-gold"></i> Mission
                    </h3>
                    <p class="text-xl text-slate-300 leading-relaxed font-light">To provide safe, professional, non-regulated wellbeing support that helps vulnerable adults live independently with dignity and confidence.</p>
                </div>
                <div class="bg-white/5 p-12 rounded-3xl border border-white/10">
                    <h3 class="text-2xl font-bold mb-6 flex items-center gap-3">
                        <i data-lucide="star" class="h-6 w-6 text-brand-gold"></i> Vision
                    </h3>
                    <p class="text-xl text-slate-300 leading-relaxed font-light">A community where every adult, regardless of age, ability, or circumstance has access to meaningful support that enhances wellbeing and reduces isolation.</p>
                </div>
            </div>
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4 uppercase tracking-[0.2em] text-sm">Values</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                <div class="text-center group">
                    <div class="mx-auto bg-white/5 w-16 h-16 rounded-full flex items-center justify-center mb-6 group-hover:bg-brand-teal transition-all duration-300 ring-1 ring-white/10">
                        <i data-lucide="heart" class="h-8 w-8 text-brand-gold group-hover:text-white"></i>
                    </div>
                    <h4 class="font-bold mb-2 uppercase tracking-widest text-xs">Dignity</h4>
                    <p class="text-xs text-slate-400">Every person deserves respect.</p>
                </div>
                <div class="text-center group">
                    <div class="mx-auto bg-white/5 w-16 h-16 rounded-full flex items-center justify-center mb-6 group-hover:bg-brand-teal transition-all duration-300 ring-1 ring-white/10">
                        <i data-lucide="shield" class="h-8 w-8 text-brand-gold group-hover:text-white"></i>
                    </div>
                    <h4 class="font-bold mb-2 uppercase tracking-widest text-xs">Safety</h4>
                    <p class="text-xs text-slate-400">Safeguarding is at our heart.</p>
                </div>
                <div class="text-center group">
                    <div class="mx-auto bg-white/5 w-16 h-16 rounded-full flex items-center justify-center mb-6 group-hover:bg-brand-teal transition-all duration-300 ring-1 ring-white/10">
                        <i data-lucide="sparkles" class="h-8 w-8 text-brand-gold group-hover:text-white"></i>
                    </div>
                    <h4 class="font-bold mb-2 uppercase tracking-widest text-xs">Compassion</h4>
                    <p class="text-xs text-slate-400">Warmth and understanding.</p>
                </div>
                <div class="text-center group">
                    <div class="mx-auto bg-white/5 w-16 h-16 rounded-full flex items-center justify-center mb-6 group-hover:bg-brand-teal transition-all duration-300 ring-1 ring-white/10">
                        <i data-lucide="graduation-cap" class="h-8 w-8 text-brand-gold group-hover:text-white"></i>
                    </div>
                    <h4 class="font-bold mb-2 uppercase tracking-widest text-xs">Professionalism</h4>
                    <p class="text-xs text-slate-400">Reliable, clear boundaries.</p>
                </div>
                <div class="text-center group">
                    <div class="mx-auto bg-white/5 w-16 h-16 rounded-full flex items-center justify-center mb-6 group-hover:bg-brand-teal transition-all duration-300 ring-1 ring-white/10">
                        <i data-lucide="users" class="h-8 w-8 text-brand-gold group-hover:text-white"></i>
                    </div>
                    <h4 class="font-bold mb-2 uppercase tracking-widest text-xs">Connection</h4>
                    <p class="text-xs text-slate-400">Stay engaged with community.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="text-center mb-20">
                <span class="text-brand-gold font-bold uppercase tracking-[0.3em] text-xs">Leadership</span>
                <h2 class="mt-4 text-4xl lg:text-5xl font-display font-bold text-brand-navy">The Team</h2>
            </div>
            <div class="space-y-32">
                <div class="flex flex-col lg:flex-row gap-16">
                    <div class="lg:w-1/3 flex-shrink-0">
                        <div class="sticky top-32">
                            <div class="aspect-[4/5] bg-slate-100 rounded-3xl overflow-hidden mb-6 group relative">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=800" alt="Nonye Emenike" class="w-full h-full object-cover transition-all duration-500">
                                <div class="absolute inset-0 bg-brand-navy/20 group-hover:bg-transparent transition-colors"></div>
                            </div>
                            <h3 class="text-2xl font-bold text-brand-navy uppercase tracking-tight">Nonye Emenike</h3>
                            <p class="text-brand-gold font-semibold mb-4 uppercase tracking-widest text-sm">Director</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-brand-navy/3 text-brand-navy px-3 py-1 rounded text-[10px] font-bold uppercase tracking-tighter">Level 5 Diploma</span>
                                <span class="bg-brand-navy/3 text-brand-navy px-3 py-1 rounded text-[10px] font-bold uppercase tracking-tighter">MBA</span>
                                <span class="bg-brand-navy/3 text-brand-navy px-3 py-1 rounded text-[10px] font-bold uppercase tracking-tighter">Analytical Chemistry</span>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-2/3">
                        <div class="prose prose-lg prose-indigo text-brand-navy/80 max-w-none">
                            <p class="font-bold text-brand-navy text-xl border-l-4 border-brand-teal pl-6 py-2">Director Profile — Nonye Emenike</p>
                            <p>Nonye Emenike is a care professional with a strong leadership background across adult social care and safeguarding-focused support services...</p>
                            <p>She holds a Level 5 Diploma in Leadership and Management in Adult Care and has extensive experience supporting individuals across community, domiciliary and residential care environments.</p>
                            <p>Her professional background includes supervisory leadership within CQC-regulated adult care services, where she coordinated care visits, supported staff practice, maintained safeguarding standards and worked closely with families and multidisciplinary professionals to promote independence and wellbeing for individuals living at home.</p>
                            <p>She also has experience working within Ofsted-regulated children’s residential care environments, further strengthening her safeguarding awareness across multiple care settings and reinforcing her commitment to safe, structured and person-centred support.</p>
                            <p>Through her frontline and leadership experience across regulated services, Nonye recognised a consistent gap in support for older adults who did not meet eligibility thresholds for regulated care but would still benefit greatly from regular reassurance visits, companionship and structured wellbeing contact. This insight led to the creation of Polaris Wellbeing Visits Ltd.</p>
                            <p>Her approach to service delivery is strongly grounded in safeguarding awareness, professionalism and compliance-led practice. Polaris Wellbeing Visits Ltd reflects her commitment to providing reliable, structured reassurance visits that support independence while giving families confidence that their loved ones are being supported safely and respectfully.</p>
                            <p>She is particularly committed to promoting safe, preventative community-based support that helps individuals remain independent at home while giving families peace of mind.</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row-reverse gap-16">
                    <div class="lg:w-1/3 flex-shrink-0">
                        <div class="sticky top-32">
                            <div class="aspect-[4/5] bg-slate-100 rounded-3xl overflow-hidden mb-6 group relative">
                                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=800" alt="Muskan Begum" class="w-full h-full object-cover transition-all duration-500">
                                <div class="absolute inset-0 bg-brand-navy/20 group-hover:bg-transparent transition-colors"></div>
                            </div>
                            <h3 class="text-2xl font-bold text-brand-navy uppercase tracking-tight">Muskan Begum</h3>
                            <p class="text-brand-gold font-semibold mb-4 uppercase tracking-widest text-sm">Director</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-brand-navy/3 text-brand-navy px-3 py-1 rounded text-[10px] font-bold uppercase tracking-tighter">Level 3 Diploma</span>
                                <span class="bg-brand-navy/3 text-brand-navy px-3 py-1 rounded text-[10px] font-bold uppercase tracking-tighter">Mentoring & Coaching</span>
                                <span class="bg-brand-navy/3 text-brand-navy px-3 py-1 rounded text-[10px] font-bold uppercase tracking-tighter">Health & Social Services</span>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-2/3">
                        <div class="prose prose-lg prose-indigo text-brand-navy/80 max-w-none text-right">
                            <p class="font-bold text-brand-navy text-xl border-r-4 border-brand-teal pr-6 py-2">Director Profile — Muskan Begum</p>
                            <p>Muskan Begum is an experienced care professional with over eight years’ experience supporting vulnerable adults and young people across health and social care settings...</p>
                            <p>Her experience spans both CQC-regulated adult services and Ofsted-regulated children’s residential care environments, giving her strong safeguarding awareness across multiple areas of social care practice.</p>
                            <p>Muskan’s professional background includes supporting adults within domiciliary care and residential services, maintaining care documentation in regulated settings, administering medication where appropriate, responding to safeguarding concerns and promoting safe daily routines that support confidence and wellbeing.</p>
                            <p>She holds a Level 3 Diploma in Mentoring and Coaching and is currently completing a Level 3 qualification in Health and Social services, reflecting her continued commitment to professional development across both adult and children’s services.</p>
                            <p>Through her extensive frontline experience across regulated care environments, Muskan recognised the importance of consistent reassurance visits for individuals who may not require personal care but would still benefit greatly from regular companionship, structured wellbeing contact and trusted support within their own homes.</p>
                            <p>Together with her co-director, she helped establish Polaris Wellbeing Visits Ltd to provide reliable, safeguarding-aware companionship and reassurance visits that families can trust.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

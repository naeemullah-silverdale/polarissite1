<?php
/**
 * Template Name: Policies Template
 */
get_header(); ?>

<section class="bg-brand-navy pt-48 pb-32 text-white relative">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="text-6xl lg:text-8xl font-display font-bold mb-8 italic">Policies</h1>
        <p class="text-xl text-brand-gold font-bold uppercase tracking-[0.3em]">Governance & Standards</p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-16">
            <!-- Sticky Sidebar Nav -->
            <div class="lg:col-span-1 hidden lg:block">
                <div class="sticky top-32 space-y-4">
                    <a href="#safeguarding" class="block text-sm font-bold text-brand-teal hover:text-brand-gold uppercase tracking-[0.2em] transition-colors">1. Safeguarding</a>
                    <a href="#complaints" class="block text-sm font-bold text-slate-400 hover:text-brand-teal uppercase tracking-[0.2em] transition-colors">2. Complaints</a>
                    <a href="#recruitment" class="block text-sm font-bold text-slate-400 hover:text-brand-teal uppercase tracking-[0.2em] transition-colors">3. Recruitment</a>
                    <a href="#gdpr" class="block text-sm font-bold text-slate-400 hover:text-brand-teal uppercase tracking-[0.2em] transition-colors">4. GDPR Statement</a>
                    <a href="#cancellation" class="block text-sm font-bold text-slate-400 hover:text-brand-teal uppercase tracking-[0.2em] transition-colors">5. Cancellation</a>
                </div>
            </div>

            <div class="lg:col-span-3 space-y-24">
                <!-- 1. Safeguarding Policy -->
                <div id="safeguarding" class="scroll-mt-32">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="bg-brand-navy p-3 rounded-xl text-white"><i data-lucide="shield" class="h-6 w-6"></i></div>
                        <h2 class="text-3xl font-display font-bold text-brand-navy">1. Safeguarding Policy Summary</h2>
                    </div>
                    <div class="bg-brand-cream/30 p-10 rounded-[3rem] border border-brand-cream">
                        <p class="text-lg text-brand-navy/70 leading-relaxed">
                            Polaris Wellbeing Visits Ltd is committed to the safety and wellbeing of every individual we support. All practitioners undergo Enhanced DBS checks and safeguarding training. We have clear internal procedures for responding to and reporting any safeguarding concerns to appropriate local authority services.
                        </p>
                    </div>
                </div>

                <!-- 2. Complaints Policy -->
                <div id="complaints" class="scroll-mt-32">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="bg-brand-navy p-3 rounded-xl text-white"><i data-lucide="message-square" class="h-6 w-6"></i></div>
                        <h2 class="text-3xl font-display font-bold text-brand-navy">2. Complaints Policy</h2>
                    </div>
                    <div class="space-y-8">
                        <p class="text-xl font-bold text-brand-navy italic">"We value all feedback and aim to provide a service that makes a positive difference."</p>
                        <div class="grid md:grid-cols-2 gap-8">
                            <div class="bg-brand-cream/30 p-8 rounded-3xl border border-brand-cream">
                                <h4 class="text-xs font-bold uppercase tracking-widest text-brand-teal mb-4">Stage 1 – Informal</h4>
                                <p class="text-sm text-brand-navy/60 leading-relaxed">In the first instance, we encourage you to discuss any concerns directly with the Directors. We aim to resolve most issues informally and promptly.</p>
                            </div>
                            <div class="bg-brand-navy p-8 rounded-3xl text-white">
                                <h4 class="text-xs font-bold uppercase tracking-widest text-brand-gold mb-4">Stage 2 – Formal</h4>
                                <p class="text-sm text-slate-300 leading-relaxed">If an issue is not resolved informally, please submit a formal complaint via email to <span class="font-bold text-brand-gold">polariswellbeingvisitsltd@gmail.com</span>.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Recruitment Policy -->
                <div id="recruitment" class="scroll-mt-32">
                    <div class="flex items-center gap-4 mb-8">
                         <div class="bg-brand-navy p-3 rounded-xl text-white"><i data-lucide="user-check" class="h-6 w-6"></i></div>
                         <h2 class="text-3xl font-display font-bold text-brand-navy">3. Recruitment Policy</h2>
                    </div>
                    <div class="p-10 bg-brand-cream/30 rounded-[3rem] border border-brand-cream">
                        <p class="font-bold text-brand-gold italic mb-8">To ensure safety and quality, all Polaris Wellbeing practitioners must undergo:</p>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <?php $rec = ['Enhanced DBS checks', 'Comprehensive reference checks', 'Safeguarding awareness training', 'Identity & right-to-work verification', 'Professional skills assessment'];
                            foreach($rec as $r): ?>
                            <li class="flex items-center gap-4 font-bold text-brand-navy">
                                <i data-lucide="check-circle" class="h-5 w-5 text-brand-teal shrink-0"></i> <?php echo $r; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <!-- 4. GDPR Statement -->
                <div id="gdpr" class="scroll-mt-32">
                    <div class="flex items-center gap-4 mb-8">
                         <div class="bg-brand-navy p-3 rounded-xl text-white"><i data-lucide="lock" class="h-6 w-6"></i></div>
                         <h2 class="text-3xl font-display font-bold text-brand-navy">4. GDPR Statement</h2>
                    </div>
                    <div class="space-y-6 text-brand-navy/70 leading-relaxed">
                        <p class="text-xl font-bold text-brand-navy">Polaris Wellbeing Visits Ltd respects your privacy and handles personal information responsibly.</p>
                        <p>We are committed to protecting the privacy and personal information of the individuals and families we support. All personal data is stored securely and processed in accordance with the UK General Data Protection Regulation (GDPR). We only collect information essential for providing wellbeing support and communicating with families and referrers.</p>
                    </div>
                </div>

                <!-- 5. Cancellation Policy -->
                <div id="cancellation" class="scroll-mt-32">
                    <div class="flex items-center gap-4 mb-8">
                         <div class="bg-brand-navy p-3 rounded-xl text-white"><i data-lucide="calendar-x" class="h-6 w-6"></i></div>
                         <h2 class="text-3xl font-display font-bold text-brand-navy">5. Cancellation Policy</h2>
                    </div>
                    <div class="bg-brand-cream/30 p-10 rounded-[3rem] border border-brand-cream text-brand-navy/70 leading-relaxed">
                        <p>Visits cancelled with less than 24 hours' notice will remain chargeable at the full rate to ensure continuity of staff assignments and operational costs.</p>
                    </div>
                </div>

                <!-- Support End -->
                <div class="bg-brand-navy p-12 rounded-[4rem] text-white">
                    <h3 class="text-xl font-bold text-brand-gold mb-4 uppercase tracking-widest text-xs">Service Scope & Withdrawals</h3>
                    <p class="text-slate-400 leading-relaxed">We may withdraw services if support needs become outside our service scope (requiring regulated care), if safety concerns arise, or if monthly payment terms are not met. We will always work with families to manage transitions where support needs change.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<?php
/**
 * Template Name: Safeguarding Template
 */
get_header(); ?>

<section class="bg-brand-navy pt-48 pb-32 text-white relative">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="text-6xl lg:text-8xl font-display font-bold mb-8">Safeguarding</h1>
        <p class="text-xl text-brand-gold font-bold uppercase tracking-[0.3em]">Protection & Wellbeing Commitment</p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24">
            <div>
                 <h2 class="text-xs font-bold uppercase tracking-[0.4em] text-brand-teal mb-8">Safeguarding Awareness</h2>
                 <div class="space-y-8 text-xl font-medium text-brand-navy/80 leading-relaxed italic border-l-8 border-brand-teal pl-8 py-4">
                    <p>At Polaris Wellbeing Visits Ltd, we believe that the safety and wellbeing of every individual we support is paramount.</p>
                    <p>We recognise the responsibility involved in supporting individuals within their own homes and communities. Wellbeing visits often place us in a trusted position, and we take our responsibility to promote safety and respond to concerns seriously.</p>
                 </div>
                 
                 <div class="mt-16 bg-brand-cream/30 p-10 rounded-[3rem] border border-brand-cream shadow-sm">
                    <h3 class="text-lg font-bold text-brand-navy mb-8 uppercase tracking-widest">Safer Recruitment & Training</h3>
                    <ul class="space-y-6">
                        <?php $training = [
                            'All practitioners must undergo Enhanced DBS (Disclosure and Barring Service) checks before supporting clients.',
                            'All staff receive safeguarding awareness training as part of their induction and ongoing professional development.',
                            'We reinforce clear professional boundaries through regular supervision and practice reviews.'
                        ];
                        foreach($training as $t): ?>
                        <li class="flex items-start gap-4 text-brand-navy font-bold leading-relaxed">
                            <i data-lucide="check-circle" class="h-6 w-6 text-brand-teal shrink-0 mt-0.5"></i>
                            <?php echo $t; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                 </div>
            </div>
            
            <div class="bg-brand-navy rounded-[4rem] p-12 lg:p-20 text-white shadow-3xl">
                <h2 class="text-4xl font-display font-bold mb-12 uppercase tracking-tighter">Identifying & Reporting</h2>
                
                <div class="mb-16">
                    <h4 class="text-xs font-bold uppercase tracking-[0.3em] text-brand-gold mb-8 italic">Identifying Signs of Abuse</h4>
                    <p class="text-slate-400 mb-8 italic">During visits, we remain attentive to signs that an individual may be at risk, including:</p>
                    <ul class="space-y-6">
                        <?php $signs = [
                            'Physical signs of harm or unexplained injury',
                            'Emotional distress, fear or unusual changes in behaviour',
                            'Signs of self-neglect or changes in living environment',
                            'Concerns regarding financial management or exploitation',
                            'Verbal disclosures or indicators of neglect'
                        ];
                        foreach($signs as $s): ?>
                        <li class="flex items-start gap-4 text-slate-200">
                             <div class="h-2 w-2 bg-brand-gold rounded-full mt-2.5 shrink-0"></div>
                             <span class="font-medium"><?php echo $s; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <div class="p-8 bg-white/5 rounded-3xl border border-white/10">
                    <h4 class="text-xs font-bold uppercase tracking-[0.3em] text-brand-teal mb-6 italic">Reporting Concerns</h4>
                    <p class="text-sm text-slate-300 mb-6 font-bold">We have clear internal procedures for responding to safeguarding concerns:</p>
                    <ul class="space-y-4">
                        <?php $reporting = [
                            'Documenting factual observations regarding any concern or disclosure.',
                            'Reporting concerns to local authority adult safeguarding teams if necessary.',
                            'Communicating with families and significant others safely.',
                            'Cooperating with multi-agency partners.'
                        ];
                        foreach($reporting as $r): ?>
                        <li class="flex items-center gap-4 text-sm font-medium">
                            <i data-lucide="shield-check" class="h-5 w-5 text-brand-gold shrink-0"></i>
                            <?php echo $r; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Emergency Section -->
        <div class="mt-24 bg-red-50/50 p-12 rounded-[3rem] border border-red-100 flex flex-col md:flex-row items-center gap-12">
            <div class="bg-red-600 p-6 rounded-3xl text-white shadow-xl">
                 <i data-lucide="alert-circle" class="h-10 w-10"></i>
            </div>
            <div class="flex-grow">
                 <h2 class="text-3xl font-display font-bold text-red-950 mb-4 uppercase tracking-tight">Not an Emergency Service</h2>
                 <p class="text-xl text-red-900 leading-relaxed font-bold italic">
                    Polaris Wellbeing Visits Ltd is not an emergency service. In cases of immediate danger or medical emergency, please contact <span class="bg-red-600 text-white px-3 py-1 rounded inline-block">999</span> immediately.
                 </p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

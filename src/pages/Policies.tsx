import { motion } from 'motion/react';
import { Shield, Lock, Scale, UserCheck, AlertCircle } from 'lucide-react';

export default function Policies() {
  return (
    <div className="pt-32 min-h-screen bg-brand-cream/30">
      {/* Header */}
      <section className="bg-white py-32 border-b border-brand-slate/10 relative overflow-hidden">
        <div className="absolute top-0 left-0 w-full h-full bg-brand-navy/5 -z-0"></div>
        <div className="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
          <div className="mx-auto max-w-2xl lg:mx-0">
             <div className="flex items-center gap-3 mb-6">
                <div className="h-px w-12 bg-brand-gold"></div>
                <span className="text-brand-gold font-bold uppercase tracking-[0.3em] text-xs">Governance</span>
             </div>
             <h1 className="text-5xl lg:text-7xl font-display font-bold tracking-tight text-brand-navy leading-none">
                Our <span className="text-brand-teal italic">Policies</span>
             </h1>
             <p className="mt-8 text-xl text-brand-navy/70 leading-relaxed font-medium">Commitment to transparency, privacy, and high-quality care standards.</p>
          </div>
        </div>
      </section>

      <section className="py-24">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
           <div className="grid grid-cols-1 lg:grid-cols-4 gap-12">
              {/* Sidebar Navigation */}
              <div className="lg:col-span-1 border-r border-brand-slate/10 pr-8 hidden lg:block">
                 <div className="sticky top-32 space-y-4">
                    <a href="#safeguarding-policy" className="block text-sm font-bold text-brand-teal hover:text-brand-gold uppercase tracking-[0.2em] transition-colors">1. Safeguarding Policy</a>
                    <a href="#complaints-policy" className="block text-sm font-bold text-brand-slate/60 hover:text-brand-teal uppercase tracking-[0.2em] transition-colors">2. Complaints Policy</a>
                    <a href="#recruitment-policy" className="block text-sm font-bold text-brand-slate/60 hover:text-brand-teal uppercase tracking-[0.2em] transition-colors">3. Recruitment Policy</a>
                    <a href="#gdpr" className="block text-sm font-bold text-brand-slate/60 hover:text-brand-teal uppercase tracking-[0.2em] transition-colors">4. GDPR Statement</a>
                    <a href="#cancellation" className="block text-sm font-bold text-brand-slate/60 hover:text-brand-teal uppercase tracking-[0.2em] transition-colors">5. Cancellation</a>
                 </div>
              </div>

              {/* Policy Content */}
              <div className="lg:col-span-3 space-y-24">
                 
                 {/* 1. Safeguarding Policy */}
                 <div id="safeguarding-policy" className="scroll-mt-32">
                    <div className="flex items-center gap-4 mb-8">
                       <div className="bg-brand-navy p-3 rounded-xl text-white">
                          <Shield className="h-6 w-6" />
                       </div>
                       <h2 className="text-3xl font-bold text-brand-navy">1. Safeguarding Policy Summary</h2>
                    </div>
                    <div className="prose prose-slate max-w-none space-y-8 text-brand-navy/80">
                       <p>
                         Polaris Wellbeing Visits Ltd is committed to the safety and wellbeing of every individual we support. All practitioners undergo Enhanced DBS checks and safeguarding training. We have clear internal procedures for responding to and reporting any safeguarding concerns to appropriate local authority services.
                       </p>
                    </div>
                 </div>

                 {/* 2. Complaints Policy */}
                 <div id="complaints-policy" className="scroll-mt-32">
                    <div className="flex items-center gap-4 mb-8">
                       <div className="bg-brand-navy p-3 rounded-xl text-white">
                          <AlertCircle className="h-6 w-6" />
                       </div>
                       <h2 className="text-3xl font-bold text-brand-navy">2. Complaints Policy</h2>
                    </div>
                    <div className="space-y-8 text-brand-navy/80">
                       <p className="text-lg leading-relaxed font-bold">"We value all feedback and aim to provide a service that makes a positive difference."</p>
                       <p>If you have any concerns regarding our service, please follow the steps below:</p>
                       <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
                          <div className="bg-brand-navy/5 p-8 rounded-2xl">
                             <h4 className="font-bold text-brand-navy mb-4 uppercase tracking-widest text-xs">Stage 1 – Informal</h4>
                             <p className="text-sm">In the first instance, we encourage you to discuss any concerns directly with the Directors. We aim to resolve most issues informally and promptly.</p>
                          </div>
                          <div className="bg-white p-8 rounded-2xl border border-brand-slate/10 shadow-sm">
                             <h4 className="font-bold text-brand-navy mb-4 uppercase tracking-widest text-xs">Stage 2 – Formal</h4>
                             <p className="text-sm">If an issue is not resolved informally, please submit a formal complaint via email to <span className="font-bold">polariswellbeingvisitsltd@gmail.com</span>. We will acknowledge your complaint within 3 working days and aim to provide a full response within 14 working days.</p>
                          </div>
                       </div>
                    </div>
                 </div>

                 {/* 3. Recruitment Policy */}
                 <div id="recruitment-policy" className="scroll-mt-32">
                    <div className="flex items-center gap-4 mb-8">
                       <div className="bg-brand-navy p-3 rounded-xl text-white">
                          <UserCheck className="h-6 w-6" />
                       </div>
                       <h2 className="text-3xl font-bold text-brand-navy">3. Recruitment Policy</h2>
                    </div>
                    <div className="space-y-6 text-brand-navy/80">
                       <p className="font-medium italic text-brand-gold">To ensure safety and quality, all Polaris Wellbeing practitioners must undergo:</p>
                       <ul className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                          {[
                            'Enhanced DBS (Disclosure and Barring Service) checks',
                            'Comprehensive reference checks',
                            'Safeguarding awareness training',
                            'Identity and right-to-work verification',
                            'Professional skills assessment'
                          ].map(c => (
                            <li key={c} className="flex gap-3 text-sm font-bold text-brand-navy">
                               <div className="h-5 w-5 rounded bg-brand-navy/5 flex items-center justify-center shrink-0">
                                  <div className="h-2 w-2 bg-brand-teal rounded-full"></div>
                                </div>
                               {c}
                            </li>
                          ))}
                       </ul>
                    </div>
                 </div>

                 {/* 4. GDPR Statement */}
                 <div id="gdpr" className="scroll-mt-32">
                    <div className="flex items-center gap-4 mb-8">
                       <div className="bg-brand-navy p-3 rounded-xl text-white">
                          <Lock className="h-6 w-6" />
                       </div>
                       <h2 className="text-3xl font-bold text-brand-navy">4. GDPR Statement</h2>
                    </div>
                    <div className="bg-white rounded-3xl border border-brand-slate/10 p-8 md:p-12 space-y-8 shadow-sm">
                       <p className="text-lg leading-relaxed text-brand-navy/80 font-bold">
                          Polaris Wellbeing Visits Ltd respects your privacy and handles personal information responsibly.
                       </p>
                       <p className="text-brand-navy/70 leading-relaxed">
                          We are committed to protecting the privacy and personal information of the individuals and families we support. All personal data is stored securely and processed in accordance with the UK General Data Protection Regulation (GDPR). We only collect information essential for providing wellbeing support and communicating with families and referrers. Information is never shared with third parties without consent, unless there is a safeguarding concern or a legal requirement to do so.
                       </p>
                    </div>
                 </div>

                   {/* 5. Cancellation */}
                 <div id="cancellation" className="scroll-mt-32">
                    <div className="flex items-center gap-4 mb-8">
                       <div className="bg-brand-navy p-3 rounded-xl text-white">
                          <AlertCircle className="h-6 w-6" />
                       </div>
                       <h2 className="text-3xl font-bold text-brand-navy">5. Cancellation Policy</h2>
                    </div>
                    <div className="bg-brand-gold/5 p-8 rounded-3xl border border-brand-gold/20">
                       <p className="text-brand-navy font-medium text-lg leading-relaxed">
                          We kindly request at least 24 hours’ notice if a visit needs to be cancelled. Late cancellations may be chargeable where visit time has already been allocated. Polaris Wellbeing Visits Ltd will always provide as much notice as possible if a visit must be rearranged.
                       </p>
                    </div>
                 </div>

                  {/* ServiceScope */}
                  <div className="p-10 bg-brand-navy rounded-[2.5rem] text-white">
                    <h3 className="text-xl font-bold mb-4 text-brand-gold uppercase tracking-widest text-xs">Service Scope & Withdrawals</h3>
                    <p className="text-slate-400 mb-6 leading-relaxed">We may withdraw services if support needs become outside our service scope (requiring regulated care), if safety concerns arise, or if monthly payment terms are not met. We will always work with families to manage transitions where support needs change.</p>
                  </div>

              </div>
           </div>
        </div>
      </section>
    </div>
  );
}

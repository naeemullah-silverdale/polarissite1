import { Shield, AlertCircle, Heart, Users, CheckCircle2, PhoneCall } from 'lucide-react';
import { motion } from 'motion/react';

export default function Safeguarding() {
  return (
    <div className="pt-32 min-h-screen bg-brand-cream/30">
      {/* Header */}
      <section className="bg-white py-32 border-b border-brand-slate/10 relative overflow-hidden">
        <div className="absolute top-0 right-0 w-1/3 h-full bg-brand-teal/5 lg:clip-path-slant-left"></div>
        <div className="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
          <div className="mx-auto max-w-2xl lg:mx-0">
            <div className="flex items-center gap-3 mb-6">
              <div className="h-px w-12 bg-brand-gold"></div>
              <span className="text-brand-gold font-bold uppercase tracking-[0.3em] text-xs">Protection</span>
            </div>
            <h1 className="text-5xl lg:text-7xl font-display font-bold tracking-tight text-brand-navy leading-none">
              Safeguarding & <span className="text-brand-teal italic">Wellbeing</span>
            </h1>
            <p className="mt-8 text-xl leading-8 text-brand-navy/70 font-medium max-w-xl">
              At Polaris Wellbeing Visits Ltd, we believe that the safety and wellbeing of every individual we support is paramount.
            </p>
          </div>
        </div>
      </section>

      {/* Main Content */}
      <section className="py-24">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div className="space-y-12">
              <div>
                <h2 className="text-2xl font-bold mb-6 text-brand-navy uppercase tracking-widest text-xs">Safeguarding Awareness</h2>
                <div className="space-y-6 text-lg text-brand-navy/80 leading-relaxed">
                  <p>
                    We recognise the responsibility involved in supporting individuals within their own homes and communities. Wellbeing visits often place us in a trusted position, and we take our responsibility to promote safety and respond to concerns seriously.
                  </p>
                  <p>
                    Our approach to safeguarding is proactive. We maintain a strong safeguarding-aware culture where the welfare of the individuals we support remains at the heart of our practice.
                  </p>
                </div>
              </div>

              <div>
                <h2 className="text-2xl font-bold mb-6 text-brand-navy uppercase tracking-widest text-xs">Safer Recruitment & Training</h2>
                <div className="grid grid-cols-1 gap-4">
                  {[
                    'All practitioners must undergo Enhanced DBS (Disclosure and Barring Service) checks before supporting clients.',
                    'All staff receive safeguarding awareness training as part of their induction and ongoing professional development.',
                    'We reinforce clear professional boundaries through regular supervision and practice reviews.'
                  ].map((item) => (
                    <div key={item} className="flex items-start gap-3 p-6 bg-white rounded-2xl border border-brand-slate/10 shadow-sm">
                      <CheckCircle2 className="h-5 w-5 text-brand-teal mt-1 shrink-0" />
                      <span className="font-semibold text-brand-navy/80 leading-relaxed">{item}</span>
                    </div>
                  ))}
                </div>
              </div>
            </div>

            <div className="bg-brand-navy rounded-[2.5rem] p-12 text-white shadow-2xl relative overflow-hidden">
               <div className="relative z-10">
                 <h2 className="text-3xl font-bold mb-12">Identifying & Reporting</h2>
                 
                 <div className="mb-12">
                   <h4 className="text-brand-gold font-bold uppercase tracking-widest text-xs mb-6">Identifying Signs of Abuse</h4>
                   <p className="text-slate-400 mb-6 italic">During visits, we remain attentive to signs that an individual may be at risk, including:</p>
                   <ul className="grid grid-cols-1 gap-4">
                     {[
                       'Physical signs of harm or unexplained injury',
                       'Emotional distress, fear or unusual changes in behaviour',
                       'Signs of self-neglect or changes in living environment',
                       'Concerns regarding financial management or exploitation',
                       'Verbal disclosures or indicators of neglect'
                     ].map((point) => (
                       <li key={point} className="flex items-start gap-3 text-slate-300">
                         <div className="h-2 w-2 bg-brand-gold rounded-full mt-2 shrink-0"></div>
                         {point}
                       </li>
                     ))}
                   </ul>
                 </div>

                 <div className="p-8 bg-white/5 rounded-2xl border border-white/10">
                    <h4 className="text-brand-teal font-bold uppercase tracking-widest text-xs mb-6">Reporting Concerns</h4>
                    <p className="text-sm text-slate-300 mb-4 font-bold">
                      We have clear internal procedures for responding to safeguarding concerns:
                    </p>
                    <ul className="space-y-4 text-sm">
                      <li className="flex gap-4">
                        <Users className="h-5 w-5 text-brand-gold shrink-0" />
                        <p>Documenting factual observations regarding any concern or disclosure.</p>
                      </li>
                      <li className="flex gap-4">
                        <Users className="h-5 w-5 text-brand-gold shrink-0" />
                        <p>Reporting concerns to local authority adult safeguarding teams if necessary.</p>
                      </li>
                      <li className="flex gap-4">
                        <AlertCircle className="h-5 w-5 text-brand-gold shrink-0" />
                        <p>Communicating with families and significant others (where appropriate and safe to do so).</p>
                      </li>
                      <li className="flex gap-4">
                        <AlertCircle className="h-5 w-5 text-brand-gold shrink-0" />
                        <p>Cooperating with multi-agency partners to ensure individuals remain safe.</p>
                      </li>
                    </ul>
                 </div>
               </div>
            </div>
          </div>
        </div>
      </section>

      {/* Emergency Section */}
      <section className="py-24 bg-white">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
           <div className="bg-brand-cream/30 rounded-[3rem] p-12 border border-brand-cream/50 flex flex-col md:flex-row items-center gap-12">
              <div className="bg-brand-navy p-6 rounded-3xl shadow-xl">
                <AlertCircle className="h-12 w-12 text-white" />
              </div>
              <div className="flex-grow">
                <h2 className="text-3xl font-display font-bold text-brand-navy mb-4 uppercase tracking-tight">Not an Emergency Service</h2>
                <p className="text-xl text-brand-navy/70 leading-relaxed font-bold italic">
                  Polaris Wellbeing Visits Ltd is not an emergency service. In cases of immediate danger or medical emergency, please contact 999 immediately.
                </p>
              </div>
           </div>
        </div>
      </section>
    </div>
  );
}

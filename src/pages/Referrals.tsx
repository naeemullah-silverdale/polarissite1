import { motion } from 'motion/react';
import { Send, Users, ClipboardCheck, MessageSquare, ShieldCheck, Clock } from 'lucide-react';
import React, { useState } from 'react';

export default function Referrals() {
  const [submitted, setSubmitted] = useState(false);

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    setSubmitted(true);
  };

  return (
    <div className="pt-32 min-h-screen bg-brand-cream/30">
      {/* Header */}
      <section className="bg-white py-32 border-b border-brand-slate/10 relative overflow-hidden">
        <div className="absolute top-0 right-0 w-1/4 h-full bg-brand-gold/5 blur-[60px] rounded-full translate-x-1/2"></div>
        <div className="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
          <div className="mx-auto max-w-2xl lg:mx-0">
            <div className="flex items-center gap-3 mb-6">
              <div className="h-px w-12 bg-brand-teal"></div>
              <span className="text-brand-teal font-bold uppercase tracking-[0.3em] text-xs">Collaboration</span>
            </div>
            <h1 className="text-5xl lg:text-7xl font-display font-bold tracking-tight text-brand-navy leading-none">
              Professional <span className="text-brand-teal italic">Referrals</span>
            </h1>
            <p className="mt-8 text-xl leading-8 text-brand-navy/70 font-medium max-w-xl">
              We welcome referrals from families, health professionals and local organisations. Our visits provide structured reassurance support.
            </p>
          </div>
        </div>
      </section>

      <section className="py-24">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-16">
            {/* Why Refer Info */}
            <div>
              <h2 className="text-2xl font-bold mb-8 uppercase tracking-widest text-sm text-brand-gold">Why Refer to Polaris Wellbeing Visits LTD?</h2>
              <div className="space-y-6">
                {[
                  { icon: Users, text: 'Experienced, DBS-checked practitioners' },
                  { icon: ShieldCheck, text: 'Strong safeguarding and compliance culture' },
                  { icon: ClipboardCheck, text: 'Clear boundaries (non-regulated support only)' },
                  { icon: MessageSquare, text: 'Reliable communication and visit notes' },
                  { icon: Clock, text: 'Fast onboarding and flexible scheduling' },
                ].map((item, i) => (
                  <motion.div
                    key={i}
                    initial={{ opacity: 0, x: -20 }}
                    animate={{ opacity: 1, x: 0 }}
                    transition={{ delay: i * 0.1 }}
                    className="flex items-center gap-4 p-4 bg-white rounded-2xl border border-brand-slate/10 shadow-sm"
                  >
                    <div className="bg-brand-navy/5 p-3 rounded-xl">
                      <item.icon className="h-6 w-6 text-brand-teal" />
                    </div>
                    <span className="font-semibold text-brand-navy">{item.text}</span>
                  </motion.div>
                ))}
              </div>

              <div className="mt-12 p-8 bg-brand-navy rounded-3xl text-white">
                 <h3 className="text-xl font-bold mb-4">We welcome referrals from:</h3>
                 <ul className="grid grid-cols-2 gap-4">
                   {['Families', 'Health Professionals (GP/Nurses)', 'Social Prescribers', 'Community groups & Housing providers', 'Charitable organisations', 'Faith groups'].map((link) => (
                     <li key={link} className="flex items-center gap-2 text-slate-300">
                       <div className="h-1.5 w-1.5 bg-brand-gold rounded-full"></div>
                       {link}
                     </li>
                   ))}
                 </ul>
              </div>
            </div>

            {/* Referral Form */}
            <div id="referral-form" className="bg-white rounded-3xl shadow-xl shadow-brand-navy/5 p-8 border border-brand-slate/10">
              {submitted ? (
                <motion.div
                  initial={{ opacity: 0, scale: 0.9 }}
                  animate={{ opacity: 1, scale: 1 }}
                  className="text-center py-20"
                >
                  <div className="inline-flex items-center justify-center bg-brand-teal/10 p-4 rounded-full mb-6 text-brand-teal">
                    <Send className="h-8 w-8" />
                  </div>
                  <h3 className="text-2xl font-bold text-brand-navy mb-4">Thank You!</h3>
                  <p className="text-brand-navy/60">Your referral enquiry has been sent. We'll be in touch shortly.</p>
                  <button
                    onClick={() => setSubmitted(false)}
                    className="mt-8 text-brand-teal font-bold hover:underline"
                  >
                    Send another referral
                  </button>
                </motion.div>
              ) : (
                <form onSubmit={handleSubmit} className="space-y-6">
                  <h2 className="text-2xl font-bold mb-6 text-brand-navy uppercase tracking-widest text-sm">Referral Contact Form</h2>
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                      <label className="block text-sm font-bold text-brand-navy/70 mb-2">Your Name</label>
                      <input required type="text" className="w-full px-4 py-3 rounded-xl border border-brand-slate/20 focus:ring-2 focus:ring-brand-teal focus:border-transparent outline-none transition-all" />
                    </div>
                    <div>
                      <label className="block text-sm font-bold text-brand-navy/70 mb-2">Organisation (if applicable)</label>
                      <input type="text" className="w-full px-4 py-3 rounded-xl border border-brand-slate/20 focus:ring-2 focus:ring-brand-teal focus:border-transparent outline-none transition-all" />
                    </div>
                  </div>
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                      <label className="block text-sm font-bold text-brand-navy/70 mb-2">Contact Number</label>
                      <input required type="tel" className="w-full px-4 py-3 rounded-xl border border-brand-slate/20 focus:ring-2 focus:ring-brand-teal focus:border-transparent outline-none transition-all" />
                    </div>
                    <div>
                      <label className="block text-sm font-bold text-brand-navy/70 mb-2">Email Address</label>
                      <input required type="email" className="w-full px-4 py-3 rounded-xl border border-brand-slate/20 focus:ring-2 focus:ring-brand-teal focus:border-transparent outline-none transition-all" />
                    </div>
                  </div>
                  <div>
                    <label className="block text-sm font-bold text-brand-navy/70 mb-2">Person Being Referred (Initial/Relationship)</label>
                    <input required type="text" className="w-full px-4 py-3 rounded-xl border border-brand-slate/20 focus:ring-2 focus:ring-brand-teal focus:border-transparent outline-none transition-all" placeholder="e.g. My mother, or patient initials" />
                  </div>
                  <div>
                    <label className="block text-sm font-bold text-brand-navy/70 mb-2">Summary of support requested</label>
                    <textarea required rows={4} className="w-full px-4 py-3 rounded-xl border border-brand-slate/20 focus:ring-2 focus:ring-brand-teal focus:border-transparent outline-none transition-all resize-none"></textarea>
                  </div>
                  <div>
                    <label className="block text-sm font-bold text-brand-navy/70 mb-2">Preferred Contact Method</label>
                    <select className="w-full px-4 py-3 rounded-xl border border-brand-slate/20 focus:ring-2 focus:ring-brand-teal focus:border-transparent outline-none transition-all">
                      <option>Email</option>
                      <option>Phone</option>
                    </select>
                  </div>
                  <button
                    type="submit"
                    className="w-full py-4 bg-brand-navy text-white rounded-xl font-bold hover:bg-brand-teal shadow-lg shadow-brand-navy/20 transition-all font-display tracking-[0.2em] transform active:scale-[0.98]"
                  >
                    SEND REFERRAL ENQUIRY
                  </button>
                </form>
              )}
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}

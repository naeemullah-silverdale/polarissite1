import { motion } from 'motion/react';
import { Phone, Mail, Globe, MapPin, Clock, MessageCircle, Send } from 'lucide-react';
import React, { useState } from 'react';

export default function Contact() {
  const [submitted, setSubmitted] = useState(false);

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    setSubmitted(true);
  };

  return (
    <div className="pt-32 min-h-screen bg-brand-cream/30">
      {/* Header */}
      <section className="py-32 bg-white border-b border-brand-slate/10 relative overflow-hidden">
        <div className="absolute -bottom-10 -left-10 w-64 h-64 bg-brand-teal/5 rounded-full blur-[80px]"></div>
        <div className="mx-auto max-w-7xl px-6 lg:px-8 relative z-10 text-center">
          <div className="flex items-center justify-center gap-3 mb-6">
            <div className="h-px w-8 bg-brand-gold"></div>
            <span className="text-brand-gold font-bold uppercase tracking-[0.3em] text-xs">Reach Out</span>
            <div className="h-px w-8 bg-brand-gold"></div>
          </div>
          <h1 className="text-5xl lg:text-7xl font-display font-bold tracking-tight text-brand-navy leading-none">
            Contact <span className="text-brand-teal italic">Us</span>
          </h1>
          <p className="mt-8 text-xl text-brand-navy/70 max-w-2xl mx-auto leading-relaxed font-medium">
            Supporting independence at home while giving families peace of mind. We're here to help across Birmingham and surrounding areas.
          </p>
        </div>
      </section>

      <section className="py-24">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-24">
            
            {/* Contact Info */}
            <div className="space-y-12">
              <div>
                <h2 className="text-3xl font-bold text-brand-navy mb-8">Polaris Wellbeing Visits Ltd</h2>
                <p className="text-brand-navy/80 text-lg mb-12 font-medium">
                  Now welcoming new clients across Birmingham and surrounding areas.
                </p>
                <div className="space-y-8">
                  <a href="tel:07592265774" className="flex items-center gap-6 group">
                    <div className="bg-brand-navy/5 p-4 rounded-2xl group-hover:bg-brand-navy group-hover:text-white transition-all">
                      <Phone className="h-6 w-6 text-brand-teal group-hover:text-white" />
                    </div>
                    <div>
                      <p className="text-xs font-bold uppercase tracking-widest text-brand-slate">Call us</p>
                      <p className="text-xl font-bold text-brand-navy">07592265774</p>
                    </div>
                  </a>
                  <a href="mailto:polariswellbeingvisitsltd@gmail.com" className="flex items-center gap-6 group">
                    <div className="bg-brand-navy/5 p-4 rounded-2xl group-hover:bg-brand-navy group-hover:text-white transition-all">
                      <Mail className="h-6 w-6 text-brand-teal group-hover:text-white" />
                    </div>
                    <div>
                      <p className="text-xs font-bold uppercase tracking-widest text-brand-slate">Email us</p>
                      <p className="text-xl font-bold text-brand-navy leading-tight">polariswellbeingvisitsltd@gmail.com</p>
                    </div>
                  </a>
                  <div className="flex items-center gap-6 group">
                    <div className="bg-brand-navy/5 p-4 rounded-2xl">
                      <Clock className="h-6 w-6 text-brand-teal" />
                    </div>
                    <div>
                      <p className="text-xs font-bold uppercase tracking-widest text-brand-slate">Availability</p>
                      <p className="text-xl font-bold text-brand-navy leading-tight">Monday — Sunday</p>
                    </div>
                  </div>
                </div>
              </div>

               <div className="overflow-hidden rounded-3xl border border-brand-slate/10">
                <div className="bg-slate-50 p-8">
                  <h4 className="font-bold flex items-center gap-2 text-brand-navy">
                    <MapPin className="h-5 w-5 text-brand-gold" />
                    Our Service Radius
                  </h4>
                  <p className="mt-4 text-brand-navy/60">Currently serving all areas of Birmingham and surrounding districts. Not sure if you're in range? Give us a call!</p>
                </div>
              </div>
            </div>

            {/* Contact Form */}
            <div className="bg-brand-navy/5 p-8 md:p-12 rounded-[2.5rem] border border-brand-slate/10 shadow-sm transition-colors hover:bg-white hover:border-brand-teal transition-all duration-500">
              {submitted ? (
                <div className="text-center py-16">
                  <div className="bg-brand-teal w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-8">
                    <Send className="h-8 w-8 text-white" />
                  </div>
                  <h3 className="text-2xl font-bold mb-4 text-brand-navy uppercase tracking-tight">Request Received</h3>
                  <p className="text-brand-navy/60 leading-relaxed">Your message has been sent successfully. We will follow up with you as soon as possible.</p>
                  <button onClick={() => setSubmitted(false)} className="mt-8 font-bold text-brand-teal border-b-2 border-brand-teal hover:text-brand-navy hover:border-brand-navy transition-colors pb-1">Send another message</button>
                </div>
              ) : (
                <form onSubmit={handleSubmit} className="space-y-6">
                  <h3 className="text-2xl font-bold text-brand-navy mb-8 uppercase tracking-[0.2em] text-xs flex items-center gap-2">
                    <MessageCircle className="h-5 w-5 text-brand-gold" />
                    Send a Message
                  </h3>
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                      <label className="block text-sm font-bold text-brand-navy/70 mb-2 ml-1">Name</label>
                      <input required type="text" className="w-full px-4 py-3 rounded-xl bg-white border border-brand-slate/20 focus:ring-2 focus:ring-brand-teal focus:border-transparent outline-none transition-all shadow-sm" />
                    </div>
                    <div>
                      <label className="block text-sm font-bold text-brand-navy/70 mb-2 ml-1">Phone Number</label>
                      <input required type="tel" className="w-full px-4 py-3 rounded-xl bg-white border border-brand-slate/20 focus:ring-2 focus:ring-brand-teal focus:border-transparent outline-none transition-all shadow-sm" />
                    </div>
                  </div>
                  <div>
                    <label className="block text-sm font-bold text-brand-navy/70 mb-2 ml-1">Email Address</label>
                    <input required type="email" className="w-full px-4 py-3 rounded-xl bg-white border border-brand-slate/20 focus:ring-2 focus:ring-brand-teal focus:border-transparent outline-none transition-all shadow-sm" />
                  </div>
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                      <label className="block text-sm font-bold text-brand-navy/70 mb-2 ml-1">Visit Type</label>
                      <select className="w-full px-4 py-3 rounded-xl bg-white border border-brand-slate/20 focus:ring-2 focus:ring-brand-teal focus:border-transparent outline-none transition-all shadow-sm">
                        <option>Companionship</option>
                        <option>Check-in Visit</option>
                        <option>Community Support</option>
                        <option>Appointment Escort</option>
                        <option>General Enquiry</option>
                      </select>
                    </div>
                    <div>
                      <label className="block text-sm font-bold text-brand-navy/70 mb-2 ml-1">Contact Time</label>
                      <select className="w-full px-4 py-3 rounded-xl bg-white border border-brand-slate/20 focus:ring-2 focus:ring-brand-teal focus:border-transparent outline-none transition-all shadow-sm">
                        <option>Morning (9am - 12pm)</option>
                        <option>Afternoon (1pm - 5pm)</option>
                        <option>No Preference</option>
                      </select>
                    </div>
                  </div>
                  <div>
                    <label className="block text-sm font-bold text-brand-navy/70 mb-2 ml-1">Message</label>
                    <textarea required rows={5} className="w-full px-4 py-3 rounded-xl bg-white border border-brand-slate/20 focus:ring-2 focus:ring-brand-teal focus:border-transparent outline-none transition-all resize-none shadow-sm"></textarea>
                  </div>
                  <button
                    type="submit"
                    className="w-full py-4 bg-brand-navy text-white rounded-xl font-bold hover:bg-brand-teal shadow-lg shadow-brand-navy/20 transition-all font-display tracking-[0.2em] transform active:scale-95"
                  >
                    REQUEST A CALL BACK
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

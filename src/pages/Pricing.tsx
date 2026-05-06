import { motion } from 'motion/react';
import { PoundSterling, Check, Calendar, Info, MapPin, Calculator, Clock, Heart } from 'lucide-react';
import { Link } from 'react-router-dom';

const standaloneRates = [
  { name: 'Standard wellbeing visits (1 hour)', price: '25' },
  { name: 'Standard wellbeing visits (1.5 hours)', price: '36' },
  { name: 'Standard wellbeing visits (2 hours)', price: '48' },
  { name: 'Short reassurance visits (30 mins)', price: '15' },
  { name: 'Appointment escort visits', price: '30', suffix: '/ hour' },
  { name: 'Community access visits', price: '30', suffix: '/ hour', min: 'Minimum 2 hours' },
];

const mainPackages = [
  {
    name: 'Companionship Support Package',
    price: '95',
    details: '1 visit per week',
    description: 'Structured companionship to reduce isolation and support wellbeing.',
  },
  {
    name: 'Shopping Support Package',
    price: '100',
    details: '1 visit per week',
    description: 'Support with weekly shopping and essential errands.',
  },
  {
    name: 'Wellbeing Check-In Package',
    price: '110',
    details: 'Two short visits per week',
    description: 'Regular check-ins providing reassurance and peace of mind.',
  },
  {
    name: 'Community Access Package',
    price: '240',
    details: 'Weekly 2-hour outing support',
    description: 'Enhanced support for community engagement and outings.',
  },
];

export default function Pricing() {
  return (
    <div className="pt-32 min-h-screen bg-brand-cream/30">
      {/* Header */}
      <section className="bg-white py-32 border-b border-brand-slate/10 relative overflow-hidden">
        <div className="absolute inset-0 z-0 opacity-10">
           <PoundSterling className="absolute -top-10 -right-10 h-64 w-64 text-brand-teal transform rotate-12" />
        </div>
        <div className="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
          <div className="mx-auto max-w-2xl lg:mx-0">
            <div className="flex items-center gap-3 mb-6">
              <div className="h-px w-12 bg-brand-gold"></div>
              <span className="text-brand-gold font-bold uppercase tracking-[0.3em] text-xs">Transparency</span>
            </div>
            <h1 className="text-5xl lg:text-7xl font-display font-bold tracking-tight text-brand-navy leading-none">
              Pricing & <span className="text-brand-teal italic">Support</span>
            </h1>
            <p className="mt-8 text-xl leading-8 text-brand-navy/70 font-medium max-w-xl">
              Transparent rates and structured wellbeing visit packages designed to provide consistent, reliable support.
            </p>
          </div>
        </div>
      </section>

      {/* Highlights - Why Packages? */}
      <section className="py-12 bg-brand-navy text-white shadow-inner">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
             {[
               { icon: Calendar, text: 'Consistent visit times' },
               { icon: Check, text: 'Continuity of support' },
               { icon: Clock, text: 'Reliable scheduling' },
               { icon: Heart, text: 'High-quality relationship-based support' }
             ].map((item, i) => (
               <div key={i} className="flex items-center gap-3">
                 <div className="p-2 bg-white/10 rounded-lg">
                   <item.icon className="h-5 w-5 text-brand-gold" />
                 </div>
                 <span className="font-semibold text-sm tracking-tight">{item.text}</span>
               </div>
             ))}
          </div>
        </div>
      </section>

      {/* Visit Pricing Table */}
      <section className="py-24 px-6">
        <div className="mx-auto max-w-7xl">
          <div className="grid grid-cols-1 lg:grid-cols-3 gap-16">
            <div className="lg:col-span-1">
              <h3 className="text-2xl font-bold mb-6 text-brand-navy">Visit Rate Options</h3>
              <p className="text-brand-navy/60 mb-8 leading-relaxed">
                Fees are charged according to our current structure. Services are provided through monthly support packages paid in advance via bank transfer or standing order.
              </p>
              <div className="space-y-4">
                <div className="flex items-start gap-4 p-4 bg-white rounded-2xl border border-brand-slate/10 group hover:border-brand-teal transition-colors">
                  <Calculator className="h-6 w-6 text-brand-gold mt-1 group-hover:text-brand-teal transition-colors" />
                  <div>
                    <h4 className="font-bold text-sm text-brand-navy">Evenings & Weekends</h4>
                    <p className="text-sm text-brand-navy/50">Additional £3 per hour</p>
                  </div>
                </div>
                <div className="flex items-start gap-4 p-4 bg-white rounded-2xl border border-brand-slate/10 group hover:border-brand-teal transition-colors">
                  <Calendar className="h-6 w-6 text-brand-gold mt-1 group-hover:text-brand-teal transition-colors" />
                  <div>
                    <h4 className="font-bold text-sm text-brand-navy">Bank Holidays</h4>
                    <p className="text-sm text-brand-navy/50">50% additional charge</p>
                  </div>
                </div>
                 <div className="flex items-start gap-4 p-4 bg-white rounded-2xl border border-brand-slate/10 group hover:border-brand-teal transition-colors">
                  <MapPin className="h-6 w-6 text-brand-gold mt-1 group-hover:text-brand-teal transition-colors" />
                  <div>
                    <h4 className="font-bold text-sm text-brand-navy">Mileage</h4>
                    <p className="text-sm text-brand-navy/50">45p per mile outside local service radius</p>
                  </div>
                </div>
              </div>
            </div>

            <div className="lg:col-span-2">
              <div className="bg-white rounded-3xl shadow-sm border border-brand-slate/10 overflow-hidden">
                <div className="p-8 border-b border-brand-slate/10 bg-slate-50/50">
                  <h4 className="font-bold uppercase tracking-widest text-xs text-brand-slate">Individual Visit Rates</h4>
                </div>
                <div className="divide-y divide-brand-slate/10">
                  {standaloneRates.map((rate) => (
                    <div key={rate.name} className="flex justify-between items-center p-6 hover:bg-slate-50 transition-colors">
                      <div className="flex flex-col">
                        <span className="font-semibold text-brand-navy">{rate.name}</span>
                        {rate.min && <span className="text-xs text-brand-teal font-bold uppercase tracking-wider">{rate.min}</span>}
                      </div>
                      <div className="flex items-baseline gap-1">
                        <span className="text-2xl font-display font-bold text-brand-navy flex items-center">
                          <PoundSterling className="h-5 w-5 text-brand-teal" />
                          {rate.price}
                        </span>
                        {rate.suffix && <span className="text-brand-slate text-sm font-medium">{rate.suffix}</span>}
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Monthly Packages */}
      <section className="py-24 bg-white">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="text-center mb-16">
            <h3 className="text-3xl font-bold tracking-tight text-brand-navy sm:text-4xl uppercase tracking-widest flex items-center justify-center gap-4">
              <div className="h-px bg-brand-gold w-12 hidden md:block"></div>
              Monthly Support Packages
              <div className="h-px bg-brand-gold w-12 hidden md:block"></div>
            </h3>
            <p className="mt-4 text-brand-navy/60">The most reliable way to secure consistent support.</p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">
            {mainPackages.map((pkg) => (
              <motion.div
                key={pkg.name}
                whileHover={{ scale: 1.02, borderColor: '#2D7F87' }}
                className="flex flex-col p-8 bg-slate-50 rounded-3xl border border-brand-slate/10 shadow-sm transition-all hover:bg-white"
              >
                <h4 className="font-bold text-lg mb-2 text-brand-navy">{pkg.name}</h4>
                <p className="text-brand-teal text-sm font-bold mb-4 uppercase tracking-wider">{pkg.details}</p>
                <div className="flex items-baseline gap-1 mb-6">
                  <span className="text-3xl font-display font-bold text-brand-navy flex items-center">
                    <PoundSterling className="h-6 w-6 text-brand-teal" />
                    {pkg.price}
                  </span>
                  <span className="text-brand-slate font-medium tracking-wide">/ month</span>
                </div>
                <p className="text-sm text-brand-navy/70 leading-relaxed mb-8 border-t border-brand-slate/10 pt-6">
                  {pkg.description}
                </p>
                <Link
                  to="/contact"
                  className="mt-auto w-full text-center py-3 bg-brand-navy text-white rounded-xl font-bold text-sm hover:bg-brand-teal transition-all"
                >
                  Select Package
                </Link>
              </motion.div>
            ))}
          </div>

          <div className="mt-16 bg-brand-navy rounded-3xl p-8 text-white flex flex-col md:flex-row items-center gap-8 shadow-xl">
             <div className="bg-brand-gold p-4 rounded-2xl shrink-0">
               <Info className="h-8 w-8 text-white" />
             </div>
             <div className="flex-grow">
               <h4 className="text-xl font-bold mb-2">Personalised Arrangements</h4>
               <p className="text-slate-400">Flexible arrangements can be discussed depending on individual needs. Invoices are issued monthly which are paid in advance. Payment may be made via: bank transfer or standing order.</p>
             </div>
             <Link to="/contact" className="shrink-0 bg-white text-brand-navy px-8 py-3 rounded-full font-bold hover:bg-brand-gold hover:text-white transition-all text-sm uppercase tracking-widest">
               Contact to discuss
             </Link>
          </div>
        </div>
      </section>
    </div>
  );
}

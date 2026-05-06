import { motion } from 'motion/react';
import { 
  Heart, 
  Clock, 
  MapPin, 
  ShoppingBag, 
  Bell, 
  ShieldAlert, 
  XCircle, 
  Info, 
  CheckCircle2,
  CalendarCheck
} from 'lucide-react';
import { Link } from 'react-router-dom';

const services = [
  {
    title: 'Companionship Visits',
    description: 'Friendly, meaningful visits that reduce loneliness, promote engagement, build confidence and support emotional wellbeing.',
    icon: Heart,
    color: 'bg-brand-navy/5 text-brand-teal border-brand-teal/20',
  },
  {
    title: 'Short Wellbeing Check-in Visits',
    description: 'Short visits to ensure safety, routine, hydration, nutrition reminders, emotional reassurance and peace of mind to loved ones.',
    icon: CalendarCheck,
    color: 'bg-brand-navy/5 text-brand-gold border-brand-gold/20',
  },
  {
    title: 'Appointment Escort Support',
    description: 'Safe, reliable support attending GP appointments, hospital visits, therapy sessions and community activities.',
    icon: Clock,
    color: 'bg-brand-navy/5 text-brand-teal border-brand-teal/20',
    note: 'Note: We do not transport clients in our own vehicles. We accompany and support individuals throughout the journey and appointment using appropriate transport methods (e.g. taxi, bus, community transport).'
  },
  {
    title: 'Community Access Support',
    description: 'Support accessing local walks, social activities, community events and visiting friends – helping individuals remain connected and confident.',
    icon: MapPin,
    color: 'bg-brand-navy/5 text-brand-gold border-brand-gold/20',
  },
  {
    title: 'Shopping Support',
    description: 'Support with essential errands, maintaining independence at home, weekly shopping, picking up prescriptions and other everyday tasks.',
    icon: ShoppingBag,
    color: 'bg-brand-navy/5 text-brand-teal border-brand-teal/20',
  },
  {
    title: 'Family Reassurance Updates',
    description: 'Regular updates to families following visits, helping keep relatives informed about the wellbeing and general welfare of their loved ones.',
    icon: Bell,
    color: 'bg-brand-navy/5 text-brand-gold border-brand-gold/20',
  },
];

const exclusions = [
  'Personal care',
  'Dressing support',
  'Medication administration',
  'Moving and handling support (Lifting and hoisting)',
  'Clinical or healthcare services',
  'Financial Management',
];

export default function Services() {
  return (
    <div className="pt-32 min-h-screen bg-brand-cream/30">
      {/* Header */}
      <div className="bg-white py-32 relative overflow-hidden border-b border-brand-slate/10">
        <div className="absolute inset-0 z-0">
          <div className="absolute top-0 right-0 w-1/3 h-full bg-brand-gold/5 blur-[80px] rounded-full translate-x-1/2"></div>
        </div>
        <div className="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
          <div className="grid lg:grid-cols-2 gap-16 items-center">
            <div className="mx-auto max-w-2xl lg:mx-0">
              <div className="flex items-center gap-3 mb-6">
                <div className="h-px w-12 bg-brand-gold"></div>
                <span className="text-brand-gold font-bold uppercase tracking-[0.3em] text-xs">Wellbeing Visits</span>
              </div>
              <h1 className="text-5xl lg:text-7xl font-display font-bold tracking-tight text-brand-navy leading-none">
                Our <span className="text-brand-teal italic">Services</span>
              </h1>
              <p className="mt-8 text-xl leading-8 text-brand-navy/70 font-medium max-w-xl">
                Polaris Wellbeing Visits Ltd provides structured companionship and reassurance visits tailored to individual needs.
              </p>
            </div>
            <div className="hidden lg:block">
               <div className="bg-brand-navy p-10 rounded-[3rem] shadow-2xl relative">
                  <div className="absolute -top-4 -right-4 bg-brand-gold p-4 rounded-2xl">
                    <Heart className="h-8 w-8 text-white" />
                  </div>
                  <p className="text-white text-lg font-display italic leading-relaxed">
                    "Helping individuals navigate daily life with confidence while remaining independent in their own homes."
                  </p>
                  <div className="mt-6 flex items-center gap-3">
                    <div className="h-px w-8 bg-brand-teal"></div>
                    <span className="text-brand-teal font-bold uppercase tracking-widest text-xs">The Polaris Promise</span>
                  </div>
               </div>
            </div>
          </div>
        </div>
      </div>

      {/* Service Grid */}
      <section className="py-24">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {services.map((service, index) => (
              <motion.div
                key={service.title}
                initial={{ opacity: 0, y: 20 }}
                animate={{ opacity: 1, y: 0 }}
                transition={{ delay: index * 0.1 }}
                className="bg-white p-8 rounded-3xl shadow-sm border border-slate-200 hover:shadow-md transition-shadow relative overflow-hidden group"
              >
                <div className={`inline-flex p-3 rounded-2xl mb-6 border ${service.color}`}>
                  <service.icon className="h-6 w-6" />
                </div>
                <h3 className="text-xl font-bold mb-4 text-slate-900">{service.title}</h3>
                <p className="text-slate-600 leading-relaxed text-sm mb-4">
                  {service.description}
                </p>
                {service.note && (
                  <div className="mt-4 p-4 bg-slate-50 rounded-xl border border-slate-100 flex gap-3 text-xs text-slate-500 italic">
                    <Info className="h-4 w-4 text-indigo-400 flex-shrink-0" />
                    <p>{service.note}</p>
                  </div>
                )}
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Difference Section */}
      <section className="py-24 bg-white border-y border-slate-200">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
              <h2 className="text-3xl font-bold mb-8">What Makes Us Different</h2>
              <p className="text-lg text-slate-600 mb-12">Not all wellbeing services are the same. At Polaris, your safety and wellbeing truly come first.</p>
              
              <ul className="grid grid-cols-1 gap-6">
                {[
                  'Experienced care professionals',
                  'Professionals with strong safeguarding background',
                  'Practitioners Enhanced DBS checks',
                  'Clear professional boundaries',
                  'Reliable, consistent support',
                ].map((item) => (
                  <li key={item} className="flex items-center gap-4 text-brand-navy font-medium">
                <CheckCircle2 className="h-5 w-5 text-brand-teal" />
                {item}
              </li>
            ))}
          </ul>
        </div>
        <div className="bg-brand-navy p-12 rounded-[2.5rem] text-white">
          <div className="flex items-center gap-3 mb-8 text-brand-gold">
            <ShieldAlert className="h-8 w-8" />
            <h3 className="text-2xl font-bold">Important Service Boundaries</h3>
          </div>
          <p className="text-slate-300 mb-8 font-medium">
            Polaris Wellbeing Visits Ltd provides companionship and wellbeing visits only. We do not provide:
          </p>
          <ul className="grid grid-cols-1 gap-4">
            {exclusions.map((item) => (
              <li key={item} className="flex items-center gap-3 text-slate-400 text-sm">
                <XCircle className="h-4 w-4 text-brand-slate" />
                {item}
              </li>
            ))}
          </ul>
          <div className="mt-12 p-6 bg-white/5 rounded-2xl border border-white/10">
            <p className="text-xs text-slate-400 italic">
              If regulated care becomes necessary, we are happy to support families in identifying appropriate providers.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {/* Final CTA */}
  <section className="py-24 text-center">
    <div className="mx-auto max-w-3xl px-6">
      <h2 className="text-2xl font-bold mb-6">Ready to see how we can help?</h2>
      <div className="flex flex-col sm:flex-row justify-center gap-4">
        <Link to="/contact" className="bg-brand-navy text-white px-8 py-3 rounded-full font-bold hover:bg-brand-teal transition-colors">
          Contact us
        </Link>
        <Link to="/pricing" className="bg-white border border-brand-slate/20 text-brand-navy px-8 py-3 rounded-full font-bold hover:bg-slate-50 transition-colors">
          View Pricing
        </Link>
      </div>
    </div>
  </section>
    </div>
  );
}

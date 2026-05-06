import { motion } from 'motion/react';
import { Heart, Clock, ShieldCheck, Users, MapPin, ArrowRight, Star, CheckCircle2, PhoneCall, Mail } from 'lucide-react';
import { Link } from 'react-router-dom';

const stats = [
  { id: 1, name: 'DBS Checked', icon: ShieldCheck, description: 'Fully vetted staff' },
  { id: 2, name: 'Experienced team', icon: Users, description: 'Years of expertise' },
  { id: 3, name: 'Reliable Visits', icon: Clock, description: 'Always on time' },
  { id: 4, name: 'Local Care', icon: MapPin, description: 'Serving Birmingham' },
];

const features = [
  {
    title: 'Companionship visits',
    description: 'Friendly, meaningful contact to reduce loneliness and promote engagement.',
    image: 'https://images.unsplash.com/photo-1581578731548-c64695ce6958?auto=format&fit=crop&q=80&w=800&h=600'
  },
  {
    title: 'Wellbeing check-ins',
    description: 'Short visits to ensure safety, routine, hydration, and nutrition reminders.',
    image: 'https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?auto=format&fit=crop&q=80&w=800&h=600'
  },
  {
    title: 'Community access',
    description: 'Support with local walks, social activities, and attending events.',
    image: 'https://images.unsplash.com/photo-1516733725897-1aa73b87c8e8?auto=format&fit=crop&q=80&w=800&h=600'
  },
  {
    title: 'Appointment escort',
    description: 'Escort to GP appointments, hospital visits, and therapy sessions.',
    image: 'https://images.unsplash.com/photo-1573497620053-ea5310f94a17?auto=format&fit=crop&q=80&w=800&h=600'
  },
];

export default function Home() {
  return (
    <div className="relative isolate font-sans">
      {/* Hero Section */}
      <div className="relative min-h-screen flex items-center overflow-hidden">
        {/* Fixed Background Image */}
        <div 
          className="absolute inset-0 z-0 bg-cover bg-center bg-fixed"
          style={{ 
            backgroundImage: `url('https://images.unsplash.com/photo-1516733725897-1aa73b87c8e8?auto=format&fit=crop&q=80&w=1920&h=1080')` 
          }}
        >
          {/* Overlay with radial fade for the "white-out" effect on the right */}
          <div className="absolute inset-0 bg-gradient-to-r from-brand-navy/40 via-transparent to-white/40"></div>
          <div className="absolute inset-0 bg-black/10"></div>
        </div>

        <div className="relative z-10 mx-auto max-w-7xl px-6 lg:px-8 w-full">
          <motion.div 
            initial={{ opacity: 0, y: 30 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.8 }}
            className="max-w-5xl pt-20 pb-48"
          >
            <h1 className="text-3xl md:text-4xl lg:text-[5.5rem] font-display font-bold text-white tracking-tighter leading-[0.9] drop-shadow-2xl opacity-90">
              Polaris <br />
              <span className="text-white">Wellbeing</span> <br />
              <span className="text-white">Visits</span>
            </h1>
          </motion.div>
        </div>

        {/* Info Blocks - Positioned at bottom of hero */}
        <div className="absolute bottom-0 left-0 right-0 z-20">
          <div className="grid grid-cols-1 md:grid-cols-12 max-w-7xl mx-auto shadow-2xl">
            {/* Welcome Block */}
            <div className="md:col-span-5 bg-brand-navy/90 backdrop-blur-md p-10 lg:p-14 text-white">
              <span className="text-brand-gold text-xs font-bold uppercase tracking-[0.3em] block mb-4">Welcome!</span>
              <h3 className="text-2xl lg:text-[2rem] font-display font-bold leading-[1.1] text-white/90">
                Supporting older adults to remain independent.
              </h3>
            </div>
            {/* Contact Block */}
            <div className="md:col-span-4 bg-brand-gold p-10 lg:p-14 text-white flex flex-col justify-center">
              <span className="text-white/80 text-xs font-bold uppercase tracking-[0.2em] block mb-4">Contact</span>
              <a href="tel:07592265774" className="text-3xl lg:text-5xl font-display font-bold block mb-2 hover:text-brand-navy transition-colors text-white leading-none">
                07592265774
              </a>
              <p className="text-sm font-bold text-white/90">Call for free!</p>
            </div>
            {/* Location Block */}
            <div className="md:col-span-3 bg-brand-gold/90 backdrop-blur-md p-10 lg:p-14 text-white border-l border-white/10 flex flex-col justify-center">
              <span className="text-white/80 text-xs font-bold uppercase tracking-[0.2em] block mb-4">Location</span>
              <h3 className="text-2xl lg:text-3xl font-display font-bold leading-tight text-white">
                Birmingham,<br />
                UK
              </h3>
            </div>
          </div>
        </div>
      </div>

      {/* Feature stats */}
      <div className="bg-brand-cream py-12 lg:py-20">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            {stats.map((stat) => (
              <motion.div 
                key={stat.id}
                whileHover={{ y: -5 }}
                className="flex items-start gap-5 group"
              >
                <div className="bg-white p-4 rounded-2xl shadow-sm border border-slate-100 group-hover:border-brand-teal transition-colors">
                  <stat.icon className="h-8 w-8 text-brand-teal" />
                </div>
                <div>
                  <h3 className="text-lg font-bold text-brand-navy leading-none mb-2">{stat.name}</h3>
                  <p className="text-sm text-brand-navy/60 font-medium">{stat.description}</p>
                </div>
              </motion.div>
            ))}
          </div>
        </div>
      </div>

      {/* Intro section */}
      <section className="py-24 lg:py-32 bg-white relative overflow-hidden">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="grid lg:grid-cols-2 gap-20 items-center">
            <div className="relative">
              <div className="relative z-10 rounded-[3rem] overflow-hidden shadow-2xl">
                <img 
                  src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&q=80&w=1200&h=1200" 
                  alt="Elderly support"
                  className="w-full aspect-square object-cover"
                />
              </div>
              <div className="absolute -bottom-10 -right-10 bg-brand-gold p-12 rounded-[3rem] hidden lg:block -z-0"></div>
              <div className="absolute -top-10 -left-10 bg-brand-teal/10 p-12 rounded-full hidden lg:block -z-0"></div>
              
              <div className="absolute bottom-8 left-8 right-8 bg-white/90 backdrop-blur-md p-8 rounded-[2rem] border border-white shadow-xl lg:hidden">
                 <p className="text-brand-navy font-bold text-xl italic leading-tight">
                   "Reliable wellbeing visits you can trust"
                 </p>
              </div>
            </div>

            <div>
              <div className="flex items-center gap-3 mb-6">
                <div className="h-px w-12 bg-brand-teal"></div>
                <span className="text-brand-teal font-bold uppercase tracking-[0.3em] text-xs">Reliable Care</span>
              </div>
              <h2 className="text-4xl lg:text-5xl font-display font-bold text-brand-navy leading-tight mb-8">
                Polaris Wellbeing Visits <br />
                <span className="text-brand-gold italic">Reliable wellbeing visits you can trust</span>
              </h2>
              <div className="space-y-6 text-lg text-brand-navy/70 leading-relaxed mb-8">
                <p className="font-bold text-brand-navy text-xl">Supporting older adults to remain independent at home while giving families peace of mind.</p>
                <p>We provide structured companionship and reassurance visits across Birmingham and surrounding areas.</p>
                <p>Now welcoming new clients across Birmingham.</p>
                <p className="font-bold text-brand-teal">Call us today to discuss support options.</p>
              </div>
              <Link
                to="/contact"
                className="inline-flex items-center gap-2 bg-brand-navy text-white px-8 py-4 rounded-full font-bold hover:bg-brand-teal transition-all shadow-lg shadow-brand-navy/10"
              >
                Contact us today
                <ArrowRight className="h-4 w-4" />
              </Link>
            </div>
          </div>
        </div>
      </section>

      {/* What We Do section */}
      <section className="py-24 bg-brand-cream/30">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="max-w-3xl mb-16">
            <h2 className="text-4xl font-display font-bold text-brand-navy mb-6">WHAT WE DO</h2>
            <p className="text-lg text-brand-navy/70 leading-relaxed">
              Polaris Wellbeing Visits Ltd provides friendly, reliable companionship and reassurance visits designed to help older adults remain confident, independent and socially connected while living in their own homes.
            </p>
            <p className="mt-4 text-lg text-brand-navy/70 leading-relaxed">
              Our visits also provide reassurance for families who want regular wellbeing contact for their loved ones.
            </p>
          </div>

          <div className="grid md:grid-cols-2 gap-12">
            <div>
              <h3 className="text-xl font-bold text-brand-teal mb-6 uppercase tracking-widest">Support may include:</h3>
              <ul className="grid grid-cols-1 gap-4">
                {[
                  'companionship visits',
                  'short reassurance check-in visits',
                  'appointment escort support',
                  'leisure walks and social activities',
                  'shopping support and errands',
                  'community outings and access',
                  'Routine building',
                  'Wellbeing visits',
                  'light practical support at home (non-personal care)',
                  'optional reassurance updates for families following visits'
                ].map((item) => (
                  <li key={item} className="flex items-start gap-3 text-brand-navy/80 font-medium capitalize">
                    <CheckCircle2 className="h-5 w-5 text-brand-teal mt-0.5 shrink-0" />
                    {item}
                  </li>
                ))}
              </ul>
            </div>
            <div className="bg-white p-10 rounded-[3rem] shadow-sm border border-brand-cream">
               <h3 className="text-xl font-bold text-brand-gold mb-6 uppercase tracking-widest">WHO OUR SERVICE SUPPORTS</h3>
               <p className="text-sm text-brand-navy/60 mb-6 italic">Our service is suitable for:</p>
               <ul className="grid grid-cols-1 gap-4">
                {[
                  'older adults living independently at home',
                  'Adults with Learning Disabilities',
                  'Adults with Mental-Health Needs',
                  'Adults with Physical Disabilities (non-personal care)',
                  'Individuals experiencing loneliness or reduced confidence',
                  'Families living at a distance seeking wellbeing visits and peace of mind for loved ones',
                  'Individuals awaiting regulated care packages',
                  'Individuals recently discharged from hospital (non-clinical support only)'
                ].map((item) => (
                  <li key={item} className="flex items-start gap-3 text-brand-navy/80 font-medium">
                    <Users className="h-5 w-5 text-brand-gold mt-0.5 shrink-0" />
                    {item}
                  </li>
                ))}
              </ul>
            </div>
          </div>
        </div>
      </section>

      {/* Why Families Choose Us */}
      <section className="py-24 bg-white">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
           <div className="text-center max-w-3xl mx-auto mb-16">
              <h2 className="text-4xl font-display font-bold text-brand-navy">WHY FAMILIES CHOOSE POLARIS WELLBEING VISITS</h2>
           </div>
           <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
              {[
                'Reliable scheduled visits',
                'DBS-checked care professionals with relevant experience supporting adults in community and residential care settings',
                'Consistent reassurance support',
                'Safeguarding-aware service',
                'Flexible visit arrangements',
                'Family reassurance updates available',
                'Respectful independence-focused approach'
              ].map((item, idx) => (
                <div key={idx} className="bg-brand-cream/20 p-8 rounded-3xl border border-brand-cream/50 hover:border-brand-teal transition-colors group">
                   <div className="bg-white w-10 h-10 rounded-full flex items-center justify-center mb-6 shadow-sm group-hover:bg-brand-teal transition-colors">
                      <Star className="h-5 w-5 text-brand-gold group-hover:text-white" />
                   </div>
                   <p className="text-brand-navy/80 font-bold leading-relaxed">{item}</p>
                </div>
              ))}
           </div>
           <div className="mt-20 p-10 bg-brand-navy rounded-[3rem] text-center text-white">
              <h3 className="text-2xl font-display font-bold mb-6">Arrange an introductory conversation today to discuss how we can support you or your loved one.</h3>
              <div className="flex flex-wrap justify-center gap-8">
                 <a href="tel:07592265774" className="flex items-center gap-3 text-xl font-bold text-brand-gold hover:text-white transition-colors">
                    <PhoneCall className="h-6 w-6" />
                    07592265774
                 </a>
                 <a href="mailto:polariswellbeingvisitsltd@gmail.com" className="flex items-center gap-3 text-xl font-bold text-brand-teal hover:text-white transition-colors">
                    <Mail className="h-6 w-6" />
                    polariswellbeingvisitsltd@gmail.com
                 </a>
              </div>
           </div>
        </div>
      </section>

      {/* Services grid */}
      <section className="bg-brand-cream py-24 lg:py-32">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-20">
            <span className="text-brand-gold font-bold uppercase tracking-[0.3em] text-xs">What We Offer</span>
            <h2 className="mt-4 text-4xl lg:text-5xl font-display font-bold text-brand-navy">Professional Wellbeing Visits</h2>
            <p className="mt-6 text-lg text-brand-navy/60">
              Our services are tailored to each individual's needs, focusing on companionship and reassurance.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {features.map((feature, idx) => (
              <motion.div
                key={feature.title}
                initial={{ opacity: 0, y: 20 }}
                whileInView={{ opacity: 1, y: 0 }}
                transition={{ delay: idx * 0.1 }}
                viewport={{ once: true }}
                className="bg-white rounded-[2rem] overflow-hidden shadow-sm border border-slate-100 hover:shadow-xl hover:shadow-brand-navy/5 transition-all duration-500 group"
              >
                <div className="h-48 overflow-hidden relative">
                   <img src={feature.image} alt={feature.title} className="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                   <div className="absolute inset-0 bg-brand-navy/20 group-hover:bg-brand-navy/0 transition-colors"></div>
                </div>
                <div className="p-8">
                  <h3 className="text-xl font-bold text-brand-navy mb-4 group-hover:text-brand-teal transition-colors">{feature.title}</h3>
                  <p className="text-brand-navy/60 text-sm leading-relaxed mb-6">
                    {feature.description}
                  </p>
                  <Link to="/services" className="text-brand-gold text-xs font-bold uppercase tracking-widest flex items-center gap-2 hover:gap-3 transition-all">
                    DETAILS <ArrowRight className="h-3 w-3" />
                  </Link>
                </div>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Testimonials */}
      <section className="py-24 lg:py-32 bg-white">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-20">
            <span className="text-brand-teal font-bold uppercase tracking-[0.3em] text-xs">Testimonials</span>
            <h2 className="mt-4 text-4xl lg:text-5xl font-display font-bold text-brand-navy">What Families Say</h2>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
            {[
              {
                quote: "The regular visits have made such a difference to my mother's confidence. She really looks forward to the companionship and it gives us such peace of mind.",
                author: "Sarah W.",
                role: "Daughter, Birmingham"
              },
              {
                quote: "Professional, reliable and truly caring. Polaris has been a steady presence that we can always count on for wellbeing check-ins.",
                author: "David M.",
                role: "Son, Solihull"
              },
              {
                quote: "The escort service to my hospital appointments has been invaluable. I feel safe and supported every step of the way.",
                author: "Margaret H.",
                role: "Client, Sutton Coldfield"
              }
            ].map((t, idx) => (
              <motion.div
                key={idx}
                whileHover={{ y: -10 }}
                className="bg-brand-cream/50 p-10 rounded-[3rem] relative shadow-sm border border-brand-cream transition-all group"
              >
                <div className="absolute top-8 left-8 text-brand-gold/20 text-6xl font-serif">"</div>
                <p className="relative z-10 text-brand-navy/80 italic mb-8 leading-relaxed">
                  {t.quote}
                </p>
                <div className="flex items-center gap-4">
                  <div className="w-12 h-12 bg-brand-navy rounded-full flex items-center justify-center text-white font-bold leading-none">
                    {t.author[0]}
                  </div>
                  <div>
                    <p className="font-bold text-brand-navy leading-none mb-1">{t.author}</p>
                    <p className="text-xs text-brand-teal font-medium uppercase tracking-widest">{t.role}</p>
                  </div>
                </div>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Directors Teaser */}
      <section className="py-24 lg:py-32 bg-brand-cream/30 overflow-hidden">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="grid lg:grid-cols-2 gap-16 items-center">
             <div>
                <span className="text-brand-gold font-bold uppercase tracking-[0.3em] text-xs">Peace of Mind</span>
                <h2 className="mt-4 text-4xl lg:text-5xl font-display font-bold text-brand-navy mb-8">Meet Our Leadership</h2>
                <p className="text-lg text-brand-navy/70 leading-relaxed mb-8">
                  Polaris Wellbeing Visits Ltd is led by experienced care professionals with extensive backgrounds in adult social care, safeguarding and forensic chemistry.
                </p>
                <Link to="/about" className="group inline-flex items-center gap-3 font-bold text-brand-teal transition-all">
                  Read our full bios <ArrowRight className="h-4 w-4 group-hover:translate-x-2 transition-transform" />
                </Link>
             </div>
             <div className="grid grid-cols-2 gap-4">
                <div className="rounded-2xl overflow-hidden aspect-[3/4] shadow-xl transform lg:-rotate-3 mt-8">
                   <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=600" alt="Director 1" className="w-full h-full object-cover" />
                </div>
                <div className="rounded-2xl overflow-hidden aspect-[3/4] shadow-xl transform lg:rotate-3">
                   <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=600" alt="Director 2" className="w-full h-full object-cover" />
                </div>
             </div>
          </div>
        </div>
      </section>

      {/* CTA section */}
      <section className="relative py-24 lg:py-32 overflow-hidden bg-brand-navy">
        <div className="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-[600px] h-[600px] bg-brand-teal/20 rounded-full blur-[120px]"></div>
        <div className="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-brand-gold/10 rounded-full blur-[120px]"></div>
        
        <div className="relative z-10 mx-auto max-w-7xl px-6 lg:px-8 text-center">
            <h2 className="text-4xl lg:text-6xl font-display font-bold text-white mb-8">
              Reliable visits you can <span className="text-brand-teal italic">trust</span>
            </h2>
            <p className="text-xl text-slate-300 max-w-2xl mx-auto mb-12 leading-relaxed">
              Serving Birmingham and surrounding areas. Start today with a friendly introductory visit.
            </p>
            <div className="flex flex-col sm:flex-row items-center justify-center gap-6">
              <Link
                to="/contact"
                className="w-full sm:w-auto bg-brand-gold text-white px-10 py-5 rounded-full font-bold hover:bg-white hover:text-brand-navy transition-all shadow-xl shadow-brand-gold/20 flex items-center justify-center gap-2 tracking-widest text-sm"
              >
                BOOK A CONSULTATION
              </Link>
              <a
                href="tel:07592265774"
                className="w-full sm:w-auto flex items-center justify-center gap-3 bg-white/10 backdrop-blur-md text-white px-10 py-5 rounded-full font-bold hover:bg-white/20 transition-all border border-white/20 tracking-widest text-sm"
              >
                <PhoneCall className="h-5 w-5 text-brand-gold" />
                CALL: 07592265774
              </a>
            </div>
        </div>
      </section>
    </div>
  );
}

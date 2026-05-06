import { motion } from 'motion/react';
import { Shield, Sparkles, Heart, Users, Star, GraduationCap } from 'lucide-react';

export default function About() {
  return (
    <div className="pt-24 min-h-screen bg-brand-cream/30">
      {/* Hero Header */}
      <section className="bg-white py-24 sm:py-32 relative overflow-hidden">
        <div className="absolute top-0 right-0 w-1/2 h-full bg-brand-teal/5 lg:clip-path-slant-left hidden lg:block"></div>
        <div className="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
          <div className="flex flex-col lg:flex-row items-center gap-16">
            <div className="max-w-2xl lg:w-1/2">
              <div className="flex items-center gap-3 mb-6">
                <div className="h-px w-12 bg-brand-teal"></div>
                <span className="text-brand-teal font-bold uppercase tracking-[0.3em] text-xs">Our Story</span>
              </div>
              <h1 className="text-5xl lg:text-7xl font-display font-bold text-brand-navy tracking-tight leading-none">
                 About <span className="text-brand-teal italic">Us</span>
              </h1>
              <p className="mt-8 text-xl font-medium text-brand-navy leading-relaxed max-w-xl">
                Polaris has guided travellers for centuries, offering direction and reassurance in uncertain times.
              </p>
              <p className="mt-6 text-lg leading-8 text-brand-navy/70">
                We chose the name Polaris because that reflects what we aim to be for the people we support—a steady, reliable presence helping individuals navigate daily life with confidence.
              </p>
            </div>
            <div className="lg:w-1/2 w-full">
               <div className="rounded-[4rem] overflow-hidden shadow-2xl relative">
                  <img 
                    src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&q=80&w=1200&h=800" 
                    alt="Caring team"
                    className="w-full aspect-[4/3] object-cover"
                  />
                  <div className="absolute inset-0 bg-brand-navy/10"></div>
               </div>
            </div>
          </div>
        </div>
      </section>

      {/* Origin Story */}
      <section className="py-24 overflow-hidden bg-white">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div className="relative">
               <img
                src="https://images.unsplash.com/photo-1581579186913-45ac3e6efe93?auto=format&fit=crop&q=80&w=800"
                alt="Compassionate care"
                className="rounded-2xl shadow-xl w-full h-[500px] object-cover ring-1 ring-brand-slate/20"
                referrerPolicy="no-referrer"
              />
              <div className="absolute -bottom-8 -right-8 bg-brand-gold p-8 rounded-2xl shadow-2xl hidden md:block">
                <Star className="h-12 w-12 text-white animate-pulse" />
              </div>
            </div>
            <div>
              <h2 className="text-3xl font-bold mb-8 uppercase tracking-widest text-lg text-brand-navy">About Polaris Wellbeing Visits Ltd</h2>
              <div className="space-y-6 text-lg text-brand-navy/80 leading-relaxed">
                <p>
                  Polaris has guided travellers for centuries, offering direction and reassurance in uncertain times. We chose the name Polaris because that reflects what we aim to be for the people we support which is a steady, reliable presence helping individuals navigate daily life with confidence while remaining independent in their own homes.
                </p>
                <p>
                  Polaris Wellbeing Visits Ltd was founded by experienced care professionals with backgrounds in adult care, safeguarding and frontline support. Through our work in community and residential care settings, we repeatedly saw a gap: many older adults did not require regulated personal care services but would still benefit greatly from regular reassurance visits, companionship and practical support to remain safe, connected and confident at home.
                </p>
                <p className="font-semibold text-brand-teal italic">Our service was created to meet that need.</p>
                <p>
                  We provide structured companionship and wellbeing visits designed to support older adults to remain independent, socially connected and reassured within their own homes and communities.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Our Approach Section */}
      <section className="py-24 bg-brand-cream/30">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-4xl font-display font-bold text-brand-navy mb-4">OUR APPROACH</h2>
            <p className="text-lg text-brand-navy/70">
              At Polaris Wellbeing Visits Ltd, we believe regular companionship and reassurance visits help individuals remain confident within their own homes and communities.
            </p>
          </div>

          <div className="grid md:grid-cols-2 gap-12">
            <div className="bg-white p-10 rounded-[3rem] shadow-sm">
              <h3 className="text-xl font-bold text-brand-teal mb-6 uppercase tracking-widest">Our approach focuses on being:</h3>
              <ul className="space-y-4">
                {[
                  'Safeguarding-led',
                  'Professional and reliable',
                  'Person-centred',
                  'Respectful and dignified',
                  'Clear boundaries (non-regulated support only)',
                  'Transparent communication with families and referrers'
                ].map((item) => (
                  <li key={item} className="flex items-center gap-3 text-brand-navy font-bold">
                    <Shield className="h-5 w-5 text-brand-teal shrink-0" />
                    {item}
                  </li>
                ))}
              </ul>
            </div>
            <div className="bg-white p-10 rounded-[3rem] shadow-sm">
              <h3 className="text-xl font-bold text-brand-gold mb-6 uppercase tracking-widest">Our visits are designed to:</h3>
              <ul className="space-y-4">
                {[
                  'reduce isolation',
                  'support emotional wellbeing',
                  'encourage community connection',
                  'provide reassurance for families',
                  'promote independence at home'
                ].map((item) => (
                  <li key={item} className="flex items-center gap-3 text-brand-navy font-bold capitalize">
                    <Heart className="h-5 w-5 text-brand-gold shrink-0" />
                    {item}
                  </li>
                ))}
              </ul>
            </div>
          </div>
        </div>
      </section>

      {/* Mission, Vision, Values */}
      <section className="py-24 bg-brand-navy text-white">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="grid grid-cols-1 md:grid-cols-2 gap-12 mb-24">
            <div className="bg-white/5 p-12 rounded-3xl border border-white/10">
              <h3 className="text-2xl font-bold mb-6 flex items-center gap-3">
                <Sparkles className="h-6 w-6 text-brand-gold" />
                Mission
              </h3>
              <p className="text-xl text-slate-300 leading-relaxed font-light">
                To provide safe, professional, non-regulated wellbeing support that helps vulnerable adults live independently with dignity and confidence.
              </p>
            </div>
            <div className="bg-white/5 p-12 rounded-3xl border border-white/10">
              <h3 className="text-2xl font-bold mb-6 flex items-center gap-3">
                <Star className="h-6 w-6 text-brand-gold" />
                Vision
              </h3>
              <p className="text-xl text-slate-300 leading-relaxed font-light">
                A community where every adult, regardless of age, ability, or circumstance has access to meaningful support that enhances wellbeing and reduces isolation.
              </p>
            </div>
          </div>

          <div className="text-center mb-16">
            <h2 className="text-3xl font-bold mb-4 uppercase tracking-[0.2em] text-sm">Values</h2>
          </div>

          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
            {[
              { title: 'Dignity', desc: 'Every person deserves respect.', icon: Heart },
              { title: 'Safety', desc: 'Safeguarding is at our heart.', icon: Shield },
              { title: 'Compassion', desc: 'Warmth and understanding.', icon: Sparkles },
              { title: 'Professionalism', desc: 'Reliable, clear boundaries.', icon: GraduationCap },
              { title: 'Connection', desc: 'Stay engaged with community.', icon: Users },
            ].map((value) => (
              <div key={value.title} className="text-center group">
                <div className="mx-auto bg-white/5 w-16 h-16 rounded-full flex items-center justify-center mb-6 group-hover:bg-brand-teal transition-all duration-300 ring-1 ring-white/10">
                  <value.icon className="h-8 w-8 text-brand-gold group-hover:text-white" />
                </div>
                <h4 className="font-bold mb-2 uppercase tracking-widest text-xs">{value.title}</h4>
                <p className="text-xs text-slate-400">{value.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* The Team / Directors */}
      <section className="py-24 bg-white">
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="text-center mb-20">
            <span className="text-brand-gold font-bold uppercase tracking-[0.3em] text-xs">Leadership</span>
            <h2 className="mt-4 text-4xl lg:text-5xl font-display font-bold text-brand-navy">The Team</h2>
          </div>

          <div className="space-y-32">
            {/* Nonye Emenike */}
            <div className="flex flex-col lg:flex-row gap-16">
              <div className="lg:w-1/3 flex-shrink-0">
                <div className="sticky top-32">
                  <div className="aspect-[4/5] bg-slate-100 rounded-3xl overflow-hidden mb-6 group relative">
                    <img
                      src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=800"
                      alt="Nonye Emenike"
                      className="w-full h-full object-cover transition-all duration-500"
                      referrerPolicy="no-referrer"
                    />
                    <div className="absolute inset-0 bg-brand-navy/20 group-hover:bg-transparent transition-colors"></div>
                  </div>
                  <h3 className="text-2xl font-bold text-brand-navy uppercase tracking-tight">Nonye Emenike</h3>
                  <p className="text-brand-gold font-semibold mb-4 uppercase tracking-widest text-sm">Director</p>
                  <div className="flex flex-wrap gap-2">
                    <span className="bg-brand-navy/3 text-brand-navy px-3 py-1 rounded text-[10px] font-bold uppercase tracking-tighter">Level 5 Diploma</span>
                    <span className="bg-brand-navy/3 text-brand-navy px-3 py-1 rounded text-[10px] font-bold uppercase tracking-tighter">MBA</span>
                    <span className="bg-brand-navy/3 text-brand-navy px-3 py-1 rounded text-[10px] font-bold uppercase tracking-tighter">Analytical Chemistry</span>
                  </div>
                </div>
              </div>
              <div className="lg:w-2/3">
                <div className="prose prose-lg prose-indigo text-brand-navy/80 max-w-none">
                  <p className="font-bold text-brand-navy text-xl border-l-4 border-brand-teal pl-6 py-2">
                    Director Profile — Nonye Emenike
                  </p>
                  <p>
                    Nonye Emenike is a care professional with a strong leadership background across adult social care and safeguarding-focused support services. She holds a Master’s degree in Analytical and Forensic Chemistry from the University of Hull (UK) and an MBA from Hult International Business School (UK). She later transferred her analytical, organisational and leadership skills into the social care sector, beginning her journey at grassroots level as a Support Worker and progressing into supervisory and managerial responsibilities.
                  </p>
                  <p>
                    She holds a Level 5 Diploma in Leadership and Management in Adult Care and has extensive experience supporting individuals across community, domiciliary and residential care environments.
                  </p>
                  <p>
                    Her professional background includes supervisory leadership within CQC-regulated adult care services, where she coordinated care visits, supported staff practice, maintained safeguarding standards and worked closely with families and multidisciplinary professionals to promote independence and wellbeing for individuals living at home.
                  </p>
                  <p>
                    She also has experience working within Ofsted-regulated children’s residential care environments, further strengthening her safeguarding awareness across multiple care settings and reinforcing her commitment to safe, structured and person-centred support.
                  </p>
                  <p>
                    Through her frontline and leadership experience across regulated services, Nonye recognised a consistent gap in support for older adults who did not meet eligibility thresholds for regulated care but would still benefit greatly from regular reassurance visits, companionship and structured wellbeing contact. This insight led to the creation of Polaris Wellbeing Visits Ltd.
                  </p>
                  <p>
                    Her approach to service delivery is strongly grounded in safeguarding awareness, professionalism and compliance-led practice. Polaris Wellbeing Visits Ltd reflects her commitment to providing reliable, structured reassurance visits that support independence while giving families confidence that their loved ones are being supported safely and respectfully.
                  </p>
                  <p>
                    She is particularly committed to promoting safe, preventative community-based support that helps individuals remain independent at home while giving families peace of mind.
                  </p>
                </div>
              </div>
            </div>

            {/* Muskan Begum */}
            <div className="flex flex-col lg:flex-row-reverse gap-16">
              <div className="lg:w-1/3 flex-shrink-0">
                <div className="sticky top-32">
                  <div className="aspect-[4/5] bg-slate-100 rounded-3xl overflow-hidden mb-6 group relative">
                     <img
                      src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=800"
                      alt="Muskan Begum"
                      className="w-full h-full object-cover transition-all duration-500"
                      referrerPolicy="no-referrer"
                    />
                    <div className="absolute inset-0 bg-brand-navy/20 group-hover:bg-transparent transition-colors"></div>
                  </div>
                   <h3 className="text-2xl font-bold text-brand-navy uppercase tracking-tight">Muskan Begum</h3>
                  <p className="text-brand-gold font-semibold mb-4 uppercase tracking-widest text-sm">Director</p>
                   <div className="flex flex-wrap gap-2">
                    <span className="bg-brand-navy/3 text-brand-navy px-3 py-1 rounded text-[10px] font-bold uppercase tracking-tighter">Level 3 Diploma</span>
                    <span className="bg-brand-navy/3 text-brand-navy px-3 py-1 rounded text-[10px] font-bold uppercase tracking-tighter">Mentoring & Coaching</span>
                    <span className="bg-brand-navy/3 text-brand-navy px-3 py-1 rounded text-[10px] font-bold uppercase tracking-tighter">Health & Social Services</span>
                  </div>
                </div>
              </div>
              <div className="lg:w-2/3">
                <div className="prose prose-lg prose-indigo text-brand-navy/80 max-w-none">
                  <p className="font-bold text-brand-navy text-xl border-r-4 border-brand-teal pr-6 py-2 text-right">
                    Director Profile — Muskan Begum
                  </p>
                  <p>
                    Muskan Begum is an experienced care professional with over eight years’ experience supporting vulnerable adults and young people across health and social care settings. Her work has included supporting individuals with complex needs such as dementia, Alzheimer’s disease, Parkinson’s disease, learning disabilities and mental and emotional health needs across care homes, supported living services, residential environments and community-based support settings.
                  </p>
                  <p>
                    Her experience spans both CQC-regulated adult services and Ofsted-regulated children’s residential care environments, giving her strong safeguarding awareness across multiple areas of social care practice. She has supported individuals to maintain independence within their homes and communities while working closely with families, housing providers, care teams and local authority professionals.
                  </p>
                  <p>
                    Muskan’s professional background includes supporting adults within domiciliary care and residential services, maintaining care documentation in regulated settings, administering medication where appropriate, responding to safeguarding concerns and promoting safe daily routines that support confidence and wellbeing. She has also supported individuals living within supported housing environments to maintain independence while managing complex emotional and behavioural needs.
                  </p>
                  <p>
                    She holds a Level 3 Diploma in Mentoring and Coaching and is currently completing a Level 3 qualification in Health and Social services, reflecting her continued commitment to professional development across both adult and children’s services.
                  </p>
                  <p>
                    Through her extensive frontline experience across regulated care environments, Muskan recognised the importance of consistent reassurance visits for individuals who may not require personal care but would still benefit greatly from regular companionship, structured wellbeing contact and trusted support within their own homes.
                  </p>
                  <p>
                    Together with her co-director, she helped establish Polaris Wellbeing Visits Ltd to provide reliable, safeguarding-aware companionship and reassurance visits that families can trust. She is particularly committed to supporting individuals to remain socially connected, emotionally supported and confident within their own homes and communities while maintaining high standards of safety and respectful care practice.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}

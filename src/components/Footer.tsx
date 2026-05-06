import { Link } from 'react-router-dom';
import { Phone, Mail, MapPin, Shield, CheckCircle, Heart, Star } from 'lucide-react';

export default function Footer() {
  return (
    <footer className="bg-brand-navy text-slate-300">
      {/* Trust Strip */}
      <div className="bg-brand-teal text-white py-6">
        <div className="mx-auto max-w-7xl px-4 lg:px-8">
          <div className="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
            <div className="flex flex-col items-center gap-2">
              <Shield className="h-8 w-8 opacity-80" />
              <p className="font-semibold">Fully insured service</p>
            </div>
            <div className="flex flex-col items-center gap-2 border-y border-white/10 md:border-y-0 md:border-x py-6 md:py-0">
              <CheckCircle className="h-8 w-8 opacity-80" />
              <p className="font-semibold">Safeguarding-aware support</p>
            </div>
            <div className="flex flex-col items-center gap-2">
              <Heart className="h-8 w-8 opacity-80" />
              <p className="font-semibold">Family reassurance updates available</p>
            </div>
          </div>
        </div>
      </div>

      <div className="mx-auto max-w-7xl px-4 pt-16 pb-8 lg:px-8">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
          {/* Brand */}
          <div className="col-span-1 lg:col-span-2">
            <Link to="/" className="flex items-center gap-3 mb-6">
              <div className="bg-white p-2 rounded-lg text-brand-navy">
                <Heart className="h-6 w-6" />
              </div>
              <span className="font-display font-bold text-2xl tracking-tight text-white uppercase italic">Polaris <span className="text-brand-gold">Wellbeing</span> Visits</span>
            </Link>
            <p className="text-slate-400 max-w-md mb-6 leading-relaxed font-bold italic">
              Polaris Wellbeing Visits Ltd. Supporting independence at home while giving families peace of mind.
            </p>
            <div className="flex flex-col gap-3">
               <a href="tel:07592265774" className="flex items-center gap-3 hover:text-white transition-colors">
                <Phone className="h-5 w-5 text-brand-gold" />
                07592265774
              </a>
              <a href="mailto:polariswellbeingvisitsltd@gmail.com" className="flex items-center gap-3 hover:text-white transition-colors">
                <Mail className="h-5 w-5 text-brand-gold" />
                polariswellbeingvisitsltd@gmail.com
              </a>
              <div className="flex items-center gap-3 text-slate-400">
                <MapPin className="h-5 w-5 text-brand-gold" />
                Serving all areas of Birmingham
              </div>
            </div>
          </div>

          {/* Quick Links */}
          <div>
            <h3 className="text-white font-bold mb-6 uppercase tracking-widest text-xs">Quick Links</h3>
            <ul className="grid grid-cols-2 lg:grid-cols-1 gap-4 text-sm font-medium">
              <li><Link to="/" className="hover:text-brand-gold transition-colors">Home</Link></li>
              <li><Link to="/about" className="hover:text-brand-gold transition-colors">About Us</Link></li>
              <li><Link to="/services" className="hover:text-brand-gold transition-colors">Services</Link></li>
              <li><Link to="/pricing" className="hover:text-brand-gold transition-colors">Pricing</Link></li>
              <li><Link to="/safeguarding" className="hover:text-brand-gold transition-colors">Safeguarding</Link></li>
              <li><Link to="/referrals" className="hover:text-brand-gold transition-colors">Referrals</Link></li>
              <li><Link to="/contact" className="hover:text-brand-gold transition-colors">Contact</Link></li>
              <li><Link to="/policies" className="hover:text-brand-gold transition-colors">Policies</Link></li>
            </ul>
          </div>

          {/* Policies */}
          <div>
            <h3 className="text-white font-semibold mb-6">Legal & Policies</h3>
            <ul className="space-y-4 text-sm font-medium">
              <li><Link to="/policies" className="hover:text-brand-gold transition-colors">Policies</Link></li>
              <li><Link to="/safeguarding" className="hover:text-brand-gold transition-colors">Safeguarding Commitment</Link></li>
              <li><span className="text-slate-500">GDPR Compliant</span></li>
              <li><span className="text-slate-500 text-xs mt-2 block">Serving Birmingham & Surrounding Areas</span></li>
            </ul>
          </div>
        </div>

        <div className="border-t border-brand-slate/20 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs tracking-wider">
          <p>&copy; {new Date().getFullYear()} Polaris Wellbeing Visits Ltd. All rights reserved.</p>
          <div className="flex items-center gap-2">
            <Star className="h-4 w-4 text-brand-gold fill-brand-gold" />
            <span>Guiding with Care & Compassion</span>
          </div>
        </div>
      </div>
    </footer>
  );
}

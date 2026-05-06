import { Link, useLocation } from 'react-router-dom';
import { Menu, X, Phone, Heart, Mail, Clock, MapPin, Users } from 'lucide-react';
import { useState } from 'react';
import { motion, AnimatePresence } from 'motion/react';

const navigation = [
  { name: 'Home', href: '/' },
  { name: 'About Us', href: '/about' },
  { name: 'Services', href: '/services' },
  { name: 'Pricing', href: '/pricing' },
  { name: 'Safeguarding', href: '/safeguarding' },
  { name: 'Referrals', href: '/referrals' },
  { name: 'Contact', href: '/contact' },
  { name: 'Policies', href: '/policies' },
];

export default function Navbar() {
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
  const location = useLocation();

  return (
    <header className="fixed w-full z-50">
      {/* Top Info Bar */}
      <div className="bg-brand-navy text-white/90 py-2 hidden sm:block border-b border-white/5">
        <div className="mx-auto max-w-7xl px-8 flex justify-between items-center text-[13px] font-medium tracking-wide">
          <div className="flex items-center gap-6">
            <a href="mailto:polariswellbeingvisitsltd@gmail.com" className="flex items-center gap-2 hover:text-brand-gold transition-colors">
              <Mail className="h-3.5 w-3.5 text-brand-gold" />
              polariswellbeingvisitsltd@gmail.com
            </a>
            <div className="flex items-center gap-2">
              <Clock className="h-3.5 w-3.5 text-brand-gold" />
              Monday — Sunday
            </div>
          </div>
          <div className="flex items-center gap-6">
            <span className="flex items-center gap-2">
              <MapPin className="h-3.5 w-3.5 text-brand-gold" />
              Birmingham, UK
            </span>
          </div>
        </div>
      </div>

      {/* Main Navbar */}
      <nav className="bg-white/95 backdrop-blur-md border-b border-slate-100" aria-label="Global">
        <div className="mx-auto flex max-w-7xl items-center justify-between p-4 lg:px-8">
          <div className="flex lg:flex-1">
            <Link to="/" className="-m-1.5 p-1.5 flex items-center gap-3 group">
              <span className="sr-only">Polaris Wellbeing Visits</span>
              <div className="relative">
                <div className="bg-slate-200/50 p-2 rounded-lg group-hover:bg-brand-gold transition-colors duration-500">
                   <Users className="h-7 w-7 text-brand-navy group-hover:text-white transition-colors" />
                </div>
              </div>
              <div className="flex flex-col">
                <span className="font-display font-bold text-2xl tracking-tight text-brand-gold leading-[1]">
                  Polaris
                </span>
                <span className="text-brand-teal text-[11px] font-bold uppercase tracking-[0.2em] mt-0.5">
                  Wellbeing Visits
                </span>
              </div>
            </Link>
          </div>
          <div className="flex lg:hidden">
            <button
              type="button"
              className="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-brand-navy"
              onClick={() => setMobileMenuOpen(true)}
            >
              <span className="sr-only">Open main menu</span>
              <Menu className="h-6 w-6" aria-hidden="true" />
            </button>
          </div>
          <div className="hidden lg:flex lg:gap-x-7">
            {navigation.map((item) => (
              <Link
                key={item.name}
                to={item.href}
                className={`text-[14px] font-bold tracking-tight leading-6 transition-all duration-300 relative py-1 ${
                  location.pathname === item.href ? 'text-brand-gold' : 'text-brand-navy hover:text-brand-gold'
                }`}
              >
                {item.name}
              </Link>
            ))}
          </div>
          <div className="hidden lg:flex lg:flex-1 lg:justify-end">
            <a
              href="tel:07592265774"
              className="inline-flex items-center gap-3 bg-brand-navy px-6 py-2.5 text-sm font-bold text-white rounded-full hover:bg-brand-teal hover:shadow-lg hover:shadow-brand-teal/20 transition-all duration-300"
            >
              <Phone className="h-4 w-4 text-brand-gold" />
              07592265774
            </a>
          </div>
        </div>
      </nav>

      <AnimatePresence>
        {mobileMenuOpen && (
          <>
            <motion.div
              initial={{ opacity: 0 }}
              animate={{ opacity: 1 }}
              exit={{ opacity: 0 }}
              className="fixed inset-0 z-50 bg-brand-navy/60 backdrop-blur-sm lg:hidden"
              onClick={() => setMobileMenuOpen(false)}
            />
            <motion.div
              initial={{ x: '100%' }}
              animate={{ x: 0 }}
              exit={{ x: '100%' }}
              transition={{ type: 'spring', damping: 25, stiffness: 200 }}
              className="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-slate-900/10 lg:hidden"
            >
              <div className="flex items-center justify-between border-b border-slate-100 pb-6">
                <Link to="/" className="-m-1.5 p-1.5 flex items-center gap-2" onClick={() => setMobileMenuOpen(false)}>
                  <div className="bg-brand-teal p-2 rounded-lg">
                    <Heart className="h-6 w-6 text-white" />
                  </div>
                  <span className="font-display font-bold text-xl tracking-tight text-brand-navy">Polaris</span>
                </Link>
                <button
                  type="button"
                  className="-m-2.5 rounded-md p-2.5 text-brand-navy"
                  onClick={() => setMobileMenuOpen(false)}
                >
                  <span className="sr-only">Close menu</span>
                  <X className="h-6 w-6" aria-hidden="true" />
                </button>
              </div>
              <div className="mt-8 flow-root">
                <div className="-my-6 divide-y divide-slate-100">
                  <div className="space-y-1 py-6">
                    {navigation.map((item) => (
                      <Link
                        key={item.name}
                        to={item.href}
                        className={`-mx-3 block rounded-xl px-4 py-3 text-base font-bold transition-colors ${
                          location.pathname === item.href ? 'bg-brand-teal/5 text-brand-teal' : 'text-brand-navy hover:bg-slate-50'
                        }`}
                        onClick={() => setMobileMenuOpen(false)}
                      >
                        {item.name}
                      </Link>
                    ))}
                  </div>
                  <div className="py-8">
                    <a
                      href="tel:07592265774"
                      className="flex items-center gap-4 bg-brand-navy text-white px-6 py-4 rounded-2xl font-bold hover:bg-brand-teal transition-all shadow-lg shadow-brand-navy/20"
                    >
                      <Phone className="h-5 w-5 text-brand-gold" />
                      07592265774
                    </a>
                  </div>
                </div>
              </div>
            </motion.div>
          </>
        )}
      </AnimatePresence>
    </header>
  );
}

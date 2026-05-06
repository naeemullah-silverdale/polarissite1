import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import { useEffect } from 'react';
import Navbar from './components/Navbar';
import Footer from './components/Footer';
import Home from './pages/Home';
import About from './pages/About';
import Services from './pages/Services';
import Pricing from './pages/Pricing';
import Safeguarding from './pages/Safeguarding';
import Referrals from './pages/Referrals';
import Contact from './pages/Contact';
import Policies from './pages/Policies';

// Scroll to top on route change
function ScrollToTop() {
  useEffect(() => {
    window.scrollTo(0, 0);
  }, []);
  return null;
}

export default function App() {
  return (
    <Router>
      <ScrollToTop />
      <div className="min-h-screen flex flex-col">
        <Navbar />
        <main className="flex-grow">
          <Routes>
            <Route path="/" element={<Home />} />
            <Route path="/about" element={<About />} />
            <Route path="/services" element={<Services />} />
            <Route path="/pricing" element={<Pricing />} />
            <Route path="/safeguarding" element={<Safeguarding />} />
            <Route path="/referrals" element={<Referrals />} />
            <Route path="/contact" element={<Contact />} />
            <Route path="/policies" element={<Policies />} />
          </Routes>
        </main>
        <Footer />
      </div>
    </Router>
  );
}

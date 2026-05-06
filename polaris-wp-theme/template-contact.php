<?php
/**
 * Template Name: Contact Template
 */
get_header(); ?>

<section class="bg-brand-navy pt-48 pb-32 text-white relative">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="text-6xl lg:text-8xl font-display font-bold mb-8 italic">Contact Us</h1>
        <p class="text-xl text-brand-gold font-bold uppercase tracking-[0.3em]">Start the Conversation</p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24">
            <div class="space-y-12">
                <div class="space-y-6">
                    <h2 class="text-3xl font-display font-bold text-brand-navy">We would love to hear from you.</h2>
                    <p class="text-xl text-brand-navy/60 italic leading-relaxed">"Whether you are looking for support for yourself or for a loved one, we are here to help."</p>
                </div>
                
                <div class="grid grid-cols-1 gap-10">
                    <div class="flex items-start gap-6 p-10 bg-brand-cream/30 rounded-[3rem] border border-brand-cream transition-all hover:bg-white hover:shadow-xl group">
                         <div class="bg-white p-4 rounded-2xl text-brand-teal shadow-sm group-hover:bg-brand-teal group-hover:text-white transition-colors">
                            <i data-lucide="phone-call" class="h-8 w-8"></i>
                         </div>
                         <div>
                            <p class="text-xs font-bold text-brand-gold uppercase tracking-[0.2em] mb-3">Call Us</p>
                            <p class="text-2xl font-bold text-brand-navy">07592265774</p>
                            <p class="text-sm text-slate-400 mt-2">Mon - Fri, 9am - 5pm</p>
                         </div>
                    </div>
                    <div class="flex items-start gap-6 p-10 bg-brand-cream/30 rounded-[3rem] border border-brand-cream transition-all hover:bg-white hover:shadow-xl group">
                         <div class="bg-white p-4 rounded-2xl text-brand-gold shadow-sm group-hover:bg-brand-gold group-hover:text-white transition-colors">
                            <i data-lucide="mail" class="h-8 w-8"></i>
                         </div>
                         <div>
                            <p class="text-xs font-bold text-brand-teal uppercase tracking-[0.2em] mb-3">Email Us</p>
                            <p class="text-lg font-bold text-brand-navy">polariswellbeingvisitsltd@gmail.com</p>
                         </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-12 lg:p-16 rounded-[4rem] border border-brand-cream/50 shadow-2xl relative">
                <h2 class="text-3xl font-display font-bold text-brand-navy mb-4">Send a Message</h2>
                <p class="text-brand-navy/60 mb-12 italic font-medium">We aim to respond to all enquiries within 24 hours.</p>
                
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-brand-navy/70 mb-2 uppercase tracking-tight">Full Name</label>
                            <input type="text" class="w-full px-5 py-4 rounded-2xl border border-brand-teal/10 focus:border-brand-teal outline-none shadow-sm transition-all" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-brand-navy/70 mb-2 uppercase tracking-tight">Contact Number</label>
                            <input type="tel" class="w-full px-5 py-4 rounded-2xl border border-brand-teal/10 focus:border-brand-teal outline-none shadow-sm transition-all" placeholder="07123 456789">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-brand-navy/70 mb-2 uppercase tracking-tight">Email Address</label>
                        <input type="email" class="w-full px-5 py-4 rounded-2xl border border-brand-teal/10 focus:border-brand-teal outline-none shadow-sm transition-all" placeholder="john@example.com">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-brand-navy/70 mb-2 uppercase tracking-tight">How can we help?</label>
                        <textarea rows="5" class="w-full px-5 py-4 rounded-2xl border border-brand-teal/10 focus:border-brand-teal outline-none shadow-sm transition-all resize-none" placeholder="Please describe your interest in our wellbeing visits..."></textarea>
                    </div>
                    <button type="submit" class="w-full py-5 bg-brand-navy text-white rounded-2xl font-bold hover:bg-brand-teal transition-all shadow-xl shadow-brand-navy/20 font-display tracking-[0.3em] text-lg uppercase">
                         Send Enquiry
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

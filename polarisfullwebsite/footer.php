    </main>

    <footer class="bg-brand-navy pt-24 pb-12 text-white border-t border-white/5">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 mb-20 text-center md:text-left">
                <div class="lg:col-span-2 flex flex-col items-center md:items-start">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 mb-8">
                        <div class="bg-brand-teal p-2 rounded-lg text-white">
                            <i data-lucide="shield-check" class="h-6 w-6"></i>
                        </div>
                        <span class="font-display font-bold text-2xl tracking-tighter text-white uppercase italic">
                            Polaris <span class="text-brand-teal">Wellbeing</span> Visits
                        </span>
                    </a>
                    <p class="text-slate-400 text-lg leading-relaxed max-w-md font-medium">
                        Supporting older adults to remain independent at home while giving families peace of mind. Reliable visits you can trust.
                    </p>
                </div>
                <div>
                  <h4 class="font-bold uppercase tracking-widest text-brand-gold mb-8 text-sm">Quick Links</h4>
                  <ul class="space-y-4 font-bold text-brand-teal">
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>" class="hover:text-white transition-colors">About Us</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="hover:text-white transition-colors">Services</a></li>
                    <li><a href="<?php echo esc_url(home_url('/pricing')); ?>" class="hover:text-white transition-colors">Pricing & Packages</a></li>
                    <li><a href="<?php echo esc_url(home_url('/safeguarding')); ?>" class="hover:text-white transition-colors">Safeguarding</a></li>
                    <li><a href="<?php echo esc_url(home_url('/referrals')); ?>" class="hover:text-white transition-colors">Referrals</a></li>
                  </ul>
                </div>
                <div>
                  <h4 class="font-bold uppercase tracking-widest text-brand-gold mb-8 text-sm">Legal & Quality</h4>
                  <ul class="space-y-4 font-bold text-slate-400">
                    <li><a href="<?php echo esc_url(home_url('/policies')); ?>" class="hover:text-white transition-colors">Policies</a></li>
                    <li><a href="<?php echo esc_url(home_url('/terms')); ?>" class="hover:text-white transition-colors">Terms of Service</a></li>
                    <li><span class="text-xs uppercase tracking-tighter">Registered in England & Wales</span></li>
                  </ul>
                </div>
            </div>
            
            <div class="border-t border-white/5 pt-12 flex flex-col md:flex-row justify-between items-center gap-8">
                <p class="text-slate-500 text-sm font-medium">
                    &copy; <?php echo date('Y'); ?> Polaris Wellbeing Visits Ltd. All rights reserved.
                </p>
                <div class="flex gap-6">
                    <a href="tel:07592265774" class="text-slate-400 hover:text-brand-teal transition-colors">
                        <i data-lucide="phone" class="h-5 w-5"></i>
                    </a>
                    <a href="mailto:polariswellbeingvisitsltd@gmail.com" class="text-slate-400 hover:text-brand-teal transition-colors">
                        <i data-lucide="mail" class="h-5 w-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>

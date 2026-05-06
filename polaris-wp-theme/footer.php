</main>

<footer class="bg-brand-navy text-white pt-24 pb-12 overflow-hidden relative">
    <div class="absolute top-0 right-0 w-96 h-96 bg-brand-teal/5 rounded-full blur-3xl -mr-48 -mt-48"></div>
    
    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 mb-20">
            <div class="lg:col-span-2">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-3 mb-8">
                    <div class="bg-white p-2 rounded-lg text-brand-navy">
                        <i data-lucide="shield-check" class="h-6 w-6"></i>
                    </div>
                    <span class="font-display font-bold text-2xl tracking-tight text-white uppercase italic">
                        Polaris <span class="text-brand-gold">Wellbeing</span> Visits
                    </span>
                </a>
                <p class="text-slate-400 max-w-md mb-8 leading-relaxed font-bold italic">
                    Polaris Wellbeing Visits Ltd. Supporting independence at home while giving families peace of mind.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <i data-lucide="phone" class="h-5 w-5 text-brand-gold"></i>
                        <span class="font-bold">07592265774</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i data-lucide="mail" class="h-5 w-5 text-brand-gold"></i>
                        <span class="font-bold">polariswellbeingvisitsltd@gmail.com</span>
                    </div>
                    <div class="flex items-center gap-3 text-slate-400">
                        <i data-lucide="map-pin" class="h-5 w-5 text-brand-gold"></i>
                        <span>Serving all areas of Birmingham</span>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-white font-bold mb-8 uppercase tracking-widest text-xs">Quick Links</h3>
                <ul class="grid grid-cols-2 lg:grid-cols-1 gap-4 text-sm">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-brand-gold transition-colors">Home</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="hover:text-brand-gold transition-colors">About Us</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="hover:text-brand-gold transition-colors">Services</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>" class="hover:text-brand-gold transition-colors">Pricing</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/safeguarding' ) ); ?>" class="hover:text-brand-gold transition-colors">Safeguarding</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/referrals' ) ); ?>" class="hover:text-brand-gold transition-colors">Referrals</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="hover:text-brand-gold transition-colors">Contact</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/policies' ) ); ?>" class="hover:text-brand-gold transition-colors">Policies</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-white font-bold mb-8 uppercase tracking-widest text-xs">Trust</h3>
                <ul class="space-y-4 text-sm">
                    <li class="flex items-center gap-3 text-slate-400">
                        <i data-lucide="check-circle" class="h-4 w-4 text-brand-teal"></i>
                        Fully Insured Service
                    </li>
                    <li class="flex items-center gap-3 text-slate-400">
                        <i data-lucide="check-circle" class="h-4 w-4 text-brand-teal"></i>
                        Safeguarding-aware
                    </li>
                    <li class="flex items-center gap-3 text-slate-400">
                        <i data-lucide="check-circle" class="h-4 w-4 text-brand-teal"></i>
                        Family Updates Available
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6 text-slate-500 text-xs tracking-[0.2em] font-bold">
            <p>&copy; <?php echo date('Y'); ?> POLARIS WELLBEING VISITS LTD. ALL RIGHTS RESERVED.</p>
            <div class="flex gap-8 uppercase">
                <a href="<?php echo esc_url( home_url( '/policies' ) ); ?>" class="hover:text-brand-gold transition-colors">Data Protection</a>
                <a href="<?php echo esc_url( home_url( '/policies#privacy' ) ); ?>" class="hover:text-brand-gold transition-colors">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

    <footer class="bg-brand-navy text-white pt-24 pb-12">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 border-b border-white/10 pb-16 mb-12">
                <div class="col-span-1 lg:col-span-1">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="h-10 w-10 bg-white/5 rounded-xl flex items-center justify-center border border-white/10">
                            <i data-lucide="compass" class="text-brand-gold h-6 w-6"></i>
                        </div>
                        <span class="text-xl font-display font-bold text-white tracking-widest">POLARIS</span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed max-w-xs">
                        Supporting older adults to remain independent at home while giving families peace of mind across Birmingham.
                    </p>
                </div>
                
                <div>
                    <h4 class="text-brand-gold font-bold uppercase tracking-widest text-xs mb-8">Contact Info</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <i data-lucide="phone" class="h-5 w-5 text-brand-teal shrink-0"></i>
                            <span class="text-sm text-slate-300 font-medium">07592265774</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="mail" class="h-5 w-5 text-brand-teal shrink-0"></i>
                            <span class="text-sm text-slate-300 font-medium break-all">polariswellbeingvisitsltd@gmail.com</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="map-pin" class="h-5 w-5 text-brand-teal shrink-0"></i>
                            <span class="text-sm text-slate-300 font-medium">Birmingham, UK</span>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-brand-gold font-bold uppercase tracking-widest text-xs mb-8">Legal</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li><a href="<?php echo esc_url( home_url( '/safeguarding' ) ); ?>" class="hover:text-white">Safeguarding</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/policies' ) ); ?>" class="hover:text-white">Privacy Policy</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/policies#complaints-policy' ) ); ?>" class="hover:text-white">Complaints</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-brand-gold font-bold uppercase tracking-widest text-xs mb-8">Service Hours</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li class="flex justify-between"><span>Mon — Sun</span> <span class="text-brand-teal">8am - 8pm</span></li>
                        <li class="mt-4 pt-4 border-t border-white/5 text-xs italic">Flexible arrangements available.</li>
                    </ul>
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row justify-between items-center gap-6 text-slate-500 text-[10px] font-bold uppercase tracking-[0.2em]">
                <p>© <?php echo date('Y'); ?> POLARIS WELLBEING VISITS LTD. ALL RIGHTS RESERVED.</p>
                <p>REGISTERED IN ENGLAND & WALES</p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>

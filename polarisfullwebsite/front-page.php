<?php
/**
 * The front page template file
 */
get_header(); ?>

<div class="relative isolate font-sans">
    <!-- Hero Section -->
    <div class="relative min-h-screen flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0 bg-cover bg-center bg-fixed" style="background-image: url('https://images.unsplash.com/photo-1516733725897-1aa73b87c8e8?auto=format&fit=crop&q=80&w=1920&h=1080')">
            <div class="absolute inset-0 bg-gradient-to-r from-brand-navy/40 via-transparent to-white/40"></div>
            <div class="absolute inset-0 bg-black/10"></div>
        </div>

        <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8 w-full">
            <div class="max-w-5xl pt-20 pb-48">
                <h1 class="text-3xl md:text-4xl lg:text-[5.5rem] font-display font-bold text-white tracking-tighter leading-[0.9] drop-shadow-2xl opacity-90">
                    Polaris <br>
                    <span class="text-white">Wellbeing</span> <br>
                    <span class="text-white">Visits</span>
                </h1>
            </div>
        </div>

        <!-- Info Blocks -->
        <div class="absolute bottom-0 left-0 right-0 z-20">
            <div class="grid grid-cols-1 md:grid-cols-12 max-w-7xl mx-auto shadow-2xl">
                <div class="md:col-span-5 bg-brand-navy/90 backdrop-blur-md p-10 lg:p-14 text-white">
                    <span class="text-brand-gold text-xs font-bold uppercase tracking-[0.3em] block mb-4">Welcome!</span>
                    <h3 class="text-2xl lg:text-[2rem] font-display font-bold leading-[1.1] text-white/90">Supporting older adults to remain independent.</h3>
                </div>
                <div class="md:col-span-4 bg-brand-gold p-10 lg:p-14 text-white flex flex-col justify-center">
                    <span class="text-white/80 text-xs font-bold uppercase tracking-[0.2em] block mb-4">Contact</span>
                    <a href="tel:07592265774" class="text-3xl lg:text-5xl font-display font-bold block mb-2 text-white leading-none">07592265774</a>
                    <p class="text-sm font-bold text-white/90">Call for free!</p>
                </div>
                <div class="md:col-span-3 bg-brand-gold/90 backdrop-blur-md p-10 lg:p-14 text-white border-l border-white/10 flex flex-col justify-center">
                    <span class="text-white/80 text-xs font-bold uppercase tracking-[0.2em] block mb-4">Location</span>
                    <h3 class="text-2xl lg:text-3xl font-display font-bold leading-tight text-white">Birmingham,<br>UK</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats -->
    <div class="bg-brand-cream py-12 lg:py-20 text-brand-navy">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <div class="flex items-start gap-5 group">
                    <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-100 group-hover:border-brand-teal transition-colors"><i data-lucide="shield-check" class="h-8 w-8 text-brand-teal"></i></div>
                    <div><h3 class="text-lg font-bold leading-none mb-2">DBS Checked</h3><p class="text-sm text-brand-navy/60 font-medium">Fully vetted staff</p></div>
                </div>
                <!-- Add other stats here... -->
                <div class="flex items-start gap-5 group">
                    <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-100 group-hover:border-brand-teal transition-colors"><i data-lucide="users" class="h-8 w-8 text-brand-teal"></i></div>
                    <div><h3 class="text-lg font-bold leading-none mb-2">Experienced Team</h3><p class="text-sm text-brand-navy/60 font-medium">Years of expertise</p></div>
                </div>
                <div class="flex items-start gap-5 group">
                    <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-100 group-hover:border-brand-teal transition-colors"><i data-lucide="clock" class="h-8 w-8 text-brand-teal"></i></div>
                    <div><h3 class="text-lg font-bold leading-none mb-2">Reliable Visits</h3><p class="text-sm text-brand-navy/60 font-medium">Always on time</p></div>
                </div>
                <div class="flex items-start gap-5 group">
                    <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-100 group-hover:border-brand-teal transition-colors"><i data-lucide="map-pin" class="h-8 w-8 text-brand-teal"></i></div>
                    <div><h3 class="text-lg font-bold leading-none mb-2">Local Care</h3><p class="text-sm text-brand-navy/60 font-medium">Serving Birmingham</p></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->
    <section class="py-24 lg:py-32 bg-white relative">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&q=80&w=1200" alt="Support" class="rounded-[3rem] shadow-2xl">
                    <div class="absolute -bottom-10 -right-10 bg-brand-gold p-12 rounded-[3rem] hidden lg:block -z-0"></div>
                </div>
                <div>
                  <h2 class="text-4xl lg:text-5xl font-display font-bold text-brand-navy leading-tight mb-8">
                    Polaris Wellbeing Visits <br>
                    <span class="text-brand-gold italic">Reliable wellbeing visits you can trust</span>
                  </h2>
                  <div class="space-y-6 text-lg text-brand-navy/70 leading-relaxed mb-8">
                    <p class="font-bold text-brand-navy text-xl">Supporting older adults to remain independent at home while giving families peace of mind.</p>
                    <p>We provide structured companionship and reassurance visits across Birmingham and surrounding areas.</p>
                  </div>
                  <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center gap-2 bg-brand-navy text-white px-8 py-4 rounded-full font-bold hover:bg-brand-teal transition-all">Contact us today</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Summary -->
    <section class="py-24 bg-brand-cream/30">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 text-brand-navy">
            <h2 class="text-4xl font-display font-bold mb-12">WHAT WE DO</h2>
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                   <h3 class="text-xl font-bold text-brand-teal mb-6 uppercase tracking-widest">Support may include:</h3>
                   <ul class="space-y-4 font-medium">
                      <li class="flex items-center gap-2"><i data-lucide="check-circle" class="text-brand-teal h-5 w-5"></i> Companionship visits</li>
                      <li class="flex items-center gap-2"><i data-lucide="check-circle" class="text-brand-teal h-5 w-5"></i> Wellbeing check-ins</li>
                      <li class="flex items-center gap-2"><i data-lucide="check-circle" class="text-brand-teal h-5 w-5"></i> Appointment escort</li>
                      <li class="flex items-center gap-2"><i data-lucide="check-circle" class="text-brand-teal h-5 w-5"></i> Leisure walks</li>
                      <li class="flex items-center gap-2"><i data-lucide="check-circle" class="text-brand-teal h-5 w-5"></i> Shopping support</li>
                   </ul>
                </div>
                <div class="bg-white p-10 rounded-[3rem] shadow-sm">
                   <h3 class="text-xl font-bold text-brand-gold mb-6 uppercase tracking-widest">WHO OUR SERVICE SUPPORTS</h3>
                   <ul class="space-y-4 font-medium">
                      <li class="flex items-center gap-2"><i data-lucide="users" class="text-brand-gold h-5 w-5"></i> Older adults living independently</li>
                      <li class="flex items-center gap-2"><i data-lucide="users" class="text-brand-gold h-5 w-5"></i> Adults with Learning Disabilities</li>
                      <li class="flex items-center gap-2"><i data-lucide="users" class="text-brand-gold h-5 w-5"></i> Families living at a distance</li>
                   </ul>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

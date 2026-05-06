<?php get_header(); ?>

<div class="relative min-h-screen flex items-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center bg-fixed" style="background-image: url('https://images.unsplash.com/photo-1516733725897-1aa73b87c8e8?auto=format&fit=crop&q=80&w=1920')">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-navy/60 via-transparent to-white/40"></div>
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10 w-full pt-20">
        <h1 class="text-5xl lg:text-[7rem] font-display font-bold text-white tracking-tighter leading-[0.9]">
            Polaris <br> Wellbeing <br> Visits
        </h1>
    </div>
    <div class="absolute bottom-0 left-0 right-0 z-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 max-w-7xl mx-auto shadow-2xl">
            <div class="bg-brand-navy text-white p-12">
               <h3 class="text-2xl font-bold">Supporting older adults to remain independent.</h3>
            </div>
            <div class="bg-brand-gold text-white p-12">
               <p class="text-xs font-bold uppercase mb-4">Contact Phone</p>
               <a href="tel:07592265774" class="text-4xl font-bold text-white">07592265774</a>
            </div>
            <div class="bg-brand-gold/90 text-white p-12 hidden lg:block">
               <p class="text-xs font-bold uppercase mb-4">Service Area</p>
               <h3 class="text-2xl font-bold">Birmingham,<br>UK</h3>
            </div>
        </div>
    </div>
</div>

<section class="py-32 bg-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&q=80&w=1200" class="rounded-[3rem] shadow-2xl" />
            <div>
              <h2 class="text-4xl font-display font-bold text-brand-navy mb-8">Polaris Wellbeing Visits <br><span class="text-brand-gold italic">Reliable visits you can trust</span></h2>
              <p class="text-lg text-brand-navy/70 leading-relaxed mb-8">Supporting older adults to remain independent at home while giving families peace of mind. We provide structured companionship across Birmingham.</p>
              <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="bg-brand-navy text-white px-8 py-4 rounded-full font-bold uppercase tracking-widest hover:bg-brand-teal transition-all">Contact us today</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<?php
/**
 * Template Name: Referrals Page
 */
get_header(); ?>
<div class="pt-32 min-h-screen bg-brand-cream/30">
    <section class="py-24 mx-auto max-w-7xl px-6 lg:px-8 bg-white rounded-[3rem] shadow-sm">
        <h1 class="text-5xl font-display font-bold text-brand-navy mb-8">Professional Referrals</h1>
        <div class="grid lg:grid-cols-2 gap-12">
            <div class="bg-brand-navy/5 p-10 rounded-3xl">
                <h3 class="text-xl font-bold mb-6">Referral Benefits</h3>
                <ul class="space-y-4">
                    <li>• Prompt response to all enquiries</li>
                    <li>• Clear communication with referrers</li>
                    <li>• Reliable visits and wellbeing reports</li>
                </ul>
            </div>
            <div class="space-y-6">
                <p>We welcome referrals from: Families, Health Professionals, Social Prescribers, Housing providers, and Charitable organisations.</p>
                <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="inline-block bg-brand-navy text-white px-8 py-3 rounded-full font-bold">Inquire Now</a>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>

<?php
/**
 * Fallback template
 */
get_header(); ?>
<div class="pt-48 pb-24 mx-auto max-w-7xl px-6 lg:px-8">
    <div class="bg-white p-12 rounded-[3rem] shadow-sm text-center">
        <h1 class="text-3xl font-display font-bold text-brand-navy mb-4"><?php the_title(); ?></h1>
        <div class="prose prose-lg mx-auto text-brand-navy/70">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>

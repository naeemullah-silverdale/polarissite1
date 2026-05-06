<?php
/**
 * The main template file
 */
get_header(); ?>

<section class="py-32 bg-white min-h-[60vh]">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1 class="text-5xl font-display font-bold text-brand-navy mb-8"><?php the_title(); ?></h1>
            <div class="prose prose-lg max-w-none text-brand-navy/70">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>

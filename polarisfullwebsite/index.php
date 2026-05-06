<?php
/**
 * The main template file
 */
get_header(); ?>

<div class="pt-32 pb-24 mx-auto max-w-7xl px-6 lg:px-8">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="prose prose-lg mx-auto bg-white p-12 rounded-[3rem] shadow-sm">
            <h1 class="text-4xl font-display font-bold text-brand-navy mb-8"><?php the_title(); ?></h1>
            <div class="text-brand-navy/80 leading-relaxed font-medium">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>

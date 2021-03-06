<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_New_Theme
 */

get_header(); ?>
<div class="two-columns container">
    <div id="primary" class="content-area left-side">
        <main id="main" class="site-main" role="main">

            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('template-parts/content', 'single'); ?>

                <?php the_post_navigation(); ?>

                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; 
        ?>

        </main><!-- #main -->
    </div><!-- #primary -->

    <div class="right-side">
        <?php get_sidebar(); ?>
    </div>

</div><!-- .two-columns -->

<?php get_footer(); ?>
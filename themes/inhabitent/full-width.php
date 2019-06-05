<?php
/**
 * Template Name: Full-width
 */
get_header(); ?>
   <div id="primary" class="content-area">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'page' ); ?>
        <?php endwhile; // End of the loop. ?>
    </div><!-- #primary -->
<?php get_footer(); ?>
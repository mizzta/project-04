<?php
/**
 * Template Name: Two Columns
 */
get_header(); ?>

<div class="two-columns container">
    <div id="primary" class="content-area left-side">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('content', 'page'); ?>
        <?php endwhile;
    ?>
    </div><!-- #primary -->

    <div class="right-side">
        <?php get_sidebar(); ?>
    </div> <!-- .right-side -->
</div> <!-- .two-columns -->

<?php get_footer(); ?>
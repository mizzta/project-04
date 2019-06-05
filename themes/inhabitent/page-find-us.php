<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_New_Theme
 */

get_header(); ?>

<div class="two-columns container">
<div id="primary" class="content-area left-side">
	<main id="main" class="site-main" role="main">

			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('template-parts/content', 'page'); ?>

			<?php endwhile; 
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<div class="right-side">
        <?php get_sidebar(); ?>
    </div> <!-- .right-side -->
</div> <!-- .two-columns -->



<?php get_footer(); ?>
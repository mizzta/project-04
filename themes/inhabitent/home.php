<?php
/**
 * The main template file.
 *
 * @package Inhabitent_New_Theme
 */

get_header(); ?>
<div class="two-columns container">
	<div id="primary" class="content-area left-side">
		<main id="main" class="site-main" role="main">

			<?php if (have_posts()) : ?>

				<?php if (is_home() && !is_front_page()) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php endif; ?>

				<?php /* Start the Loop */ ?>
				<?php while (have_posts()) : the_post(); ?>

					<?php get_template_part('template-parts/content'); ?>
					<div class="journal-readmore"> <a href="<?php the_permalink(); ?>">read more → </a></div>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part('template-parts/content', 'none'); ?>

			<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="right-side">
		<?php get_sidebar(); ?>
	</div>

</div><!-- .two-columns -->
<?php get_footer(); ?>
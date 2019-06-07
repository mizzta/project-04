<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div class="two-columns container">
	<div id="primary" class="content-area left-side">
		<main id="main" class="site-main" role="main">

			<?php if (have_posts()) : ?>

				<header class="page-header">
					<?php
					the_archive_title('<h1 class="page-title">', '</h1>');
					the_archive_description('<div class="taxonomy-description">', '</div>');
					?>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while (have_posts()) : the_post(); ?>

					<?php
					get_template_part('template-parts/content');
					?>
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
</div>
<?php get_footer(); ?>
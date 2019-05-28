<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
		<div class="container">
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<?php
				the_archive_title('<h1 class="page-title">', '</h1>');
				?>
			</header><!-- .page-header -->

			<section class="tax-product">
				<?php /* Start the Loop */ ?>
				<?php while (have_posts()) : the_post(); ?>

					<?php
					get_template_part('template-parts/content');
					?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part('template-parts/content', 'none'); ?>

			<?php endif; ?>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->
		</div>

<?php get_footer(); ?>
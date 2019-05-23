<?php
/**
 * Template Name: Two Columns Layout
 * Template Post Type: post, page
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div class="fullpage">
	<div class="content">
		<!-- -------------------------------------- -->

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while (have_posts()) : the_post(); ?>

					<?php get_template_part('template-parts/content', 'page'); ?>

				<?php endwhile;
			?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .content -->

	<aside>
		<?php get_sidebar(); ?>
	</aside>

</div><!-- .fullpage -->

<!-- -------------------------------------- -->

<?php get_footer(); ?>
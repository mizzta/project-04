<?php
/**
 * The main template file.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area left-side">
		<main id="main" class="site-main" role="main">
			<section class="journal-list">
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

			</section><!-- .journal-list -->

		</main><!-- #main -->

	</div><!-- #primary -->


	<?php get_sidebar(); ?>



<?php get_footer(); ?>
<?php
/**
 * Template Name: Adventure Test
 * Template Post Type: post, page, event
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div class="fullpage">
	<!-- -------------------------------------- -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page', 'single' ); ?>

				<?php the_post_navigation(); ?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

			<?php endwhile; // End of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="sidebar">
	<aside>

		<?php get_sidebar(); ?>

	</aside>
	</div>


</div><!-- .fullpage -->

<!-- -------------------------------------- -->

<?php get_footer(); ?>
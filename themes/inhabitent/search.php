<?php
/**
 * The template for displaying search results pages.
 *
 * @package Inhabitent_New_Theme
 */

get_header(); ?>
<div class="two-columns container">
	<section id="primary" class="content-area left-side">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'search' ); ?>
				<div class="journal-readmore"> <a href="<?php the_permalink(); ?>">read more → </a></div>

				<?php endwhile; ?>

			<?php inhabitent_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->


	<div class="right-side">
		<?php get_sidebar(); ?>
	</div>

</div><!-- .two-columns -->
<?php get_footer(); ?>
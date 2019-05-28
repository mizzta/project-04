<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area container">
	<main id="main" class="site-main" role="main">



		<header class="page-header">

			<?php
			the_archive_title('<h1 class="page-title">', '</h1>');

			?>

		</header><!-- .page-header -->


		<section>
			<?php
			$terms = get_terms(
				array(
					'taxonomy' => 'product-type',
					'hide_empty' => 0,
				)
			);
			?>

			<div class="product-type-nav">
				<?php
				foreach ($terms as $term) :
					?>

					<p>
						<a href="<?php echo get_term_link($term); ?>">
							<?php echo $term->name; ?>
						</a>
					</p>

				<?php
			endforeach;
			?>

			</div> <!-- .products-type-nav -->
		</section>

		<?php if (have_posts()) : ?>
			<section class="product-type">
				<!-- <div class="product-singlur"> -->
				<?php /* Start the Loop */ ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="product-wrapper">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="product-header">
							<?php if (has_post_thumbnail()) : ?>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('large'); ?>
								</a>

							<?php endif; ?>
						</header><!-- .entry-header -->

						<div class="product-info">
							<div class="title"><?php the_title() ?></div>
							<div class="dots"></div>
							<div class="price"><?php echo CFS()->get('product_price'); ?></div>
						</div>
					</article><!-- #post-## -->
					</div>
				<?php endwhile; ?>



			<?php else : ?>

				<?php get_template_part('template-parts/content', 'none'); ?>

			<?php endif; ?>





			<!-- </div> -->
		</section>


	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
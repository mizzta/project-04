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

			<header class="page-header">

				<div class="tax-description">
				<?php
				the_archive_title('<h1 class="page-title">', '</h1>');

				?>
				<?php echo term_description(); ?>
				</div>
			</header><!-- .page-header -->


			<?php if (have_posts()) : ?>
				<section class="tax-product">
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
</div>

<?php get_footer(); ?>
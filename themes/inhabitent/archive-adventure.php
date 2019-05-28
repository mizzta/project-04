<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<div class="container">
<div id="primary" class="content-area container">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<header class="page-header">

				<?php
				the_archive_title('<h1 class="page-title">', '</h1>');
				the_archive_description('<div class="taxonomy-description">', '</div>');
				?>

			</header><!-- .page-header -->

			<h2>shop stuff</h2>

			<section>
				<?php
				$terms = get_terms(
					array(
						'taxonomy' => 'product-type',
						'hide_empty' => 0,
					)
				);
				?>

				<div class="product-terms">
					<?php
					foreach ($terms as $term) :
						?>

						<div class="product-category shop">
							<p>
								<a href="<?php echo get_term_link($term); ?>">
									<?php echo $term->name; ?>
								</a>
							</p>
					</div>

					<?php
				endforeach;
				?>
				</div> <!-- .products-terms -->
			</section>


			<section class="product-type">
				<!-- <div class="product-singlur"> -->
				<?php /* Start the Loop */ ?>
				<?php while (have_posts()) : the_post(); ?>
					<article>
						<a href="<echo esc_url(get_permalink())?>">
							<?php
							get_template_part('template-parts/content', 'products');
							?>
						</a>
					</article>
				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part('template-parts/content', 'none'); ?>

			<?php endif; ?>



			<?php
			$terms = get_terms(
				array(
					'taxonomy' => 'product-type',
					'hide_empty' => 0,
				)
			);
			?>
		
			<!-- </div> -->
		</section>


	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
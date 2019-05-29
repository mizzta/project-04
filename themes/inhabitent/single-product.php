<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area container">
	<main id="main" class="site-main" role="main">

		<?php while (have_posts()) : the_post(); ?>

			<div class="single-product-detail">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
					</header><!-- .entry-header -->
					<div class="image-and-details">
						<div class="product-image">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('large'); ?>
							<?php endif; ?>
						</div>

						<div class="product-details"> <?php the_title('<h1 class="entry-title">', '</h1>'); ?> 


							<div class="entry-content">
							<div class="product-price"><?php echo CFS()->get('product_price'); ?></div>
								<?php the_content(); ?>
								<?php
								wp_link_pages(array(
									'before' => '<div class="page-links">' . esc_html('Pages:'),
									'after'  => '</div>',
								));
								?>
							</div><!-- .entry-content -->
						<div class="social-media">
								<p class="social-btn"><i class="fab fa-facebook-f"></i> like</p>
								<p class="social-btn"><i class="fab fa-twitter"></i> tweet</p>
								<p class="social-btn"><i class="fab fa-pinterest"></i> pin</p>
						</div>

						</div><!-- .product-details -->

					</div>
				<?php endwhile;
			?>

	</main><!-- #main -->
</div><!-- #primary -->

</div>
<?php get_footer(); ?>
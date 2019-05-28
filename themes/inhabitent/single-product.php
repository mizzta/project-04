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


					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('large'); ?>
							<?php endif; ?>

							<?php the_title('<h1 class="entry-title">', '</h1>'); ?>



							<div class="entry-meta">
								<?php inhabitent_posted_on(); ?> / <?php inhabitent_comment_count(); ?> / <?php inhabitent_posted_by(); ?>
							</div><!-- .entry-meta -->
						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_content(); ?>
							<?php
							wp_link_pages(array(
								'before' => '<div class="page-links">' . esc_html('Pages:'),
								'after'  => '</div>',
							));
							?>
						</div><!-- .entry-content -->
						<?php echo CFS()->get( 'product_price' );?>
						

						<div class="product-info">
  <div class="product-title"><span>Title Hello</span></div>
  <div class="product-price">$10</div>
</div>




			<footer class="entry-footer">
				<?php inhabitent_entry_footer(); ?>
			</footer><!-- .entry-footer -->
			</article><!-- #post-## -->

			<?php the_post_navigation(); ?>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;
			?>

		<?php endwhile; 
	?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
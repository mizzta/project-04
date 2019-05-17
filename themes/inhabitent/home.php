<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<!-- <?php the_content(); ?> -->


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


--------------------------------------

	<?php if (have_posts()) : ?>

<!-- The wordpress loop -->
<?php while (have_posts()) : the_post(); ?>

   <!-- Template tags -->
   <h2><?php the_title(); ?></h2>
   <?php the_content(); ?>
   <p><?php the_author(); ?></p>
   <a href="<?php the_permalink(); ?>">Read more</a>


<?php endwhile; ?>

<?php the_posts_navigation(); ?>


<?php else : ?>
<h2>Nothing found!

</h2>
<?php endif; ?>

	
--------------------------------------




<?php get_sidebar(); ?>
<?php get_footer(); ?>

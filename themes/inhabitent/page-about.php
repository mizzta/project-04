<?php


get_header(); ?>
		<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- <div class="container"> -->
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
<!-- </div> -->
		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>

<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		<h2><span>LATEST ADVENTURES</span></h2>
		<hr>

		<section class="latest-adventures page-id-178 container">
			<div class="adventures-page page-id-178 container">
				<div class="adventures-1 page-id-178">
					<a href="getting-back-to-nature-in-a-canoe">
						<h3>getting back to nature in a canoe</h3>
						<p class="read-more">read more</p>
					</a>
				</div>
				<div class="adventures-2 page-id-178">
					<a href="a-night-with-friends-at-the-beach">
						<h3>a night with friends at the beach</h3>
						<p class="read-more">read more</p>
					</a>
				</div>
				<div class="adventures-3 page-id-178">
					<a href="taking-in-the-view-at-big-mountain">
						<h3>talking in the view at big mountain</h3>
						<p class="read-more">read more</p>
					</a>
				</div>
				<div class="adventures-4 page-id-178">
					<a href="star-gazing-at-the-night-sky">
						<h3>star-glazing at the night sky</h3>
						<p class="read-more">read more</p>
					</a>
				</div>
			</div>

		</section>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

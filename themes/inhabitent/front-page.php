<?php
/**
 * The template for displaying front-page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('template-parts/content', 'page'); ?>
		<?php endwhile;
	?>

		<div class="banner-image">
			<img class="white-circle-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-full.svg" />
		</div>

		<div class="shop-stuff container-a">
			<h2>shop stuff</h2>
		</div>

		<div class="inhabitent-journal container">
			<h2>inhabitent journal</h2>
		</div>

		<div class="latest-adventures container">
			<h2>latest adventures</h2>
			<div class="adventures container">
				<div class="adventures-1">
					<a href="getting-back-to-nature-in-a-canoe">
						<h3>getting back to nature in a canoe</h3>
						<button class="read-more">read more</button>
					</a>
				</div>
				<div class="adventures-2">
					<a href="a-night-with-friends-at-the-beach">
						<h3>a night with friends at the beach</h3>
						<button class="read-more">read more</button>
					</a>
				</div>
				<div class="adventures-3">
					<a href="taking-in-the-view-at-big-mountain">
						<h3>talking in the view at big mountain</h3>
						<button class="read-more">read more</button>
					</a>
				</div>
				<div class="adventures-4">
					<a href="star-gazing-at-the-night-sky">
						<h3>star-glazing at the night sky</h3>
						<button class="read-more">read more</button>
					</a>
				</div>
			</div>
			<button class="more-adventure">more adventure</button>
		</div>



	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
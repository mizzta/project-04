<?php
/**
 * The template for displaying front-page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">




		<section class="banner-image">

			<img class="white-circle-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-full.svg" />
		</section>

		<section class="shop-stuff container-a">
			<h2>shop stuff</h2>
		</section>

		<section class="fp-journal">
			<h2>Inhabitent Journal</h2>
			<!-- loop with posts -->
			<div class="journal-section container">		
			<?php
			// this will be the get posts loop
			// use your template tags inside the loop
			// the_post_thumbnail()

			$args = array('post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3);
			$journal_posts = get_posts($args); // returns an array of posts

			?>
			<?php foreach ($journal_posts as $post) : setup_postdata($post); ?>

				<div class="journal-entry">
				<!-- Post thumbnail -->
				<?php if ( has_post_thumbnail()); ?>

				<?php the_post_thumbnail('large', $attr) ;?>
				<p><?php echo get_the_date() ;?> / <?php echo get_comments_number();?> Comments</p>
				<h3><?php the_title() ;?></h3>
				<button class="read-entry">READ ENTRY</button>
				</div>

	
			<?php endforeach;
		wp_reset_postdata(); ?>
</div>
		</section>

		<section class="latest-adventures container">
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
		</section>



	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
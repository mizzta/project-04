<?php
/**
 * The template for displaying front-page.
 *
 * @package Inhabitent_New_Theme
 */

get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">



		<!-- banner image -->
		<section class="banner-image">
			<img class="white-circle-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-full.svg" />
		</section>

		<div class="container">

			<!-- shop stuff -->
			<h2>shop stuff</h2>
			<section class="shop-stuff">

				<?php
				$terms = get_terms(
					array(
						'taxonomy' => 'product-type',
						'hide_empty' => 0,
					)
				);
				?>

				<ul class="product-terms">
					<?php
					foreach ($terms as $term) :
						?>

						<li class="product-term">
							<img src="<?php echo get_template_directory_uri() .
											'/assets/images/product-type-icons/' .
											$term->slug . '.svg'
										?>" />
							<p><?php echo $term->description; ?></p>
							<p>
								<a href="<?php echo get_term_link($term); ?>">
									<?php echo $term->name; ?> Stuff
								</a>
							</p>
						</li>

					<?php
				endforeach;
				?>
				</ul> <!-- .products-terms -->
			</section>




			<!-- inhabitent journal -->
			<h2>Inhabitent Journal</h2>
			<section class="fp-journal">
				<!-- loop with posts -->
				<div class="journal-section">
					<?php
					// this will be the get posts loop
					// use your template tags inside the loop
					// the_post_thumbnail()

					$args = array('post_type' => 'post', 'order' => 'DSC', 'posts_per_page' => 3);
					$journal_posts = get_posts($args); // returns an array of posts

					?>
					<?php foreach ($journal_posts as $post) : setup_postdata($post); ?>

						<div class="journal-entry">
							<!-- Post thumbnail -->
							<?php if (has_post_thumbnail()); ?>

							<?php the_post_thumbnail('large', $attr); ?>
							<p><?php echo get_the_date(); ?> / <?php echo get_comments_number(); ?> Comments</p>
							<h3><?php the_title(); ?></h3>
							<a href="<?php echo get_permalink(); ?>" class="read-entry">READ ENTRY
							</a>
						</div>


					<?php endforeach;
				wp_reset_postdata(); ?>
				</div>
			</section>







			<!-- latest adventures -->
			<h2>latest adventures</h2>
			<section class="latest-adventures container">

				<div class="adventures container">
					<div class="adventures-1">
						<a href="getting-back-to-nature-in-a-canoe">
							<h3>getting back to nature in a canoe</h3>
							<p class="read-more">read more</p>
						</a>
					</div>
					<div class="adventures-2">
						<a href="a-night-with-friends-at-the-beach">
							<h3>a night with friends at the beach</h3>
							<p class="read-more">read more</p>
						</a>
					</div>
					<div class="adventures-3">
						<a href="taking-in-the-view-at-big-mountain">
							<h3>talking in the view at big mountain</h3>
							<p class="read-more">read more</p>
						</a>
					</div>
					<div class="adventures-4">
						<a href="star-gazing-at-the-night-sky">
							<h3>star-glazing at the night sky</h3>
							<p class="read-more">read more</p>
						</a>
					</div>
				</div>
				<div class="adventure-button">
					<a href="adventure" class="more-adventure">more adventure</a>
				</div>
			</section>



	</main><!-- #main -->
</div><!-- #primary -->
</div><!-- .container -->

<?php get_footer(); ?>
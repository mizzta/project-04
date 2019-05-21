<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<!-- -------------------------------------- -->
<div class="fullpage">
   <div class="content">
      <?php if (have_posts()) : ?>

         <!-- The wordpress loop -->
         <?php while (have_posts()) : the_post(); ?>

            <!-- Template tags -->
            <?php the_post_thumbnail('large', array('class' => 'feature-image')); ?>
            <!-- feature image -->
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
   </div><!-- .content -->

   <aside>
      <?php get_sidebar(); ?>
   </aside>
   
</div><!-- .fullpage -->

<!-- -------------------------------------- -->





<?php get_footer(); ?>
<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>


<!-- <?php the_content(); ?> -->

<!-- -------------------------------------- -->
<div class="fullpage">
   <div class="content">
      <?php if (have_posts()) : ?>

         <!-- The wordpress loop -->
         <?php while (have_posts()) : the_post(); ?>
            
            <div class="title-meta-background">
            <!-- Template tags -->
            <?php the_post_thumbnail('large', array('class' => 'feature-image')); ?>
            <!-- feature image -->
            <h2 class="post-title"><?php the_title(); ?></h2>
            <p><?php the_author(); ?></p>
            </div> <!--title-meta-background -->
            
            <p><?php the_excerpt(); ?></p>

            <a href="<?php the_permalink(); ?>">Read more</a><br />


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
<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

get_header(); ?>

<!-- HERO
================================================== -->
<section id="hero" data-type="background" data-speed="5">
	<article>
		<div class="container clearfix">
			<div class="row">

				<div class="col-sm-5">
				</div><!-- col -->

				<div class="col-sm-7 hero-text">
					<h1><?php bloginfo('name'); ?></h1>
					<p class="lead"><?php bloginfo('description'); ?></p>

				</div><!-- col -->

			</div><!-- row -->
		</div><!-- container -->
	</article>
</section><!-- hero -->

<section class="featured-work">
   <div class="site-content">
      <div class="featured">
         <h4>Latest Interviews</h4>
         <ul class="homepage-featured-work">
            <?php query_posts('posts_per_page=3 & post_type=coffin_rock'); ?>
               <?php while ( have_posts() ) : the_post();
                  $image_1 = get_field('image_1');
                  $size = "medium";
               ?>

            <li class="individual-featured-work">
               <figure>
                  <?php echo wp_get_attachment_image($image_1, $size); ?>
               </figure>

               <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </li>

			   <?php endwhile; // end of the loop. ?>
			   <?php wp_reset_query(); // resets the altered query back to the original ?>
         </ul>
      </div>
   </div>
</section>

<section class="featured-work">
   <div class="site-content">
      <div class="featured">
         <h4>Latest Rock Forecasts</h4>
         <ul class="homepage-featured-work">
            <?php query_posts('posts_per_page=3 & post_type=rock_forecasts'); ?>
               <?php while ( have_posts() ) : the_post();
                  $image_1 = get_field('image_1');
                  $size = "medium";
               ?>

            <li class="individual-featured-work">
               <figure>
                  <?php echo wp_get_attachment_image($image_1, $size); ?>
               </figure>

               <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </li>

			   <?php endwhile; // end of the loop. ?>
			   <?php wp_reset_query(); // resets the altered query back to the original ?>
         </ul>
      </div>
   </div>
</section>

<section class="recent-posts">
	<div class="site-content">
		<div class="blog-post">
			<h4>From the Blog</h4>
			<?php query_posts('posts_per_page=1'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="read-more-link">Read More <span>&rsaquo;</span></a>
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</div>

      <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
         <div id="secondary" class="widget-area" role="complementary">
			<h4>Recent Tweet</h4>
			<h2>@vbathory13</h2>
	         <?php dynamic_sidebar( 'sidebar-2' ); ?>
				<a href="https://twitter.com/vbathory13" class="follow-us-link">Follow Me - You know you want to<span>&rsaquo;</span></a>
         </div>
      <?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>

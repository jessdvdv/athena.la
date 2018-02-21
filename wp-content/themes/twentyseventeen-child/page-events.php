<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Athena.LA
 * @since Athena.LA
 */

get_header(); ?>

	<div class="about-hero-img clearfix">
		<div class="contact-title">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); 

				$event_name = get_field('event_name');
				$event_date = get_field('event_date');
				$time = get_field('time');
				$location = get_field('location');
				$details = get_field('details');
				$hosting = get_field('hosting'); ?>

			<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<div class="event-info">
				<h1><?php echo $event_name ?></h1>
				<p><strong>Date: </strong><?php echo $event_date ?></p>
				<p><strong>Time: </strong><?php echo $time ?></p>
				<p><strong>Location: </strong><?php echo $location ?></p>
				<p><strong>Details: </strong><?php echo $details ?></p>
			</div>

			<div class="hosting-aside">
				<p><?php echo $hosting ?></p>
			</div>
		</div>	
	</div>

<?php get_footer(); ?>

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
		<div class="about-title">
			<h1><?php the_title(); ?></h1>
		</div>

		<div class="about-buttons">
			<a class="button" href="<?php echo site_url('#') ?>">Join the Community</a>
		</div>
	</div>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<p><?php the_content(); ?></p>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>

<?php
/**
 * Template Name: kc01 Template
 * Displays the kc01 Template of the Child theme.
 *
 * @package ThemeGrill
 * @subpackage Spacious-Child
 * @since Spacious 1.0
 */

get_header(); ?>

	<div id="content" class="clearfix">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>

<?php
/**
 * Template Name: Custom Full Width
 * Description: Page template without sidebar
 *
 * This template is from article  http://www.smashingmagazine.com/2015/06/19/wordpress-custom-page-templates/
 *
 * When create new page select Page Attribute and pick template 
 * Once we ref to it, this will be used rather than page.php 
 */

get_header(); ?>

	<div id="primary" class="site-content-fullwidth">
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

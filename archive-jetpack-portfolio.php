<?php
/**
 * The template for displaying all projects in Jetpack's Portfolio post types
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header('detailed'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        
		<?php if ( have_posts() ) : ?>

			<div class="grid">
				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', 'portfolio-archive' );

				// End the loop.
				endwhile;

				// Previous/next page navigation.
				the_posts_pagination( array(
					'prev_text'          => __( 'Previous page', 'twentysixteen' ),
					'next_text'          => __( 'Next page', 'twentysixteen' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
				) );

			// If no content, include the "No posts found" template.
			else :
				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</div><!-- .grid -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>

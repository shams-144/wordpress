<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage slide wall
 * @since slide wall 1.0
 */

get_header(); ?>

	<div id="tooplate_main">
    
    <div class="col_w960 col_w960_last">
            <div class="col_w600 float_l tooplate_margin">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
          </div> <!-- .col_w600 float_l tooplate_margin  --->  
		</div><!-- .col_w960 col_w960_last -->
	</div><!-- #tooplate_main -->

<?php
//get_sidebar( 'content' );
//get_sidebar();
get_footer();

<?php
/**
 * The template for displaying all single posts.
 *
 * @package linaya
 */

get_header(); ?>
	<div class="container">
		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php //the_post_navigation(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					/*if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;*/
				?>

			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>

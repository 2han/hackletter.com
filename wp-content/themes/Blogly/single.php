<<<<<<< HEAD
<?php
/**
 * The Template for displaying all single posts.
 *
 * @package themefurnace
 */

get_header(); ?>

<div id="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>



<?php get_sidebar(); ?>
=======
<?php
/**
 * The Template for displaying all single posts.
 *
 * @package themefurnace
 */

get_header(); ?>

<div id="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>



<?php get_sidebar(); ?>
>>>>>>> 0cd45cbd976a218f9bff14fec45f6f4b8b4b021c
<?php get_footer(); ?>
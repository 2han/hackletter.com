<<<<<<< HEAD
<?php

/**
 * Homepage
 *
 * @package Blogly
 */

get_header(); ?>



<div id="main">



<?php if ( have_posts() ) : ?>


<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content', get_post_format() ); ?>
<?php endwhile; ?>



<?php themefurnace_pagination(); ?>



<?php else : ?>

<?php get_template_part( 'no-results', 'index' ); ?>

<?php endif; ?>



=======
<?php

/**
 * Homepage
 *
 * @package Blogly
 */

get_header(); ?>



<div id="main">



<?php if ( have_posts() ) : ?>



<?php /* Start the Loop */ ?>

<?php while ( have_posts() ) : the_post(); ?>



<?php get_template_part( 'content', get_post_format() ); ?>



<?php endwhile; ?>



<?php themefurnace_pagination(); ?>



<?php else : ?>

<?php get_template_part( 'no-results', 'index' ); ?>

<?php endif; ?>



>>>>>>> 0cd45cbd976a218f9bff14fec45f6f4b8b4b021c
<?php get_footer(); ?>
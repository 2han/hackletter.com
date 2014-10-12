<<<<<<< HEAD


<div class="post">
	<a href="<?php the_permalink(); ?>">
		<?php if (has_post_thumbnail()): ?>
			<?php the_post_thumbnail('thumbnail'); ?>
		<?php else: ?>
		<img src="<?php echo get_template_directory_uri(); ?>/img/common/noimg.gif" width="200" height="200" alt="no image">
		<?php endif; ?>
		<div class="postmetainfo">
			<p class="metaTitle"><?php the_title(); ?></p>
			<ul class="postcategories">
				<?php $cats = get_the_category(); foreach( $cats as $cat) { echo '<li>'.$cat->cat_name.'</li>'; } ?>
			</ul>
		</div>
		
	</a>
=======
<?php
/**
 * @package themefurnace
 */

?>
<div class="wp_content">
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb', array('class' => 'postimg')); ?></a>

    <h2 class="posttitle"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

    <div class="postcontent entry-content">

        <?php the_content(); ?>


    </div>

</div>

<div class="postmeta">
    <p>
    </p>

</div>
>>>>>>> 0cd45cbd976a218f9bff14fec45f6f4b8b4b021c
</div>
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
</div>
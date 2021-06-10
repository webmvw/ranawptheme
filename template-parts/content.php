<h2><?php the_title(); ?></h2>
<?php the_post_thumbnail(); ?>
<p><?php the_content(); ?></p>
<div class="comments">
    <?php comment_form(); ?>
</div>
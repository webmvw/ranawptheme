<h2><?php the_title(); ?></h2>
<?php the_post_thumbnail(); ?>
<p><?php the_content(); ?></p>
<div class="comments">
    <?php
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
	?>
</div>


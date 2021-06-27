<div class="breadcumb">
  <?php
  while(have_posts()){
    the_post();
  ?>
    <h4><?php the_title(); ?></h4>
    <ul>
        <li><a href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e('Home', 'rana'); ?></a></li> / 
        <li><?php the_title(); ?></li>
    </ul>
  <?php  
  }
  ?>
</div>
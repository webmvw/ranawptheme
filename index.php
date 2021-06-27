
<?php
   get_header();

?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
               <div class="breadcumb">
                   <h4><?php esc_html_e('Blog', 'rana'); ?></h4>
                   <ul>
                       <li><a href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e('Home', 'rana'); ?></a></li> / 
                       <li><?php esc_html_e('Blog', 'rana'); ?></li>
                   </ul>
               </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-area pb-100 pt-100" id="blog">
   <div class="container">
      <div class="row">

         <?php
         while(have_posts()){
            the_post();
         ?>
         <div class="col-md-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="single-blog">
               <?php the_post_thumbnail(); ?>
               <div class="post-content">
                  <div class="post-title">
                     <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  </div>
                  <div class="pots-meta">
                     <ul>
                        <li><?php the_category(', '); ?></li>
                        <li><a href="#"><?php echo get_the_date(); ?></a></li>
                        <li><a href="#"><?php echo get_the_author(); ?></a></li>
                     </ul>
                  </div>
                  <p><?php the_excerpt(); ?></p>
                  <a href="<?php the_permalink(); ?>" class="box-btn"><?php esc_html_e('read more', 'rana'); ?> <i class="fa fa-angle-double-right"></i></a>
               </div>
            </div>
         </div>
         <?php   
         }
         wp_reset_postdata();
         ?>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="pagination">
            <?php the_posts_pagination(); ?>
          </div>
        </div>
      </div>
   </div>
</section>
<!-- Latest News Area End -->

<?php get_footer(); ?>      
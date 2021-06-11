
<?php 
/*
template name: template-gallery
*/
get_header();
?>


<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <?php get_template_part('template-parts/breadcumb'); ?>
            </div>
        </div>
    </div>
</section>

<section class="gallery-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <?php
           $args = array(
              'post_type' => 'gallery',
              'posts_per_page' => -1
           );
           $query =  new WP_Query($args);
           while($query->have_posts()){
              $query->the_post();
              $small_image = get_field('small_image');
              $large_image = get_field('large_image');
           ?>
           <div class="col-xl-4">
                <div class="single-gallery">
                     <img src="<?php echo $small_image['url']; ?>" alt="<?php the_title(); ?>">
                     <div class="gallery-hover">
                        <div class="gallery-content">
                           <h3><a href="<?php echo $large_image['url']; ?>" class="gallery"><i class="fa fa-plus"></i> <?php the_title(); ?></a></h3>
                        </div>
                    </div>
                </div>
            </div>
           <?php   
           }
           wp_reset_postdata();
           ?>
            
        </div>
    </div>
</section>

<?php get_footer(); ?>
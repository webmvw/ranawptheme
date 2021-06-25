
<?php get_header(); ?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <?php get_template_part('template-parts/breadcumb'); ?>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <?php
                while(have_posts()){
                  the_post();
                ?>
                <h2><?php the_title();?></h2>
                <?php  
                the_post_thumbnail();
                the_content();
                }
                ?>
            </div>
            <div class="col-xl-4">
              <div class="portfolio-sidebar">
                <?php
                $technology_lists = get_field('technology_used');
                if($technology_lists){
                ?>
                <h4><?php esc_html_e('Technology Used', 'rana'); ?></h4>
                <ul>
                  <?php
                  foreach($technology_lists as $technology_list){
                  ?>
                  <li><i class="fa fa-arrow-right"></i> <?php echo esc_html($technology_list); ?></li>
                  <?php } ?>
                </ul>
                <?php 
                }
                ?>
              </div>
              <div class="portfolio-sidebar">  
                <?php
                $project_featureds = get_field('project_featured');
                if($project_featureds){
                ?>
                <h4><?php esc_html_e('Project Featured', 'rana'); ?></h4>
                <ul>
                  <?php
                  foreach($project_featureds as $project_featured){
                  ?>
                  <li><i class="fa fa-arrow-right"></i> <?php echo esc_html($project_featured); ?></li>
                  <?php } ?>
                </ul>
                <?php 
                }
                ?>
              </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
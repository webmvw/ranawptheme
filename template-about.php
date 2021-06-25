
<?php
   /*
   template name: template-about
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

<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="about">
                     <div class="page-title">
                      <?php $config = get_option('rana_options'); ?>
                        <h4><?php echo esc_html($config['about_page_title']); ?></h4>
                     </div>
                     <p><?php echo esc_html($config['about_page_description']); ?></p>
                  </div>
               </div>
               <div class="col-md-5">
                  <?php
                  $about_page_features = $config['about_page_features'];
                  if($about_page_features){
                  foreach ($about_page_features as $about_page_feature) {
                  ?>
                  <div class="single_about">
                     <i class="<?php echo esc_attr($about_page_feature['features_icon']); ?>"></i>
                     <h4><?php echo esc_html($about_page_feature['features_title']); ?></h4>
                     <p><?php echo esc_html($about_page_feature['features_description']); ?></p>
                  </div>
                  <?php } } ?>
               </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->

<?php get_footer(); ?>      
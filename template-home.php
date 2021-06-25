
<?php 
/*
template name: template-home
*/
get_header(); 
?>

      <!-- Slider Area Start -->
      <section class="slider-area" id="home">
         <div class="slider owl-carousel">
            <?php
            $args = array(
               'post_type' => 'sliders',
               'posts_per_page' => 3
            );
            $query =  new WP_Query($args);
            while($query->have_posts()){
               $query->the_post();
               // $sub_heading = get_post_meta(get_the_ID(), 'sub_heading', true);
               $sub_heading = get_field('sub_heading');
               $btn_text = get_field('btn_text');
               $btn_link = get_field('btn_link');
            ?>
            <div class="single-slide" style="background:url('<?php the_post_thumbnail_url(); ?>')">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="slide-table">
                           <div class="slide-tablecell">
                              <h4><?php 
                                 if($sub_heading){
                                    echo esc_html($sub_heading);
                                 }
                              ?></h4>
                              <h2><?php the_title(); ?></h2>
                              <p><?php the_content(); ?></p>
                              <?php
                              if($btn_text){
                              ?>
                                 <a href="<?php echo esc_url($btn_link); ?>" class="box-btn"><?php echo esc_html($btn_text); ?> <i class="fa fa-angle-double-right"></i></a>
                              <?php   
                              }
                              ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php   
            }
            wp_reset_postdata();
            ?>
         </div>
      </section>
      <!-- Slider Area Start -->


      <!-- About Area Start -->
      <section class="about-area pt-100 pb-100" id="about">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <?php $config = get_option('rana_options');?>
                  <h3><span><?php echo esc_html($config['about_sec_subtitle']); ?></span> <?php echo esc_html($config['about_sec_title']); ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo esc_html($config['about_sec_description']); ?></p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="about">
                     <div class="page-title">
                        <h4><?php echo esc_html($config['about_page_title']); ?></h4>
                     </div>
                     <p><?php echo esc_html($config['about_page_description']); ?></p>
                     <a href="<?php echo esc_url($config['about_page_btn']); ?>" class="box-btn"><?php esc_html_e('read more', 'rana'); ?> <i class="fa fa-angle-double-right"></i></a>
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

      <!-- Choose Area End -->
      <section class="choose">
         <div class="container">
            <div class="row pt-100 pb-100">
               <div class="col-md-6">
                  <div class="faq">
                     <div class="page-title">
                        <h4><?php esc_html_e('faq', 'rana') ?></h4>
                     </div>
                     <div class="accordion" id="accordionExample">
                        <?php
                        $faq_lists = $config['about_faq_list'];
                        if($faq_lists){
                        $i = 1;
                        foreach ($faq_lists as $faq_list) {
                        ?>
                        <div class="card">
                           <div class="card-header" id="heading<?php echo esc_attr($i); ?>">
                              <h5 class="mb-0">
                                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo esc_attr($i); ?>" aria-expanded="true" aria-controls="collapse<?php echo esc_attr($i); ?>"><?php echo esc_html($faq_list['faq_title']); ?></button>
                              </h5>
                           </div>
                           <div id="collapse<?php echo esc_attr($i); ?>" class="collapse <?php if($i == 1){echo "show";} ?>" aria-labelledby="heading<?php echo esc_attr($i); ?>" data-parent="#accordionExample">
                              <div class="card-body"><?php echo esc_html($faq_list['faq_description']); ?></div>
                           </div>
                        </div>
                        <?php $i++; } } ?>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="skills">
                     <div class="page-title">
                        <h4><?php esc_html_e('our skills', 'rana'); ?></h4>
                     </div>
                     <?php
                     $skills = $config['skill_lists'];
                     if($skills){
                     foreach ($skills as $skill) {
                     ?>
                     <div class="single-skill">
                        <h4><?php echo esc_html($skill['progress_title']); ?></h4>
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $skill['progress_value']; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo esc_html($skill['progress_value']); ?>%</div>
                     </div>
                     <?php } } ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Choose Area End -->


      <!-- Services Area Start -->
      <section class="services-area pt-100 pb-50" id="services">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span><?php echo esc_html($config['about_sec_subtitle']); ?></span> <?php echo esc_html($config['service_sec_title']); ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo esc_html($config['service_sec_description']); ?></p>
               </div>
            </div>
            <div class="row">
               <?php
               $args = array(
                  'post_type' => 'services',
                  'posts_per_page' => 3
               );
               $query =  new WP_Query($args);
               while($query->have_posts()){
                  $query->the_post();
                  $service_icon = get_field('service_icon');
               ?>
               <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="<?php echo esc_attr($service_icon); ?>"></i>
                     <h4><?php the_title(); ?></h4>
                     <p><?php the_content(); ?></p>
                  </div>
               </div>
               <?php   
               }
               wp_reset_postdata();
               ?>
            </div>
         </div>
      </section>
      <!-- Services Area End -->
      
      <!-- Counter Area End -->
      <?php
      $counters = $config['counter'];
      if($counters){
      ?>
      <section class="counter-area">
         <div class="container-fluid">
            <div class="row">
               <?php
               foreach ($counters as $counter) {
               ?>   
               <div class="col-md-3">
                  <div class="single-counter">
                     <h4><i class="<?php echo esc_attr($counter['counter_icon']); ?>"></i><span class="counter"><?php echo esc_html($counter['counter_title']); ?></span><?php echo esc_html($counter['counter_description']); ?></span></h4>
                  </div>
               </div>
               <?php }?>
            </div>
         </div>
      </section>
      <?php } ?>
      <!-- Counter Area End -->

      <!-- Team Area Start -->
      <section class="team-area pb-100 pt-100" id="team">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span><?php echo esc_html($config['team_sec_subtitle']); ?></span> <?php echo esc_html($config['team_sec_title']); ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo esc_html($config['team_sec_description']); ?></p>
               </div>
            </div>
            <div class="row">
               <?php
               $args = array(
                  'post_type' => 'teams',
                  'posts_per_page' => 3,
                  'orderby' => 'menu_order',
                  'order' => 'ASC'
               );
               $query = new WP_Query($args);
               while($query->have_posts()){
                  $query->the_post();
                  $facebook_link = get_field('team_facebook_link');
                  $twitter_link = get_field('team_twitter_link');
                  $linkedin_link = get_field('team_linkedin_link');
                  $google_link = get_field('team_google_link');
               ?>
               
               <div class="col-md-4">
                  <div class="single-team">
                     <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                     <div class="team-hover">
                        <div class="team-content">
                           <h4><?php the_title(); ?> <span><?php the_content(); ?></span></h4>
                           <ul>
                              <?php if($facebook_link){ ?>
                                 <li><a href="<?php echo esc_url($facebook_link); ?>"><i class="fab fa-facebook"></i></a></li>
                              <?php }?>

                              <?php if($twitter_link){ ?>
                                 <li><a href="<?php echo esc_url($twitter_link); ?>"><i class="fab fa-twitter"></i></a></li>
                              <?php }?>

                              <?php if($linkedin_link){ ?>
                                 <li><a href="<?php echo esc_url($linkedin_link); ?>"><i class="fab fa-linkedin"></i></a></li>
                              <?php }?>

                              <?php if($google_link){ ?>
                                 <li><a href="<?php echo esc_url($google_link); ?>"><i class="fab fa-google-plus"></i></a></li>
                              <?php }?>
                           </ul>
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
      <!-- Team Area End -->
     
      <!-- Testimonials Area Start -->
      <section class="testimonial-area pb-100 pt-100" id="testimonials">
         <div class="container">
            <div class="row section-title white-section">
               <div class="col-md-6 text-right">
                  <h3><span><?php echo esc_html($config['testimonial_sec_subtitle']); ?></span> <?php echo esc_html($config['testimonial_sec_title']); ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo esc_html($config['testimonial_sec_description']); ?></p>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="testimonials owl-carousel">
               <?php
               $args = array(
                  'post_type' => 'testimonials',
                  'posts_per_page' => 4,
                  'orderby' => 'menu_order',
                  'order' => 'ASC'
               );
               $query = new WP_Query($args);
               while($query->have_posts()){
                  $query->the_post();
                  $client_name = get_field('client_name');
                  $client_designation = get_field('client_designation');
                  $client_testimonial = get_field('client_testimonial');
               ?>
                     <div class="single-testimonial">
                        <div class="testi-img">
                           <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                        </div>
                        <p>" <?php echo esc_html($client_testimonial); ?> "</p>
                        <h4><?php echo esc_html($client_name); ?> <span><?php echo esc_html($client_designation); ?></span></h4>
                     </div>
               <?php   
               }
               wp_reset_postdata();
               ?>      
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Testimonilas Area End -->


      <!-- Latest News Area Start -->
      <section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span><?php echo esc_html($config['blog_sec_subtitle']); ?></span> <?php echo esc_html($config['blog_sec_title']); ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo esc_html($config['blog_sec_description']); ?></p>
               </div>
            </div>
            <div class="row">
                <?php
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 3
               );
               $query =  new WP_Query($args);
               while($query->have_posts()){
                  $query->the_post();
               ?>
               <div class="col-md-4">
                  <div class="single-blog">
                     <?php the_post_thumbnail(); ?>
                     <div class="post-content">
                        <div class="post-title">
                           <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        </div>
                        <div class="pots-meta">
                           <ul>
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
         </div>
      </section>
      <!-- Latest News Area End -->
 

<?php
   $cta_switch = $config['cta_switch'];
   if($cta_switch == true){
?>
 <!-- CTA Area Start -->
 <section class="cta">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h4><?php echo esc_html($config['cta_title']); ?> <span><?php echo esc_html($config['cta_description']); ?></span></h4>
         </div>
         <div class="col-md-6 text-center">
            <a href="<?php echo esc_url($config['cta_btn_link']); ?>" class="box-btn"><?php echo esc_html($config['cta_btn_txt']); ?> <i class="fa fa-angle-double-right"></i></a>
         </div>
      </div>
   </div>
</section>
<!-- CTA Area End -->
<?php } ?>



<?php get_footer(); ?>
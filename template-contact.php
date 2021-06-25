
<?php
/*
template name: template-contact
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

<!-- Contact Us Area End -->
<section class="contact-area pb-100 pt-100" id="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-10 mx-auto">
            <div class="row text-center">
               <?php $config = get_option('rana_options');?>
               <?php
               $single_contact = $config['single_contact'];
               if($single_contact){
                foreach ($single_contact as $contact) {
              ?>
              <div class="col-md-4">
                  <div class="contact-address">
                     <i class="<?php echo esc_attr($contact['contact_icon']); ?>"></i>
                     <h4><?php echo esc_html($contact['contact_title']); ?> <span><?php echo esc_html($contact['contact_description']); ?></span></h4>
                  </div>
               </div>
              <?php
                }
               }
               ?>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="contact-form">
                     <?php echo do_shortcode('[contact-form-7 id="136" title="Contact form 1"]'); ?>
                  </div>
               </div>
               <div class="col-md-5">
                  <?php $google_map = $config['contact_google_map']; ?>
                  <div class="google-map">
                     <iframe src="https://maps.google.com/maps?q=<?php echo $google_map['latitude']; ?>,<?php echo $google_map['longitude']; ?>&z=15&output=embed"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Contact Us Area End -->

<?php get_footer(); ?>
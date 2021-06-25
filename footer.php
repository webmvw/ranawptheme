
<!-- Footer Area End -->
<footer class="footer-area pt-50 pb-50">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-6">
            <?php dynamic_sidebar('footer_sidebar1'); ?>
         </div>
         <div class="col-lg-2 col-md-6">
            <?php dynamic_sidebar('footer_sidebar2'); ?>
         </div>
         <div class="col-lg-4 col-md-6">
            <?php dynamic_sidebar('footer_sidebar3'); ?>
         </div>
         <div class="col-lg-3 col-md-6">
            <?php dynamic_sidebar('footer_sidebar4'); ?>
         </div>
      </div>
      <div class="row copyright">
         <?php $config = get_option('rana_options');?>
         <div class="col-md-6">
            <p>&copy; <?php echo $config['footer_text']; ?></p>
         </div>
         <div class="col-md-6 text-right">
            <ul>
               <?php
               $footer_social_links = $config['footer_social'];
               if($footer_social_links){
                  foreach ($footer_social_links as $footer_social_link) {
               ?>
               <li><a href="<?php echo $footer_social_link['footer_social_link']; ?>" title="<?php echo $footer_social_link['footer_social_title']; ?>" target="<?php echo $config['footer_link_target']; ?>"><i class="<?php echo $footer_social_link['footer_social_icon']; ?>"></i></a></li>
               <?php       
                  }
               }
               ?>
            </ul>
         </div>
      </div>
   </div>
</footer>
<!-- Footer Area End -->

<?php wp_footer(); ?>

</body>
</html>
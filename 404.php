<?php get_header(); ?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
               <div class="breadcumb">
               </div>
            </div>
        </div>
    </div>
</section>


<section class="blog-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2><?php esc_html_e('404! not found.', 'rana'); ?></h2>
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda distinctio maxime laborum delectus aliquam ipsum itaque voluptatem non reiciendis aliquid totam facere, tempora iure iusto adipisci doloremque in, amet, alias nostrum. Explicabo reprehenderit.', 'rana'); ?></p>
            </div>
            <div class="col-xl-4">
              <?php dynamic_sidebar('main_sidebar'); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
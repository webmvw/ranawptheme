<?php get_header(); ?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
               <div class="breadcumb">
               	<h4><?php
               	printf("Search For: %s", get_search_query());
               	?></h4>
               </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
            	<div class="row">
			         <?php
			         if(have_posts()){
			         while(have_posts()){
			            the_post();
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
			                        <li><?php the_category(', '); ?></li>
			                        <li><a href="#"><?php echo get_the_date(); ?></a></li>
			                        <li><a href="#"><?php echo get_the_author(); ?></a></li>
			                     </ul>
			                  </div>
			                  <a href="<?php the_permalink(); ?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
			               </div>
			            </div>
			         </div>
			         <?php   
			         }
			         wp_reset_postdata();
			     	}else{
			     		echo "<h3>Search not found</h3>";
			     	}
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
            <div class="col-xl-4">
              <?php dynamic_sidebar('main_sidebar'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
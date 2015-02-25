<div class="row-fluid">
        <div class=" <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
                <!-- Section Title -->
                <div class="section-title ">
                    <h2>
                    <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                        if($top_title != '') echo $top_title; else the_title();?></span>
                    </h2>
                    <p class="sub-title"><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
                </div>
            
            <div class="container-fluid" style="margin:0 auto; padding-bottom:10px;">
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
                    <?php echo the_content();?>
                </div>
            </div>
                <!--End Section Title-->
        </div>
        <!--Content-->
       <div class="container-fluid">
           <div class="col-lg-12">
          <?php

            //get the event custom post types
            $type = 'facility';
            $args = array(
                'post_type'        => $type,
                'post_status'      => 'publish',
                'orderby'          => 'title',
                'posts_per_page'   => -1
            );

            $my_query = null;
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post();

          ?>

            <div id="container" style="margin:0 auto;padding-left:20px;">
            <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), false, '' );?>
            <div class="col-lg-3 col-lg-offset-1 card-container center-block event-fac">
                <div class="card">

                    <div class="front" style="background:url('<?php echo $src[0]; ?>')no-repeat;">
                        <h1 style="font-size:35px;text-align:center; padding-left:0;color:#efefef;font-family: 'Rye';"><?php the_title();?></h1>
                    </div>

                    <div class="back" style="margin:0;">
                        <h3><?php the_title();?></h3>
                        <span style="text-align: left;font-size:10px;">
                           <?php the_content(); ?>
                        </span>
                    </div>
                    
                </div>
            </div>
                
        </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
       </div>


    <div class="container-fluid">
         <div class="col-md-10 col-md-offset-1">
             

           <?php
               $type = 'service';
               $args = array(
                   'post_type' => $type,
                   'post_status' => 'publish',
                   'orderby' => 'title',
                   "title" => 'SERVICE TITLE',
                   "text" => 'SERVICE DETAILS',
                   "image" => 'SERVICE IMAGE',
                   "url" => 'SERVICE BUTTON URL'

               );

               $my_query = null;
               $my_query = new WP_Query($args);
               if ($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post();
           ?> 
        <div class="col-md-4">
               <div class="col-sm-12 col-sm-offset-0 col-md-12 col-md-offset-0 service-text" style="color:#333; margin-top:20px;">
                   <h1 class="service-title" style="text-shadow:1px 1px 2px #333;"><span><?php the_title();?></span></h1>

                   <?php the_content();?>
               </div>
        </div>
               <?php endwhile; endif; wp_reset_postdata(); ?>
         </div>
        <!--End Content-->
    </div>

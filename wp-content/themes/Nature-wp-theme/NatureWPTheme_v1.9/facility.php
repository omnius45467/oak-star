<div class="row-fluid ">
        <div class=" <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
                <!-- Section Title -->
                <div class="section-title wow animated fadeIn">
                    <h2>
                    <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                        if($top_title != '') echo $top_title; else the_title();?></span>
                    </h2>
                    <p><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
                </div>
            <div class="container-fluid" style="margin:0 auto;">
                <div class="col-md-12">
                    <?php echo the_content();?>
                </div>

            </div>
                <!--End Section Title-->
        </div>
        <!--Content-->
       <div class="container-fluid col-md-12">
           
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

            <div id="container" style="margin:0 auto;">
            <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), false, '' );?>
            <div class="col-md-4 card-container center-block event-fac wow animated fadeIn">
                <div class="card">
                    
                    <div class="front" style="background:url('<?php echo $src[0]; ?>') center no-repeat;">
                        <h2 style="color:#efefef;"><?php the_title();?></h2>
                    </div>
                    
                    <div class="back">
                        <h3 style="text-align: center;"><?php the_title();?></h3>
                        <span style="text-align: left;">
                           <?php the_content(); ?>
                        </span>

                    </div>
                </div>
            </div>
        </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <!--End Content-->
    </div>


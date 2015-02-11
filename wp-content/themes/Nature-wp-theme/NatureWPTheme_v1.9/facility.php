<div class="container-fluid">
<div class="row <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">

        <!-- Section Title -->
        <div class="section-title wow animated fadeIn">
            <h2>
            <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                if($top_title != '') echo $top_title; else the_title();?></span>
            </h2>
            <p><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
        </div>
        <!--End Section Title-->
</div>
        <!--Content-->
       <div class="row container">
            <?php

            //get the event custom post types
            $type = 'facility';
            $args = array(
                'post_type'        => $type,
                'post_status'      => 'publish',
                'orderby'          => 'title',
                'posts_per_page'   => -1
            );
            $Count = 0;
            $my_query = null;
            $my_query = new WP_Query($args);

            if ($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post();
                ?>
            <?php if ($Count >= 3): $Count = 0; ?>
                </div>
                <div class="row container">
            <?php endif; ?>
            <div id="container" data-masonry-options='{ "columnWidth": 40, "itemSelector": ".event" }'>
            <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), false, '' );?>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 card-container center-block event-fac wow animated fadeInRight">
                <div class="card">
                    <div class="front" style="background:url('<?php echo $src[0]; ?>') center no-repeat;">
                        <h2><?php the_title();?></h2>
                    </div>
                    <div class="back" style="text-align:center; padding:auto;">
                        <h2><?php the_title();?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
            <?php $Count++; endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <!--End Content-->
    </div>


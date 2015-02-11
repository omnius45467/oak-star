<div class="container-fluid newsletter">

<div class="row <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
    <div class="section-title wow animated fadeIn">
        <h2>
            <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                if($top_title != '') echo $top_title; else the_title();?></span>
        </h2>
        <p><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
    </div>

    <div class="row container-fluid">
    <?php
        $type = 'service';
        $args = array(
            'post_type' => $type,
            'post_status' => 'publish',
            "title" => 'SERVICE TITLE',
            "text" => 'SERVICE DETAILS',
            "image" => 'SERVICE IMAGE',
            "url" => 'SERVICE BUTTON URL'
            
        );
        $my_query = null;
        $my_query = new WP_Query($args);
        $count = 0;

    ?>
    
    <?php if ($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post();
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), false, '' );
    ?>
    <?php if ($count >= 4): $count = 0; ?>
        </div>
        <div class="row container-fluid">
    <?php endif; ?>
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 service-item wow animated fadeIn" data-masonry-options='{ "columnWidth": 20, "itemSelector": ".service-item" }'>
        <div id="container">
            <img class="col-xs-12 col-sm-12 col-md-12 service-image" src="<?php echo $src[0]; ?>" alt="<?php the_title(); ?>" style="margin-bottom:25px;">

            <div class="col-xs-12 col-sm-12 col-md-12 service-text event" style="color:#333; margin-top:20px;">

                <h3 class="service-title" style="text-shadow:1px 1px 2px #333;"><?php the_title(); ?></h3>
                <?php the_content();?>
            </div>
        </div>
    </div>

    <?php $count++; endwhile; endif; wp_reset_postdata(); ?>

        </div>
    </div>
</div>
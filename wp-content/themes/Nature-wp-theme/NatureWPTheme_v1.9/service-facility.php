<div class="container-fluid">

<div class="row <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
    <div class="section-title">
        <h2>
            <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                if($top_title != '') echo $top_title; else the_title();?></span>
        </h2>
        <p><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
    </div>
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
<div class="row">
    <?php endif; ?>
    <div class="col-md-3" data-masonry-options='{ "columnWidth": 20, "itemSelector": ".event" }'>
        <div id="container">
            <img class="col-md-12" src="<?php echo $src[0]; ?>" alt="<?php the_title(); ?>">
            <div class="col-md-12 service-text">
                <h2 class="service-title"><?php the_title(); ?></h2>
                <p><?php the_content();?></p>
            </div>
        </div>
    </div>

    <?php $count++; endwhile; endif; wp_reset_postdata(); ?>

</div>
</div>
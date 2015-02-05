<div class="col-md-12">
    <!-- Section Title -->
    <div class="section-title col-md-12">
        <h2>
            <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                if($top_title != '') echo $top_title; else the_title();?></span>
        </h2>
        <p><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
    </div>
    <!--End Section Title-->
    <?php

    //get the event custom post types
    $type = 'video';
    $args = array(
        'post_type'        => $type,
        'post_status'      => 'publish',
        'order'            => 'ASC',
        'orderby'          => 'title',
        'posts_per_page'   => -1
    );

    $my_query = null;
    $my_query = new WP_Query($args);

    if ($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post();
        ?>

        <!--<?php
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), false, '' );
        ?>-->

        <!-- <div class="row vertical-align">
            <div class="col-md-5"> -->
        <div class="event" style="background: url('<?php echo $src[0]; ?>') no-repeat;">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            <?php echo types_render_field('youtube-videos', array('output' => 'raw')); ?>
            <iframe width="560" height="315" src="<?php echo types_render_field('video', array('output' => 'raw')); ?>" frameborder="0" allowfullscreen></iframe>
            <iframe width="300" height="200" src="https://www.youtube.com/embed/msFmkKXmlmM" frameborder="0" allowfullscreen></iframe>

        </div>
        <!--  </div> -->
        <div class="col-md-6">
            <h3><?php the_content(); ?></h3>
        </div>
        <!-- </div> -->


    <?php endwhile; endif; wp_reset_postdata(); ?>
</div>
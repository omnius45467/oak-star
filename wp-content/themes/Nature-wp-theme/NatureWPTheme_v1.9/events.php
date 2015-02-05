<div class="row <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
    <div class="container-fluid">
        <!-- Section Title -->
        <div class="section-title">
            <h2>
            <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                if($top_title != '') echo $top_title; else the_title();?></span>
            </h2>
            <p><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
        </div>
        <!--End Section Title-->

        <!--Content-->
        <div id="container" class="" data-masonry-options='{ "columnWidth": 40, "itemSelector": ".event" }'>
            <?php

            //get the event custom post types
            $type = 'event';
            $args = array(
                'post_type'        => $type,
                'post_status'      => 'publish',
                'order'            => 'date',
                'date'            => 'date',
                'orderby'          => 'title',
                'posts_per_page'   => -1
            );

            $my_query = null;
            $my_query = new WP_Query($args);

            if ($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post();
            ?>
                
                <?php
                $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), false, '' );
                ?>

                        <div class="wow animated bounceInUp event pull-left" data-adaptive-background="1" data-ab-css-background="1" title="<?php echo date('D. F jS, Y', types_render_field('event-date', array('output' => 'raw'))); ?>
" style=" background: url('<?php echo $src[0]; ?>') no-repeat;">

                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                            <h4><?php echo date('D. F jS, Y', types_render_field('event-date', array('output' => 'raw'))); ?></h4>
                            <?php echo types_render_field('event', array('output' => 'raw')); ?>
                            <button>entry form</button>
                        </div>

            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>

        <!--End Content-->
    </div>
</div>


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

        <section id="container-dm" class="container portfolio">

            <?php foreach (get_oak_star_videos() as $video): ?>
                <div class="event pull-left well wow animated bounceInLeft" title="<?php echo ''.$video['desc'].'';?>" data-masonry-options='{ "columnWidth": 20, "itemSelector": ".event" }'>
                    <?php
                    echo '<hr>';
                    echo '<h3>' .$video['title']. '</h3>';
                    
                    echo '<button>';
                    echo do_shortcode('[video_lightbox_youtube video_id='.$video["link"].' width="100%" height="100%" anchor='.$video["link"].' alt='.$video['desc'].']');
                    echo '</button>';
                    echo '<hr>';
                    ?>
                </div>
            <?php endforeach; ?>

        </section>

        <!--End Content-->
    </div>
</div>


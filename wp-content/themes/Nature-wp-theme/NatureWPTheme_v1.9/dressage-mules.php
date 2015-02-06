<div class="row <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
    <div class="container-fluid">
        <!-- Section Title -->
        <div class="section-title col-md-12">
            <h2>
            <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                if($top_title != '') echo $top_title; else the_title();?></span>
            </h2>
            <p><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
        </div>
        <!--End Section Title-->

        <!--Content-->

        <section id="container-dm" class="container-fluid">

            <?php foreach (get_oak_star_videos() as $video): ?>
                <div class="event-dm pull-left well wow animated bounceInLeft" title="<?php echo ''.$video['desc'].'';?>" data-masonry-options='{ "columnWidth": 20, "itemSelector": ".event-dm" }'>
                    <?php
                    echo '<span class="video-title">';
                    echo '<h4>' .$video['title']. '</h4>';
                    echo '</span>';
                    echo '<span class="video-link">';
                    ?>
<!--                    <iframe title="--><?php //echo ''.$video['desc'].'';?><!--" class="youtube-player" type="text/html" width="640" height="390" src="--><?php //echo ''.$video["link"].'' ?><!--" frameborder="0" allowFullScreen></iframe>-->
                    <?php
                    echo do_shortcode('[video_lightbox_youtube video_id='.$video["link"].' width="100%" height="100%" anchor='.$video["link"].' alt='.$video['desc'].']');
                    echo'</span>';
                    ?>


<!--
                    <iframe width="560" height="315" src="<?php echo types_render_field('youtube-videos', array('output' => 'raw')); ?>" frameborder="0" allowfullscreen></iframe>

          -->
                </div>
            <?php endforeach; ?>

        </section>

        <!--End Content-->
    </div>
</div>


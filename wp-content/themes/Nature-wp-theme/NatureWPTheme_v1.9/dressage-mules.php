<div class="row <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title col-md-12">
            <h2>
                <span>
                    <?php $top_title = get_post_meta($post->ID, 'top_title', true);
                    if($top_title != '') echo $top_title; else the_title();?>
                </span>
            </h2>
            <p><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>

        </div>
        <div class="col-md-12" style="padding:50px;">
            <?php echo the_content();?>
        </div>
        <!--End Section Title-->

        <!--Content-->

                <section id="container-dm" class="container">
                    <div class="row container">

                        <?php foreach (get_oak_star_videos() as $video): ?>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" data-masonry-options='{ "columnWidth": 20, "itemSelector": ".event" }'>
                                <?php
//                                echo '<span class="video-title col-md-12 col-sm-12 col-xs-12">';
//                                echo '<h2 style="color:#777;font-size:2em;margin-top:20px;">' .$video['title']. '</h2>';
//                                echo '</span>';
                                echo '<span class="video-link col-md-6 col-sm-12 col-xs-12">';
                                ?>
                                <iframe class="event-dm youtube-player" width="640" height="480" type="text/html" src="https://www.youtube.com/embed/<?php echo $video['link'] ?>" frameborder="0" allowFullScreen></iframe>
                                <?php
                                echo '</span>';
                                echo '<div class="col-md-6 col-sm-12 col-xs-12">';
                                echo '<h2 class="video-title"style="color:#777;font-size:2em;">' .$video['title']. '</h2>';
                                echo '<h4 style="padding:20px;">';
                                echo $video['desc'];
                                echo '</h4></div>';
                                ?>
                            </div>
                        <?php

//                            echo do_shortcode('[video_lightbox_youtube video_id='.$video["link"].' width="100%" height="100%" anchor="watch me" auto_thumb="1"]');
                            ?>
                        <?php endforeach; wp_reset_postdata(); ?>
                    </div>


                </section>
        <!--End Content-->
    </div>
</div>


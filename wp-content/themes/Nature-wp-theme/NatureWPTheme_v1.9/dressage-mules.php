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

            <?php
            $loopItr = 0;
            ?>
        </div>
        <!--End Section Title-->

        <!--Content-->

                <section id="container-dm" class="container">
                    <div class="row container">
                        <?php if ($loopItr >= 3): $loopItr = 0; ?>

                    </div>
                    <div class="row container">
                        <?php endif; ?>
                        
                        <?php foreach (get_oak_star_videos() as $video): ?>
                            <div class="event well wow animated bounceInLeft col-xs-12 col-sm-12 col-md-12 col-lg-12" title="<?php echo ''.$video['desc'].'';?>" data-masonry-options='{ "columnWidth": 20, "itemSelector": ".event" }'>
                                <?php
                                echo '<span class="video-title">';
                                echo '<h4 style="font-size:2em;">' .$video['title']. '</h4>';
                                echo '</span>';
                                echo '<span class="video-link">';
                                ?>
                                <iframe title="<?php echo ''.$video['desc'].'';?>" class="event youtube-player" type="text/html" src="https://www.youtube.com/embed/<?php echo $video['link'] ?>" frameborder="0" allowFullScreen></iframe>
                                <?php
                                echo '</span>';
                               
                                ?>
                            </div>
                        <?php

//                            echo do_shortcode('[video_lightbox_youtube video_id='.$video["link"].' width="100%" height="100%" anchor="watch me" auto_thumb="1"]');
                            ?>
                        <?php $loopItr++; endforeach; wp_reset_postdata(); ?>
                    </div>


                </section>
        <!--End Content-->
    </div>
</div>


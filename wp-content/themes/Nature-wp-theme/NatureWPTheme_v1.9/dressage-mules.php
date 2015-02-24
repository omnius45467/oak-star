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
        <div class="col-md-8 col-md-offset-2" style="padding:50px;">
            <?php echo the_content();?>
        </div>
        <!--End Section Title-->

        <!--Content-->

                <section id="container-dm" class="container">

                    <br/>

                    <div class="row container">
                        <?php
                        $type = 'bios';
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


                        <div class="col-sm-12 col-md-12">

                            <div class="col-sm-6 col-md-6 col-md-offset-0">
                                <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), false, '' );?>
                                <img class="event service-image" src="<?php echo $src[0] ?>" width="100%" alt=""/>
                            </div>
                            <div class="col-sm-6 col-md-6" style="text-align:left;">
                                <h1 style="text-align:center;font-family:'Rye';font-size:35px;"><span><?php echo the_title();?></span></h1>
                                <hr/>
                            </div>

                            <div class="col-md-6" style="padding-bottom:50px;"> <?php echo the_content();?> </div>
                        </div>

                    <?php endwhile; endif; wp_reset_postdata(); ?>
                    </div>

                    <div class="row container">

                        <?php foreach (get_oak_star_videos() as $video): ?>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" data-masonry-options='{ "columnWidth": 20, "itemSelector": ".event" }'>
                                <?php
                                echo '<span class="video-link col-md-12 col-sm-12 col-xs-12">';
                                echo '<h2 class="video-title"><span>' .$video['title']. '</span></h2>';
                                ?>
                                <iframe class="event-dm youtube-player" width="640" height="480" type="text/html" src="https://www.youtube.com/embed/<?php echo $video['link'] ?>" frameborder="0" allowFullScreen></iframe>
                                <?php
                                echo '</span>';
                                echo '<br>';
                                echo '<div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4">';
                                echo '<h4 style="padding:20px;">';
                                echo $video['desc'];
                                echo '</h4></div>';
                                ?>
                            </div>
                        <?php endforeach; wp_reset_postdata(); ?>
                    </div>
                </section>
        <!--End Content-->
    </div>
</div>

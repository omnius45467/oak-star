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
        <section id="newsletter" class="newsletter">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="col-md-12">
                        <div class="newsletter-box">
                            <?php
                            //get the event custom post types
                            $type = 'dressage-video';
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
                            <div class="col-md-4">
                                    <div class="col-md-12">
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                    <div class="col-md-12">
                                        <?php the_content(); ?>
                                    </div>
                                <div class="col-md-12 responsive" style="background: url('<?php echo $src[0]; ?>') no-repeat;">
                                    <!--link to youtube video goes here-->
                                </div>
                            </div>
                            <?php endwhile; endif; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
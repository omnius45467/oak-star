<div class="row-fluid <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
    <div class="container-fluid">
        <!-- Section Title -->
        <?php
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), false, '' );
        ?>
        <!--End Section Title-->
        <!--Content-->
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:60px;">
                <span id="about-image" class="wow animated slideInLeft">
                    <img class="special event col-xs-12 col-sm-12 col-md-6 col-lg-6" width="80%" src="<?php echo $src[0]; ?>" alt="<? the_title();?>"/>
                </span>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="about-text wow animated fadeInUp" data-adaptive-background="1" data-ab-css-background="1">
                        <span class="section-title">
                            <h2>
                            <span>
                                <?php $top_title = get_post_meta($post->ID, 'top_title', true);
                                if($top_title != '') echo $top_title; else the_title();?>
                            </span>
                            </h2>
                        </span>
                        <p><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
                        <hr/>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!--End Content-->
    </div>
</div>

<div class="container-fluid <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
    <div class="row">
        <div class="section-title col-md-12 wow animated fadeIn">
            <h2><span><?php
                $top_title = get_post_meta($post->ID, 'top_title', true);
                if($top_title != '') echo $top_title; else the_title();
                ?></span></h2>
            <p><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
        </div>

    <!--    //content-->
    <?php
    $args = array(
        'order' => 'ASC',
        'orderby' => 'meta_value_num',
        'post_type' => 'event',
        'post_status' => 'publish',
        'posts_per_page' => -1
    );

    $loop = new WP_Query( $args );
    $loopItr = 0;
    if ($loop->have_posts()): while ($loop->have_posts()): $loop->the_post();
    ?>
        
        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), false, '' );?>

    <?php if ($loopItr >= 4): $loopItr = 0; ?>
        </div>
    <div class="row">
        <?php endif; ?>

        <div class="event-ev col-sm-12 col-md-12 col-sm-offset-2 col-md-offset-0" >
            
            <div class="col-sm-12 col-md-6">
                <img title="<?php echo date('D. F jS, Y', types_render_field('event-date', array('output' => 'raw'))); ?>" class="wow animated bounceInUp event responsive" data-adaptive-background="1" data-ab-css-background="1" src=" <?php echo $src[0]; ?>" />
            </div>
            
            <div class="col-sm-12 col-md-6 wow animated fadeInUp">
                <h2 title="<?php echo date('D. F jS, Y', types_render_field('event-date', array('output' => 'raw'))); ?>"><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <h4><?php echo date('D. F jS, Y', types_render_field('event-date', array('output' => 'raw'))); ?></h4>
                
                <button class="btn"><a href = "<?php echo types_render_field('entry', array('output' => 'raw')); ?>"> Entry Form </a ></button>

            </div>
            
        </div>
        <?php $loopItr++; endwhile; endif; ?>
    </div>
</div>

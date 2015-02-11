<?php
global $nature_mt;
get_header(); ?>

 <?php 
    if ( ( $locations = get_nav_menu_locations() ) && $locations['top-menu'] ) {
        $menu = wp_get_nav_menu_object( $locations['top-menu'] );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        $include = array();
        foreach($menu_items as $item) {
            if($item->object == 'page')
                $include[] = $item->object_id;
        }
        query_posts( array( 'post_type' => 'page', 'post__in' => $include, 'posts_per_page' => count($include), 'orderby' => 'post__in' ) );
    }
    else
    {
        if(isset($nature_mt['pages_topmenu']) && $nature_mt['pages_topmenu'] != '' )
            query_posts(array( 'post_type' => 'page', 'post__in' => $nature_mt['pages_topmenu'], 'posts_per_page' => count($nature_mt['pages_topmenu']), 'orderby' => 'menu_order', 'order' => 'ASC' ) );
        else
            query_posts(array( 'post_type' => 'page', 'posts_per_page' => 4, 'orderby' => 'menu_order', 'order' => 'ASC' ) );
    }

    while(have_posts() ) : the_post(); ?>
    <style>
        .<?php echo $post->post_name;?>
        {
            padding:100px 0 100px 0;
            margin:0 auto;

        }

    </style>
        <main role="main">
            <!-- section -->

            <?php get_template_part($post->post_name); ?>

            <!-- /section -->
        </main>

    <?php endwhile; wp_reset_query(); ?>

<?php 
get_footer(); ?>
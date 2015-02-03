<?php

get_header();

query_posts(array(
    'post_type' => 'page',
    'posts_per_page' => 10,
    'orderby' => 'menu_order',
    'order' => 'ASC'
));
?>
<main role="main">
    <!-- section -->
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php get_template_part($post->post_name); ?>
    <?php endwhile; endif; ?>
    <!-- /section -->
</main>

<?php get_footer(); ?>

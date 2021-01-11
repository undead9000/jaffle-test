<?php 
    $post_id = 17;
    $the_query = new WP_Query('p=17'); 
    while ($the_query->have_posts() ) : $the_query->the_post();  
    $post_featured_img = get_the_post_thumbnail_url($post_id, 'full');
    if(!$post_featured_img) $post_featured_img = '../wp-content/uploads/2021/01/default.jpg'; //default post image
?>

<div class="main-banner" style="background: url('<?php echo $post_featured_img; ?>') no-repeat; background-size: cover;">
    <?php the_content(); ?>
</div>

<?php
    endwhile;
    wp_reset_postdata();
?>
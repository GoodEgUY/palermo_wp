<?php
function filter_products_by_category()
{
   
    $category = isset($_POST['category']) ? sanitize_text_field($_POST['category']) : '';

    
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => -1, 
    );

  
    if (!empty($category)) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'product_category', 
                'field' => 'slug', 
                'terms' => $category, 
            ),
        );
    }

   
    $query = new WP_Query($args);

    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post(); ?>
            <div class="product-item">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </div>
        <?php endwhile;
    else:
        echo '<p>Товарів не знайдено.</p>';
    endif;

    wp_reset_postdata();
    wp_die();
}
add_action('wp_ajax_filter_products', 'filter_products_by_category');
add_action('wp_ajax_nopriv_filter_products', 'filter_products_by_category');
?>
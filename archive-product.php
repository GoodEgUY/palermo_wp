<?php
get_header(); // Подключаем header

$categories = get_terms(array(
    'taxonomy' => 'product_category', // Таксономия категорий
    'hide_empty' => false,
));

if (!empty($categories) && !is_wp_error($categories)) {
    echo '<div class="product-categories">';
    echo '<button class="category-btn active" data-category="">Всі</button>'; // Кнопка для всех товаров
    foreach ($categories as $category) {
        echo '<button class="category-btn" data-category="' . esc_attr($category->slug) . '">';
        echo esc_html($category->name);
        echo '</button>';
    }
    echo '</div>';
}

// Контейнер для товаров
echo '<div id="product-list">';
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="product-item">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        </div>
    <?php endwhile;
else :
    echo '<p>Товарів не знайдено.</p>';
endif;
echo '</div>';

get_footer(); // Подключаем footer
?>

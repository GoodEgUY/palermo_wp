<?php

// Реєстрація таксономії "Категорії товарів"
function register_product_categories_taxonomy()
{
    $labels = array(
        'name' => 'Категорії товарів',
        'singular_name' => 'Категорія товару',
        'search_items' => 'Шукати категорії',
        'all_items' => 'Всі категорії',
        'parent_item' => 'Батьківська категорія',
        'parent_item_colon' => 'Батьківська категорія:',
        'edit_item' => 'Редагувати категорію',
        'update_item' => 'Оновити категорію',
        'add_new_item' => 'Додати нову категорію',
        'new_item_name' => 'Назва нової категорії',
        'menu_name' => 'Категорії товарів',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true, // Для підтримки Gutenberg
        'rewrite' => array('slug' => 'product-category'),
    );

    // Прив'язуємо таксономію до типу запису "Товари"
    register_taxonomy('product_category', array('product'), $args);

    // Додаємо категорії за замовчуванням
    $default_categories = array(
        'Агродрони',
        'Вузли змішування',
        'Генератори',
        'Комплектуючі',
    );

    foreach ($default_categories as $category) {
        if (!term_exists($category, 'product_category')) {
            wp_insert_term($category, 'product_category');
        }
    }
}
add_action('init', 'register_product_categories_taxonomy');
function disable_gutenberg_for_product($is_enabled, $post_type)
{
    if ($post_type === 'product') { // Замените 'product' на ваш slug типа записи
        return false; // Отключить Gutenberg
    }
    return $is_enabled;
}
add_filter('use_block_editor_for_post_type', 'disable_gutenberg_for_product', 10, 2);
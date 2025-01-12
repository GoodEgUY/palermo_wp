
<?php
// Реєстрація кастомного типу запису "Товари"
function register_product_post_type()
{
    $labels = array(
        'name' => 'Товари',
        'singular_name' => 'Товар',
        'menu_name' => 'Товари',
        'add_new' => 'Додати новий',
        'add_new_item' => 'Додати новий товар',
        'edit_item' => 'Редагувати товар',
        'new_item' => 'Новий товар',
        'view_item' => 'Переглянути товар',
        'search_items' => 'Шукати товари',
        'not_found' => 'Товари не знайдено',
        'not_found_in_trash' => 'У кошику товари не знайдено',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-cart', // Іконка у вигляді кошика
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'product'),// URL для записів
        'show_in_rest' => true, // Для підтримки редактора Gutenberg
    );

    register_post_type('product', $args);
}
add_action('init', 'register_product_post_type');
<?php
// Реєстрація кастомного типу запису "Товари"
function register_product_post_type()
{
    $labels = array(
        'name' => 'Блюда',
        'singular_name' => 'Блюдо',
        'menu_name' => 'Блюда',
        'add_new' => 'Додати нове',
        'add_new_item' => 'Додати нове блюдо',
        'edit_item' => 'Редагувати Блюдо',
        'new_item' => 'Нове Блюдо',
        'view_item' => 'Переглянути блюдо',
        'search_items' => 'Шукати блюда',
        'not_found' => 'Блюда не знайдено',
        'not_found_in_trash' => 'У кошику блюда не знайдено',
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

function register_service_post_type()
{
    $labels = array(
        'name' => 'Послуги',
        'singular_name' => 'Послуга',
        'menu_name' => 'Послуги',
        'add_new' => 'Додати нову',
        'add_new_item' => 'Додати нову послугу',
        'edit_item' => 'Редагувати Послугу',
        'new_item' => 'Нова Послуга',
        'view_item' => 'Переглянути послугу',
        'search_items' => 'Шукати послуги',
        'not_found' => 'Послуги не знайдено',
        'not_found_in_trash' => 'У кошику послуг не знайдено',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-cart', // Іконка у вигляді кошика
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'service'),// URL для записів
        'show_in_rest' => true, // Для підтримки редактора Gutenberg
    );

    register_post_type('service', $args);
}
add_action('init', 'register_service_post_type');




function register_addservice_post_type()
{
    $labels = array(
        'name' => 'Додаткова Послуга',
        'singular_name' => 'Додаткова Послуга',
        'menu_name' => 'Додаткові Послуги',
        'add_new' => 'Додати нову',
        'add_new_item' => 'Додати нову послугу',
        'edit_item' => 'Редагувати Послугу',
        'new_item' => 'Нова Послуга',
        'view_item' => 'Переглянути послугу',
        'search_items' => 'Шукати послуги',
        'not_found' => 'Послуги не знайдено',
        'not_found_in_trash' => 'У кошику послуг не знайдено',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-cart', // Іконка у вигляді кошика
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'addservice'),// URL для записів
        'show_in_rest' => true, // Для підтримки редактора Gutenberg
    );

    register_post_type('addservice', $args);
}
add_action('init', 'register_addservice_post_type');



// Реєстрація кастомного типу запису "Блоги"
function register_blog_post_type()
{
    $labels = array(
        'name' => 'Блоги',
        'singular_name' => 'Блог',
        'menu_name' => 'Блоги',
        'add_new' => 'Додати новий',
        'add_new_item' => 'Додати новий блог',
        'edit_item' => 'Редагувати блог',
        'new_item' => 'Новий блог',
        'view_item' => 'Переглянути блог',
        'search_items' => 'Шукати блоги',
        'not_found' => 'Блоги не знайдено',
        'not_found_in_trash' => 'У кошику блоги не знайдено',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-edit-page', // Іконка у вигляді сторінки
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'), // Додано підтримку excerpt і comments
        'has_archive' => true,
        'rewrite' => array('slug' => 'blogs'), // URL для записів
        'show_in_rest' => true, // Для підтримки редактора Gutenberg
    );

    register_post_type('blog', $args);
}
add_action('init', 'register_blog_post_type');
<?php
// Підключення стилів і скриптів
function lunare_enqueue_scripts()
{
    // Підключення CSS
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css', [], '1.0', 'all');
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', ['main-css'], '1.0', 'all');
    wp_enqueue_style('ui-styles-css', get_template_directory_uri() . '/assets/css/ui-styles.css', ['main-css'], '1.0', 'all');

    // Підключення JS
    
}
add_action('wp_enqueue_scripts', 'lunare_enqueue_scripts');
function enqueue_custom_scripts()
{
    // Подключаем jQuery (если не подключен)
    wp_enqueue_script('jquery');

    // Подключаем ваш кастомный JS
    wp_enqueue_script(
        'custom-scripts', // Уникальное имя скрипта
        get_template_directory_uri() . '/assets/js/main.js', // Путь к вашему файлу main.js
        array('jquery'), // Указываем зависимости, чтобы jQuery загружался первым
        '1.0', // Версия
        true // Подключение в футере
    );
     // Подключаем JS
     wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], '1.0', true);

     // Передаём ajaxData в JS
     wp_localize_script('main-js', 'ajaxData', array(
         'ajaxurl' => admin_url('admin-ajax.php'), // URL для AJAX
     ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


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
        'rewrite' => array('slug' => 'products'), // URL для записів
        'show_in_rest' => true, // Для підтримки редактора Gutenberg
    );

    register_post_type('product', $args);
}
add_action('init', 'register_product_post_type');

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
function custom_single_product_template($template)
{
    if (is_singular('product')) {
        // Проверяем, принадлежит ли товар категории "Дроны"
        $terms = get_the_terms(get_the_ID(), 'product_category');
        if ($terms) {
            foreach ($terms as $term) {
                if ($term->slug === 'agrodrones') { // Замените 'drony' на slug вашей категории
                    $template = get_template_directory() . '/single-product-agrodrone.php';
                    break;
                }
            }
        }

        // Если категория не "Дроны", используем другой шаблон
        // Если категория не "Агродрони", используем шаблон по умолчанию
        return get_template_directory() . '/single-product-other.php';
    }
    return $template;
}
add_filter('template_include', 'custom_single_product_template');
function filter_products_by_category() {
    // Получаем переданную категорию
    $category = isset($_POST['category']) ? sanitize_text_field($_POST['category']) : '';

    // Базовый запрос
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => -1, // Показать все товары
    );

    // Если категория передана, добавляем фильтрацию
    if (!empty($category)) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'product_category', // Таксономия
                'field'    => 'slug', // Сравниваем по slug
                'terms'    => $category, // Указанный slug категории
            ),
        );
    }

    // Выполняем запрос
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="product-item">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </div>
        <?php endwhile;
    else :
        echo '<p>Товарів не знайдено.</p>';
    endif;

    wp_reset_postdata();
    wp_die(); // Завершаем выполнение AJAX
}
add_action('wp_ajax_filter_products', 'filter_products_by_category');
add_action('wp_ajax_nopriv_filter_products', 'filter_products_by_category');
?>
<?php
function get_ukrainian_date($date = null) {
    if ($date === null) {
        $date = get_the_date('Y-m-d');
    }

    $months = [
        1 => 'Січня', 'Лютого', 'Березня', 'Квітня', 'Травня', 'Червня',
        'Липня', 'Серпня', 'Вересня', 'Жовтня', 'Листопада', 'Грудня'
    ];

    $date_object = new DateTime($date);
    $day = $date_object->format('d');
    $month = $months[(int)$date_object->format('m')];
    $year = $date_object->format('Y');

    return "$day $month $year";
}

function generate_breadcrumbs_json_ld() {
    $breadcrumbs = [];
    $position = 1;
    
    // Главная страница
    $breadcrumbs[] = [
        "@type" => "ListItem",
        "position" => $position++,
        "name" => "Головна",
        "item" => home_url('/')
    ];

    if (is_category() || is_tax('product_category')) {
        // Категории товаров
        $term = get_queried_object();
        $breadcrumbs[] = [
            "@type" => "ListItem",
            "position" => $position++,
            "name" => esc_html($term->name),
            "item" => get_term_link($term)
        ];
    } elseif (is_singular('product')) {
        // Если страница товара
        $product_cats = get_the_terms(get_the_ID(), 'product_category');
        if ($product_cats && !is_wp_error($product_cats)) {
            $first_cat = array_shift($product_cats);
            $breadcrumbs[] = [
                "@type" => "ListItem",
                "position" => $position++,
                "name" => esc_html($first_cat->name),
                "item" => get_term_link($first_cat)
            ];
        }
        $breadcrumbs[] = [
            "@type" => "ListItem",
            "position" => $position++,
            "name" => get_the_title(),
            "item" => get_permalink()
        ];
    } elseif (is_page()) {
        // Страницы (например, "О нас", "Контакты" и т.д.)
        $breadcrumbs[] = [
            "@type" => "ListItem",
            "position" => $position++,
            "name" => get_the_title(),
            "item" => get_permalink()
        ];
    } elseif (is_home() || is_archive()) {
        // Блог или архив записей
        $breadcrumbs[] = [
            "@type" => "ListItem",
            "position" => $position++,
            "name" => "Блог",
            "item" => get_permalink(get_option('page_for_posts'))
        ];
    } elseif (is_single()) {
        // Отдельная запись блога
        $breadcrumbs[] = [
            "@type" => "ListItem",
            "position" => $position++,
            "name" => "Блог",
            "item" => get_permalink(get_option('page_for_posts'))
        ];
        $breadcrumbs[] = [
            "@type" => "ListItem",
            "position" => $position++,
            "name" => get_the_title(),
            "item" => get_permalink()
        ];
    }

    // Создаем JSON-LD
    $breadcrumb_schema = [
        "@context" => "https://schema.org",
        "@type" => "BreadcrumbList",
        "itemListElement" => $breadcrumbs
    ];

    // Выводим JSON-LD
    echo '<script type="application/ld+json">' . json_encode($breadcrumb_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
}


<?php
function custom_single_product_template($template)
{
    if (is_singular('product')) {
        // Проверяем, принадлежит ли товар определённой категории
        $terms = get_the_terms(get_the_ID(), 'product_category');
        if ($terms) {
            foreach ($terms as $term) {
                if ($term->slug === 'agrodrones') { // Для категории "Агродроны"
                    $template = get_template_directory() . '/single-product-agrodrone.php';
                    break;
                } elseif ($term->slug === 'mixing-nodes') { // Для категории "Узлы смешивания"
                    $template = get_template_directory() . '/single-product-mixing-node.php';
                    break;
                } else { // Для всех остальных категорий
                    $template = get_template_directory() . '/single-product-other.php';
                }
            }
        } else {
            // Если продукт не имеет категории, используем шаблон по умолчанию
            $template = get_template_directory() . '/single-product-other.php';
        }
    }
    return $template;
}

add_filter('template_include', 'custom_single_product_template');

function custom_blog_template($template) {
    if (is_singular('blog')) {
        // Получаем значение пользовательского поля 'blog_template'
        $blog_template = get_field('blog_template');
       
        // Проверяем значение и подгружаем соответствующий шаблон
        if ($blog_template === 'big') {
            $template = get_template_directory() . '/single-post-big.php';
        } elseif ($blog_template === 'small') {
            $template = get_template_directory() . '/single-post-small.php';
        } else {
            // Если поле не задано или значение не соответствует, используем стандартный шаблон
            $template = get_template_directory() . '/single-post-default.php';
        }
    }
    return $template;
}

add_filter('template_include', 'custom_blog_template');

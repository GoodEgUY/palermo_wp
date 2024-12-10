<?php
get_header(); // Подключаем header

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="product-details drone-category">
            <h1><?php the_title(); ?></h1>
            <?php
            // Вывод изображения товара
            if (has_post_thumbnail()) {
                the_post_thumbnail('large');
            }

            // Вывод описания
            echo '<p>' . get_the_content() . '</p>';

            // Вывод кастомных полей ACF
            $name = get_field('name');
            $description = get_field('title');

            if ($name) {
                echo '<p><strong>Ім\'я:</strong> ' . esc_html($name) . '</p>';
            }
            if ($description) {
                echo '<p><strong>Опис:</strong> ' . esc_html($description) . '</p>';
            }
            ?>
            <p>Я уникальный шаблон пиздец</p>
        </div>
    <?php endwhile;
endif;

get_footer(); // Подключаем footer
?>

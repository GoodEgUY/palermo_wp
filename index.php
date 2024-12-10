
<?php
get_header(); // Подключаем header

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="drone-details">
            <?php
            // Вывод стандартного заголовка
            the_title('<h1>', '</h1>');

            // Вывод кастомных полей
            $name = get_field('name');
            $description = get_field('description');

            if ($name) {
                echo '<h2>' . esc_html($name) . '</h2>';
            }

            if ($description) {
                echo '<p>' . esc_html($description) . '</p>';
            }
            ?>
        </div>
    <?php endwhile;
endif;

get_footer(); // Подключаем footer
?>
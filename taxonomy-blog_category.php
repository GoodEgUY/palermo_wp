<?php
get_header(); // Подключаем header
/*
Template Name: Archive Blog 
*/
?>
 <script>
  AOS.init();
</script>
<div class="mainWrapper">
    <section>
        <div class="archiveProductWrapper wrapper">
            <h1 class="categoryHeadTitle">Блог</h1>
            <div class="categoryHeader">
                <div class="categoryHeaderItem"><a href="<?php echo esc_url(home_url('/blogs/')); ?>">Всі блоги</a>
                </div>

                <?php
                // Получаем все термины из таксономии 'product_category'
                $terms = get_terms(array(
                    'taxonomy' => 'blog_category',
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'hide_empty' => true, // Только с товарами
                ));

                // Проверяем, есть ли категории
                if ($terms && !is_wp_error($terms)):
                    // Выводим все категории
                    foreach ($terms as $term):
                        ?>
                        <div
                            class="categoryHeaderItem <?php echo (is_tax('blog_category', $term->slug) ? 'activeCategory' : ''); ?>">
                            <a href="<?php echo get_term_link($term); ?>">
                                <?php echo esc_html($term->name); ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="productCardDashboard">
                <?php
                // Начинаем цикл
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                        // Получаем категории из таксономии 'blog_category'
                        $terms = get_the_terms(get_the_ID(), 'blog_category');
                        if ($terms && !is_wp_error($terms)):
                            // Получаем имя первой категории
                            $category_name = esc_html($terms[0]->name);
                        else:
                            $category_name = 'Без категории'; // Если категории нет
                        endif;
                        ?>
                        <div class="contentProductItem" data-aos="fade-up">
                            <?php
                            $preview_image = get_field('preview_image');
                            if ($preview_image): ?>
                                <img src="<?php echo esc_url($preview_image['sizes']['large']); ?>"
                                    alt="<?php echo esc_attr($preview_image['alt']); ?>" />
                            <?php endif; ?>
                            <div class="contentProductItem-category">
                                <p class="name"><?php echo $category_name; ?></p>
                                <p class="date"><?php echo get_ukrainian_date(get_the_date('Y-m-d')); ?></p>
                            </div>
                            <h3><?php the_title(); ?></h3>
                            <p class="title"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                            <!-- Обрезаем текст на 30 слов -->
                            <div class="productItemButton-wrapper">
                                <a href="<?php the_permalink(); ?>" class="transparentButton">Читати повністю <svg width="16"
                                        height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></a>
                                <svg class="productItemButton-wrapperFigure1" xmlns="http://www.w3.org/2000/svg">
                                    <path class="topRight" />
                                </svg>
                                <svg class="productItemButton-wrapperFigure2" xmlns="http://www.w3.org/2000/svg">
                                    <path class="topRight" />
                                </svg>
                            </div>
                        </div>
                        <?php
                    endwhile;
                else:
                    echo '<p>Немає постів для відображення.</p>';
                endif;
                ?>
            </div>
        </div>
    </section>

</div>
<?php
get_footer(); // Подключаем footer
?>
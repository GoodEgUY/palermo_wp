<?php
get_header(); // Подключаем header
/*
Template Name: Archive Product
*/
?>

<div class="mainWrapper">
    <section>
        <div class="archiveProductWrapper wrapper">
            <h1 class="categoryHeadTitle">Каталог</h1>
            <div class="categoryHeader">
            <div class="categoryHeaderItem activeCategory"><a href="<?php echo esc_url( home_url( '/product/' ) ); ?>">Всі</a></div>
                <?php
                // Получаем все термины из таксономии 'product_category'
                $terms = get_terms(array(
                    'taxonomy' => 'product_category',
                    'orderby' => 'name',
                    'order'   => 'ASC',
                    'hide_empty' => true, // Только с товарами
                ));

                // Проверяем, есть ли категории
                if ($terms && !is_wp_error($terms)) :
                    // Выводим все категории
                    foreach ($terms as $term) :
                        ?>
                        <div class="categoryHeaderItem">
                            <a href="<?php echo get_term_link($term); ?>">
                                <?php echo esc_html($term->name); ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="productCardDashboard">
                <?php
                // Проверяем, есть ли товары, и выводим их
                if (have_posts()) :
                    while (have_posts()):
                        the_post();
                        ?>
                        <div class="productCardItem">
                            <div class="productCardItemImage">
                                <?php
                                $gallery = get_field('gallery'); // Получаем галерею из ACF
                                if ($gallery):
                                    $first_image = $gallery[0];
                                    ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo esc_url($first_image['sizes']['large']); ?>"
                                            alt="<?php echo esc_attr($first_image['alt']); ?>">
                                    </a>
                                <?php endif; ?>
                            </div>
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_content(); ?></p>
                            <h1 class="decorBig"><?php if ($price = get_field('price')): ?>
                                    <?php echo esc_html($price); ?>
                                <?php endif; ?>
                                <small>Грн.</small>
                            </h1>
                            <div class="productItemButton-wrapper">
                                <a href="<?php the_permalink(); ?>" class="greenButton">Детальніше 
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <svg class="productItemButton-wrapperFigure1" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>
                                <svg class="productItemButton-wrapperFigure2" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>
                            </div>
                        </div>
                    <?php endwhile;
                else :
                    echo '<p>Товари не знайдено.</p>';
                endif;
                ?>
            </div>
        </div>
    </section>
</div>

<?php
get_footer(); // Подключаем footer
?>

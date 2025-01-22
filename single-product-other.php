<?php
get_header(); // Подключаем header
/*
Template Name: Single Product Other
*/
?>
<div class="mainWrapper">
    <section>
        <div class="productOtherWrapper wrapper">
            <div class="productGallery">
                <!-- Основная фотография (первая из галереи) -->
                <?php
                $gallery = get_field('gallery'); // Получаем галерею из ACF
                if ($gallery):
                    // Получаем первую фотографию из галереи
                    $first_image = $gallery[0];
                    ?>
                    <a href="<?php echo esc_url($first_image['url']); ?>" class="productGallery-big"
                        data-fancybox="productOther">
                        <img src="<?php echo esc_url($first_image['sizes']['large']); ?>"
                            alt="<?php echo esc_attr($first_image['alt']); ?>">
                    </a>
                <?php endif; ?>

                <!-- Галерея миниатюр -->
                <div class="productGalleryThumbs">
                    <?php if ($gallery): ?>
                        <?php
                        // Пропускаем первую фотографию для миниатюр
                        foreach ($gallery as $index => $image):
                            if ($index == 0)
                                continue; // Пропускаем первую фотографию
                            ?>
                            <a href="<?php echo esc_url($image['url']); ?>" class="productGallery-small"
                                data-fancybox="productOther">
                                <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                            </a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="productOtherInfo">
                <h1><span><?php the_title(); ?></span></h1>
                <?php if ( $title = get_field( 'title' ) ) : ?>
	                <p class="productOtherTitle"><?php echo esc_html( $title ); ?></p>

<?php endif; ?>
                <?php if ($price = get_field('price')): ?>
                    <div class="productMain-price">
                        <h3>                        <?php echo number_format($price, 0, ',', ' ');?>
                        <small>Грн.</small>
                        </h3>
                        <p>Ціна вказана з ПДВ. Вартість за комплект.</p>
                    </div>
                <?php endif; ?>
                <div class="productCardButtonGroup">
                    <button class="greenButton openModalButton" data-target="<?php the_title(); ?>">Замовити<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></button>
                    <a href="" class="transparentButton">Характеристики<svg width="16" height="17" viewBox="0 0 16 17"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></a>
                </div>
                <div class="productOtherPropertiesTable">
                    <h3>Розширені характеристики</h3>
                    <?php if (have_rows('main_properties')): ?>
                        <?php while (have_rows('main_properties')):
                            the_row(); ?>
                            <div class="productOtherPropertiesItem">
                                <?php if ($name = get_sub_field('name')): ?>
                                    <p><?php echo esc_html($name); ?></p>
                                <?php endif; ?>
                                <?php if ( $value = get_sub_field( 'value' ) ) : ?>
                                    <p class="productOtherPropertiesItem-value"><?php echo esc_html( $value ); ?></p>
<?php endif; ?>
                                
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    
                </div>

            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {
            Thumbs: {
                autoStart: true,
            }
        });
    </script>

</div>
<?php if (get_post_type() === 'product') : ?>
    <?php 
    // Получаем галерею
    $gallery = get_field('gallery');
    $first_image_url = ''; // Переменная для первой картинки
    if ($gallery) {
        $first_image = $gallery[0]; // Первая картинка
        $first_image_url = esc_url($first_image['sizes']['large']); // Получаем URL первой картинки
    }

    // Получаем цену
    $price = get_field('price');
    ?>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Product",
          "name": "<?php the_title(); ?>",
          "image": "<?php echo $first_image_url; ?>",
          "description": "<?php echo strip_tags(get_the_excerpt()); ?>",
          "sku": "<?php echo get_post_meta(get_the_ID(), '_sku', true); ?>",
          "offers": {
            "@type": "Offer",
            "url": "<?php the_permalink(); ?>",
            "priceCurrency": "UAH", 
            "price": "<?php echo esc_html($price); ?>",
            "priceValidUntil": "2025-12-31",
            "itemCondition": "https://schema.org/NewCondition",
            "availability": "https://schema.org/InStock",
            "seller": {
              "@type": "Organization",
              "name": "Lunares"
            }
          }
        }
    </script>
<?php endif; ?>

<?php
get_footer(); // Подключаем footer
?>
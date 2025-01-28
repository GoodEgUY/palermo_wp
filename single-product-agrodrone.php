<?php
get_header(); // Подключаем header
/*
Template Name: Single Product Agrodrone
*/
?>
<div class="mainWrapper">
    <section>
        <div class="productMainInfoWrapper wrapper">
            <div class="productGallery">
                <div class="productGallery-big">
                    <!-- Основная фотография (первая из галереи) -->
                    <?php
                    $gallery = get_field('gallery'); // Получаем галерею из ACF
                    if ($gallery):
                        // Получаем первую фотографию из галереи
                        $first_image = $gallery[0];
                        ?>
                        <a href="<?php echo esc_url($first_image['url']); ?>" class="productGallery-bigLink"
                            data-fancybox="productOther">
                            <img src="<?php echo esc_url($first_image['sizes']['large']); ?>"
                                alt="<?php echo esc_attr($first_image['alt']); ?>">
                        </a>
                    <?php endif; ?>
                </div>
                <!-- Галерея миниатюр -->
                <div class="productGalleryThumbs">
                    <?php if ($gallery): ?>
                        <?php
                        // Пропускаем первую фотографию для миниатюр
                        foreach ($gallery as $index => $image):
                            if ($index == 0)
                                continue; // Пропускаем первую фотографию
                            ?>
                            <div class="productGallery-small">
                            <a href="<?php echo esc_url($image['url']); ?>" class="productGallery-smallLink"
                                data-fancybox="productOther">
                                <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                            </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="productMain-info">
                <h1><?php the_title() ?></h1>
                <?php if ($title = get_field('title')): ?>
                    <p class="productMain-title"><?php echo esc_html($title); ?></p>
                <?php endif; ?>
                <div class="productMain-mainProperties">
                    <?php if (have_rows('main_properties')): ?>
                        <?php while (have_rows('main_properties')):
                            the_row(); ?>
                            <div class="mainPropertiesItem">
                                <?php if ($name = get_sub_field('name')): ?>
                                    <p class="propertieName">
                                        <?php echo esc_html($name); ?>
                                    </p>
                                <?php endif; ?>
                                <?php if ($value = get_sub_field('value')): ?>
                                    <p class="propertieValue"><?php echo esc_html($value); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- <div class="mainPropertiesItem">
                  <p class="propertieName">Об’єм бака
                  </p>
                  <p class="propertieValue">400 л</p>
                  </div>
                  <div class="mainPropertiesItem">
                  <p class="propertieName">Потужність
                  </p>
                  <p class="propertieValue">650w
                  </p>
                  </div> -->
                </div>
                <?php if (have_rows('facts')): ?>
                    <div class="productMain-advantages">
                        <?php while (have_rows('facts')):
                            the_row(); ?>
                            <div class="markListItem">
                                <div class="checkMarkIcon"></div>
                                <?php if ($fact = get_sub_field('fact')): ?>
                                    <p><?php echo esc_html($fact); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php if ($price = get_field('price')): ?>
                    <div class="productMain-price">
                        <h3> <?php echo number_format($price, 0, ',', ' '); ?>
                            <small>Грн.</small>
                        </h3>
                        <?php if ( $price_title = get_field( 'price_title' ) ) : ?>
                            <p><?php echo esc_html( $price_title ); ?></p>
<?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="productCardButtonGroup">
                    <button class="greenButton openModalButton" data-target="Замовлення: <?php the_title(); ?>">
                        Замовити
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <a href="" class="transparentButton" scroll="goToFeatures">
                        Характеристики
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php if (have_rows('features_and_benefits')):
        $slides = get_field('features_and_benefits');


        $total = count($slides);

        ?>
        <section>
            <div class="productTechnologyWrapper wrapper">
                <h2 class="mobileChapter"> <span> Технології</span>, що підсилюють кожен етап <span>обробки полів</span>
                </h2>
                <div class="technologyList">
                    <h2> <span> Технології</span>, що підсилюють кожен етап <span>обробки полів</span></h2>
                    <div class="mainSwiperContainer">
                        <div class="swiperDefault swiperProductTechnology">
                            <div class="swiper-wrapper sliderWrapperDefault">
                                <?php
                                $i = 1;
                                while (have_rows('features_and_benefits')):
                                    the_row(); ?>
                                    <div class="swiper-slide swiperSlideDefault">
                                        <div class="swiperSlideContent">
                                            <p class="steps"><span>Технологія <?php echo $i; ?>/<?php echo $total; ?></span></p>
                                            <?php if ($benefit_name = get_sub_field('benefit_name')): ?>
                                                <h3><?php echo esc_html($benefit_name); ?></h3>
                                            <?php endif; ?>
                                            <?php if ($benefit_desc = get_sub_field('benefit_desc')): ?>
                                                <p><?php echo esc_html($benefit_desc); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php $i++; endwhile; ?>
                            </div>
                        </div>
                        <div class="swiperNavigationDefault">
                            <div class="swiperButtonPrev" id="swiperButtonPrev-productTechnology">
                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="swiperButtonNext " id="swiperButtonNext-productTechnology">
                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <svg class="borderRadius1" xmlns="http://www.w3.org/2000/svg">
                                <path class="topRight" />
                            </svg>
                            <svg class="borderRadius2" xmlns="http://www.w3.org/2000/svg">
                                <path class="topRight" />
                            </svg>
                        </div>
                    </div>
                    <script>
                        window.addEventListener('load', function () {
                            function updateTechnologyPhoto(index) {
                                const photos = [
                                    <?php
                                    while (have_rows('features_and_benefits')):
                                        the_row();
                                        $benefit_photo = get_sub_field('benefit_photo');
                                        if ($benefit_photo):
                                            echo "'" . esc_url($benefit_photo['url']) . "',";
                                        endif;
                                    endwhile;
                                    ?>
                                ];

                                const photoWrapper = document.getElementById('technologyPhotoWrapper');
                                if (photoWrapper && photos[index - 1]) {
                                    photoWrapper.innerHTML = `<img src="${photos[index - 1]}" alt="Technology Photo ${index}">`;
                                }
                            }
                            updateTechnologyPhoto(1);
                            const swiperTechnology = new Swiper('.swiperProductTechnology', {
                                loop: false,
                                slidesPerView: 1,

                                autoplay: {
                                    delay: 5000,
                                    disableOnInteraction: false,
                                },
                                navigation: {
                                    nextEl: '#swiperButtonNext-productTechnology',
                                    prevEl: '#swiperButtonPrev-productTechnology',
                                },
                                on: {
                                    slideChange: function () {
                                        const activeIndex = this.activeIndex + 1;
                                        updateTechnologyPhoto(activeIndex);
                                    },
                                },

                            });

                            updateTechnologyPhoto(1);
                        });
                    </script>
                </div>
                <div class="technologyGallery" id="technologyPhotoWrapper"></div>
            </div>
        </section>
    <?php endif; ?>
    <?php if (have_rows('technology_models')): ?>
        <?php while (have_rows('technology_models')):
            the_row(); ?>
            <section>
                <div class="textSeparator agrodroneTextSeparator wrapper">
                    <?php if ($heading = get_sub_field('heading')): ?>
                        <?php echo $heading; ?>
                    <?php endif; ?>
                    <?php if ($p = get_sub_field('p')): ?>
                        <?php echo $p; ?>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php
    $big_image = get_field('big_image');
    if ($big_image): ?>
        <section>
            <div class="productBigPhotoWrapper wrapper">
                <img src="<?php echo esc_url($big_image['url']); ?>" alt="<?php echo esc_attr($big_image['alt']); ?>" />
            </div>
        </section>
    <?php endif; ?>
    <?php if (have_rows('equipment')): ?>
        <section>
            <div class="productKitWrapper wrapper">
            <h2 class="mobileHeading"><span>Дрон-комплект</span><br/><?php the_title(); ?></h2>
                <div class="productKitInfo">
                    <h2><span>Дрон-комплект</span><br /><?php the_title(); ?></h2>
                    <div class="productKit-list">
                        <?php while (have_rows('equipment')):
                            the_row(); ?>
                            <?php if (have_rows('Component')): ?>
                                <?php while (have_rows('Component')):
                                    the_row(); ?>
                                    <div class="markListItem">
                                        <div class="checkMarkIcon"></div>
                                        <?php if ($name = get_sub_field('name')): ?>
                                            <p><?php echo esc_html($name); ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                    <button class="greenButton openModalButton" data-target="Замовлення:(<?php the_title() ?>)">
                        Замовити
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="productKitGallery">
                    <?php
                    // Проверяем, есть ли строки в повторителе "equipment"
                    if (have_rows('equipment')):
                        while (have_rows('equipment')):
                            the_row();

                            // Получаем галерею (массив изображений)
                            $gallery = get_sub_field('gallery');
                            // $gallery будет массивом, каждая ячейка которого — это массив данных изображения ACF
                            // Например: $gallery[0]['url'] — ссылка на полное изображение
                            //           $gallery[0]['sizes']['thumbnail'] — ссылка на миниатюру
                            //           $gallery[0]['alt'] — атрибут alt и т.д.
                            ?>
                            <div class="left-column">
                                <!-- 1-я картинка -->
                                <div class="gallery-item">
                                    <?php if (!empty($gallery[0])): ?>
                                        <img src="<?php echo esc_url($gallery[0]['url']); ?>"
                                            alt="<?php echo esc_attr($gallery[0]['alt']); ?>">
                                    <?php endif; ?>
                                </div>
                                <!-- 2-я картинка -->
                                <div class="gallery-item">
                                    <?php if (!empty($gallery[1])): ?>
                                        <img src="<?php echo esc_url($gallery[1]['url']); ?>"
                                            alt="<?php echo esc_attr($gallery[1]['alt']); ?>">
                                    <?php endif; ?>
                                </div>
                                <!-- 3-я картинка -->
                                <div class="gallery-item">
                                    <?php if (!empty($gallery[2])): ?>
                                        <img src="<?php echo esc_url($gallery[2]['url']); ?>"
                                            alt="<?php echo esc_attr($gallery[2]['alt']); ?>">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- .left-column -->
                            <div class="right-column">
                                <!-- 4-я картинка -->
                                <div class="gallery-item">
                                    <?php if (!empty($gallery[3])): ?>
                                        <img src="<?php echo esc_url($gallery[3]['url']); ?>"
                                            alt="<?php echo esc_attr($gallery[3]['alt']); ?>">
                                    <?php endif; ?>
                                </div>
                                <!-- 5-я картинка -->
                                <div class="gallery-item">
                                    <?php if (!empty($gallery[4])): ?>
                                        <img src="<?php echo esc_url($gallery[4]['url']); ?>"
                                            alt="<?php echo esc_attr($gallery[4]['alt']); ?>">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- .right-column -->
                            <?php
                        endwhile; // конец while ( have_rows('equipment') )
                    endif; // конец if ( have_rows('equipment') )
                    ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php if (have_rows('Specifications')): ?>
        <section id="specifications">
            <div class="productTechAdventagesWrapper wrapper">
                <div class="productTechAdventages-name">
                    <h2>Технічні <span> характеристики</span></h2>
                    <?php while (have_rows('Specifications')):
                        the_row(); ?>
                        <?php
                        $item_photo = get_sub_field('item_photo');
                        if ($item_photo): ?>
                            <img src="<?php echo esc_url($item_photo['url']); ?>" alt="<?php echo esc_attr($item_photo['alt']); ?>"
                                class="productTechAdventages-image" />
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
                <div class="productTechAdventages-properties">
                    <?php while (have_rows('Specifications')):
                        the_row(); ?>
                        <?php if (have_rows('properties')): ?>
                            <?php while (have_rows('properties')):
                                the_row(); ?>
                                <div class="techAdventages-propertiesItem">
                                    <?php if ($name = get_sub_field('name')): ?>
                                        <p class="property"><?php echo esc_html($name); ?></p>
                                    <?php endif; ?>
                                    <?php if (get_sub_field('true')): ?>
                                        <div class="checkMarkIcon"></div>
                                    <?php else: ?>
                                        <?php if ($value = get_sub_field('value')): ?>
                                            <p class="value"><?php echo esc_html($value); ?></p>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php
    // Допустим, вы получили массив постов из поля ACF
    $additional_items = get_field('additional_items'); // или как там у вас называется поле
    
    if ($additional_items):
        // Перебираем каждый выбранный пост (товар)
        ?>
        <section>
            <div class="productEquipmentWrapper wrapper">
                <h2><span>Опційна</span> комплектація</h2>
                <div class="mainSwiperContainer">
                    <div class="productsSwiper swiperProductsDashboard">
                        <div class="swiper-wrapper sliderWrapperDefault">
                            <?php foreach ($additional_items as $post):
                                setup_postdata($post);
                                ?>
                                <div class="swiper-slide swiperSlideDefault">
                                    <div class="swiperSlideProductContent">
                                        <div class="productCardItem">
                                            <div class="productCardItemImage" style="background-color: var(--black);">
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
                                            <h3><?php the_title() ?>
                                            </h3>
                                            <?php if ($title = get_field('title')): ?>
                                                <p><?php echo esc_html($title); ?></p>
                                            <?php endif; ?>
                                            <?php if ($price = get_field('price')): ?>
                                                <h1 class="decorBig"> <?php echo number_format($price, 0, ',', ' '); ?>
                                                    <small>Грн.</small>
                                                </h1>
                                            <?php endif; ?>
                                            <div class="productItemButton-wrapper">
                                                <a href="<?php the_permalink() ?>" class="transparentButton">
                                                    Детальніше
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                                <svg class="productItemButton-wrapperFigure1"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path class="topRight" />
                                                </svg>
                                                <svg class="productItemButton-wrapperFigure2"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path class="topRight" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endforeach;
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <div class="swiperNavigationDefault">
                        <div class="swiperButtonPrev" id="swiperButtonPrev-AdditionalItems">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="swiperButtonNext " id="swiperButtonNext-AdditionalItems">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <script>
                        const swiperAdditionalItems = new Swiper('.swiperProductsDashboard', {
                            loop: false,
                            watchOverflow: true,
                            slidesPerView: 3,
                            spaceBetween: 20,
                            autoplay: {
                                delay: 5000,
                                disableOnInteraction: false,
                            },
                            navigation: {
                                nextEl: '#swiperButtonNext-AdditionalItems',
                                prevEl: '#swiperButtonPrev-AdditionalItems',
                            },
                            on: {
                                slideChange: function () {
                                    const activeIndex = this.activeIndex + 1;
                                    updateTechnologyPhoto(activeIndex);
                                },
                            },
                            breakpoints: {
                                140: {
                                    slidesPerView: 1,
                                    spaceBetween: 10,
                                },
                                540: {
                                    slidesPerView: 2,
                                    spaceBetween: 10,

                                },
                                924: {
                                    slidesPerView: 3,
                                    spaceBetween: 20,
                                },
                            },

                        });

                    </script>
                </div>
            </div>
        </section>
    <?php endif;
    ?>
    <?php if (have_rows('full_characteristics')): ?>

        <section>
            <div class="faqWrapper wrapper">
                <h2><span>Характеристики</span></h2>
                <div class="accordion">
                    <?php while (have_rows('full_characteristics')):
                        the_row(); ?>
                        <div class="accordion__item" data-aos-anchor-placement="bottom-bottom">
                            <div class="accordion__title">
                                <span class="accordion__title-text">
                                    <?php if ($accessory = get_sub_field('accessory')): ?>
                                        <h3><?php echo esc_html($accessory); ?></h3>
                                    <?php endif; ?>
                                </span>
                                <div class="accordion__arrow">
                                    <div class="accordion__arrow-item">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 10H10M19 10H10M10 10V1M10 10V19" stroke="#0E0E0E" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__content">
                                <?php if ($characteristics = get_sub_field('characteristics')): ?>
                                    <?php echo $characteristics; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>

    <?php endif; ?>
    <?php if (have_rows('faq')): ?>
        <section>
            <div class="faqWrapper wrapper">
                <h2><span>Відповіді</span> на поширені питання</h2>
                <div class="accordion">
                    <?php while (have_rows('faq')):
                        the_row(); ?>
                        <div class="accordion__item" data-aos-anchor-placement="bottom-bottom">
                            <div class="accordion__title">
                                <span class="accordion__title-text">
                                    <?php if ($question = get_sub_field('question')): ?>
                                        <h3><?php echo esc_html($question); ?></h3>
                                    <?php endif; ?>
                                </span>
                                <div class="accordion__arrow">
                                    <div class="accordion__arrow-item">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 10H10M19 10H10M10 10V1M10 10V19" stroke="#0E0E0E" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__content">
                                <?php if ($answer = get_sub_field('answer')): ?>
                                    <p><?php echo esc_html($answer); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <section>
        <div class="contactWrapper wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/screen1/screen1contactBackground.jpeg"
                alt="" class="contactBackground">
            <div class="contactBlockText">
                <h2 class="decorBig">Залишились питання?<br /> <span>Ми</span> завжди <span>на зв'язку!</span></h2>
                <p>Заповніть форму, і наші спеціалісти зв'яжуться з вами найближчим часом, щоб відповісти на всі ваші
                    запитання. Або телефонуйте за номером:
                </p>
                <?php if (have_rows('phone_number', 'options')): ?>
                    <?php while (have_rows('phone_number', 'options')):
                        the_row(); ?>
                        <h2 class="decorBig"><a href="tel:<?php if ($number = get_sub_field('number', 'options')): ?>
               <?php echo esc_html($number); ?>
               <?php endif; ?>"><i><?php if ($label = get_sub_field('label', 'options')): ?>
                                        <?php echo esc_html($label); ?>
                                    <?php endif; ?></i></a>
                        </h2>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="contactBlockForm">
                <form action="" class="defaultForm contactForm">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/logo-small.svg" alt="">
                    <p>Заповніть форму нижче, і наші спеціалісти зв'яжуться з вами найближчим часом</p>
                    <div class="inputWrapper">
                        <input type="text" name="name" placeholder="Ім'я " class="defaultInput" id="">
                    </div>
                    <div class="inputWrapper">
                        <input type="tel" name="phone" placeholder="Телефон" class="defaultInput" id="">
                    </div>
                    <button class="greenButton">
                        Безкоштовна консультація
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <input type="hidden" value="Контакт Блок(<?php the_title(); ?>)" name="target">

                </form>
            </div>
        </div>
    </section>
    <script>
        Fancybox.bind("[data-fancybox]", {
            Thumbs: {
                autoStart: true,
            }
        });
    </script>
    <script>
        document.querySelectorAll('[scroll="goToFeatures"]').forEach((link) => {
            link.addEventListener("click", function (e) {
                e.preventDefault();
                document.querySelector("#specifications").scrollIntoView({
                    behavior: "smooth",
                    block: "center",
                });
            });
        });
    </script>
</div>
<?php if (get_post_type() === 'product'): ?>
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
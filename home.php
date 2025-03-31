<?php
get_header(); // Подключаем header
/*
Template Name: Home
*/
?>
<div class="mainWrapper">
    <section>
        <div class="introWrapper wrapper">
            <div class="introApplication">
                <div class="introApplication-text">
                    <h1>Palermo<br /> Кейтерінг Харків</h1>
                    <p>Palermo – це вишуканий кейтеринг у Харкові для ваших подій. Організуємо фуршети, банкети,
                        кава-брейки та виїзні вечері з бездоганним сервісом і смачними стравами.
                    </p>
                    <div class="introButtonGroup">
                        <a href="" class="orange-default-button openModalPhoneButton">Зателефонувати</a>
                        <a href="" class="transparent-default-button" scroll="goToMenu">Переглянути меню</a>
                    </div>
                </div>
                <?php
                $first_image = get_field('first_image');
                if ($first_image): ?>
                    <img class="introApplication-image" src="<?php echo esc_url($first_image['url']); ?>"
                        alt="<?php echo esc_attr($first_image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="introFacts">
                <div class="introFact-item">
                    <h2><span>01</span></h2>
                    <div class="separator"></div>
                    <p>Вишукане меню – страви для будь-якої події та смаку.</p>
                </div>
                <div class="introFact-item">
                    <h2><span>02</span></h2>
                    <div class="separator"></div>
                    <p>Гнучкі рішення – адаптуємось під ваш формат події.</p>
                </div>
                <div class="introFact-item">
                    <h2><span>03</span></h2>
                    <div class="separator"></div>
                    <p>Все під ключ – беремо на себе організацію та сервіс.</p>
                </div>
            </div>
        </div>
    </section>
    <?php
    $services = array(
        'post_type' => 'service', // Убедись, что здесь указан правильный тип поста
        'posts_per_page' => -1, // Вывести все товары
        'order' => 'ASC'
    );
    $serviceQuery = new WP_Query($services);
    if ($serviceQuery->have_posts()):
        ?>
        <section>
            <div class="servicesWrapper wrapper services">
                <h2 class="blockName">Послуги</h2>
                <div class="servicesDashboard">
                    <?php
                    $i = 1; // счётчик модалок
                    while ($serviceQuery->have_posts()):
                        $serviceQuery->the_post();

                        ?>
                        <div class="servicesItem" data-aos="fade-up">
                            <?php
                            $image = get_field('image');
                            if ($image): ?>
                                <div class="serviceItemImage"><img src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" /></div>
                            <?php endif; ?>
                            <div class="servicesItemText">
                                <?php if ($name = get_field('name')): ?>
                                    <h3><?php echo esc_html($name); ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if ($title = get_field('title')): ?>
                                    <p><?php echo esc_html($title); ?>
                                    </p>
                                <?php endif; ?>
                                <?php if (have_rows('service_data')): ?>
                                    <div class="serviceItem-properties">
                                        <?php while (have_rows('service_data')):
                                            the_row(); ?>
                                            <p><?php if ($name = get_sub_field('name')): ?><?php echo esc_html($name); ?><?php endif; ?><?php if ($value = get_sub_field('value')): ?>
                                                    <span><?php echo esc_html($value); ?>
                                                    </span><?php endif; ?>
                                            </p>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                                <button class="transparent-default-button openModalMenu"
                                    data-target="modal-<?php echo $i; ?>">Переглянути меню</button>
                            </div>
                            <?php if (have_rows('service_menu')): ?>
                                <?php while (have_rows('service_menu')):
                                    the_row(); ?>



                                    <div class="modalWrapper" id="modal-<?php echo $i; ?>" style="display: none;">
                                        <div class="modalMenuBody">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cross.svg"
                                                class="modalCross" alt="Закрити">
                                            <h1 class="menuName">МЕНЮ</h1>
                                            <?php if ($title = get_sub_field('title')): ?>
                                                <p class="menuTitle"><?php echo esc_html($title); ?></p>
                                            <?php endif; ?>
                                            <div class="menuListWrapper">
                                                <?php if ($info_menu = get_sub_field('info_menu')): ?>
                                                    <?php echo $info_menu; ?>
                                                <?php endif; ?>
                                            </div>

                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                        <?php
                        $i++;
                    endwhile;
                    wp_reset_postdata(); // Важно сбросить запрос
                
                    ?>
                </div>
                <script>
                    jQuery(document).ready(function () {
                        // Открытие модалки
                        jQuery('.openModalMenu').on('click', function (e) {
                            e.preventDefault();
                            e.stopPropagation();
                            const target = jQuery(this).data('target');
                            jQuery('#' + target).fadeIn(200);
                            jQuery('body').addClass('no-scroll');
                        });

                        // Закрытие модалки
                        jQuery(document).on('click', '.modalCross', function () {
                            jQuery(this).closest('.modalWrapper').fadeOut(200);
                            jQuery('body').removeClass('no-scroll');
                        });

                        // Клик вне тела модалки — закрытие
                        jQuery(document).on('click', '.modalWrapper', function (e) {
                            if (jQuery(e.target).is('.modalWrapper')) {
                                jQuery(this).fadeOut(200);
                                jQuery('body').removeClass('no-scroll');
                            }
                        });
                    });
                </script>
                <a href="" class="orange-default-button openModalPhoneButton">Зателефонувати</a>
            </div>
        </section>
        <?php
    endif;
    ?>
    <?php
    $dishes = array(
        'post_type' => 'product',
        'posts_per_page' => -1,
        'order' => 'ASC'
    );
    $dishesQuery = new WP_Query($dishes);
    ?>
    <?php if ($dishesQuery->have_posts()): ?>
        <section>
            <div class="menuWrapper wrapper menu">
                <h2 class="blockName">Меню</h2>
                <div class="menuSwiper swiper">
                    <div class="swiper-wrapper">
                        <?php while ($dishesQuery->have_posts()):
                            $dishesQuery->the_post(); ?>
                            <div class="swiper-slide">
                                <div class="menuSlideItem">
                                    <?php if ($image = get_field('image')): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    <?php if ($name = get_field('name')): ?>
                                        <div class="menuSlideItem-name">
                                            <h3><?php echo esc_html($name); ?></h3>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="swiperNavigation">
                    <button class="orange-rounded-button" id="menu-swiper-prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ArrowLeft.svg" alt="">
                    </button>
                    <div id="menu-pagination"></div>
                    <button class="transparent-rounded-button" id="menu-swiper-next">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ArrowRight.svg" alt="">
                    </button>
                </div>
            </div>
            <script>
                const swiper = new Swiper('.menuSwiper', {
                    direction: 'horizontal',
                    spaceBetween: 24,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '#menu-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '#menu-swiper-next',
                        prevEl: '#menu-swiper-prev',
                    },
                    breakpoints: {
                        1025: {
                            slidesPerView: 4,
                            grid: {
                                rows: 2,
                                fill: 'row',
                            },
                        },
                        769: {
                            slidesPerView: 3,
                            grid: {
                                rows: 2,
                                fill: 'row',
                            },
                        },
                        481: {
                            slidesPerView: 2,
                            grid: {
                                rows: 2,
                                fill: 'row',
                            },
                        },
                        0: {
                            slidesPerView: 'auto',
                            grid: {
                                rows: 1,
                            },
                            loop: true,
                            centeredSlides: true,
                            spaceBetween: 16,
                        },
                    }
                });
            </script>
        </section>
        <?php
        wp_reset_postdata();
    else: ?>
        <p>Блюд не знайдено.</p>
    <?php endif; ?>
    <?php
    $addServices = array(
        'post_type' => 'addservice', // Убедись, что здесь указан правильный тип поста
        'posts_per_page' => -1, // Вывести все товары
        'order' => 'ASC'
    );
    $addServiceQuery = new WP_Query($addServices);
    if ($addServiceQuery->have_posts()):
        ?>
        <section>
            <div class="servicesWrapper wrapper services">
                <h2 class="blockName">Додаткові послуги</h2>
                <div class="servicesDashboard">
                    <?php
                    while ($addServiceQuery->have_posts()):
                        $addServiceQuery->the_post();

                        ?>
                        <div class="servicesItem">
                            <?php
                            $image = get_field('image');
                            if ($image): ?>
                                <div class="serviceItemImage"><img src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" /></div>
                            <?php endif; ?>
                            <div class="servicesItemText">
                                <?php if ($name = get_field('name')): ?>
                                    <h3><?php echo esc_html($name); ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if ($title = get_field('title')): ?>
                                    <p><?php echo esc_html($title); ?>
                                    </p>
                                <?php endif; ?>
                                <?php if (have_rows('service_data')): ?>
                                    <div class="serviceItem-properties">
                                        <?php while (have_rows('service_data')):
                                            the_row(); ?>
                                            <p><?php if ($name = get_sub_field('name')): ?><?php echo esc_html($name); ?><?php endif; ?><?php if ($value = get_sub_field('value')): ?>
                                                    <span><?php echo esc_html($value); ?>
                                                    </span><?php endif; ?>
                                            </p>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                                <button class="transparent-default-button">Переглянути меню</button>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata(); // Важно сбросить запрос
                
                    ?>
                </div>
                <a href="" class="orange-default-button openModalPhoneButton">Зателефонувати</a>
            </div>
        </section>
        <?php
    endif;
    ?>
    <section>
        <div class="stepsWrapper wrapper steps">
            <h2 class="blockName">Етапи співпраці</h2>
            <div class="stepsTable">
                <div class="stepsItem">
                    <h4 class="number">01</h4>
                    <h3>Підготовка концепції</h3>
                    <p>Обговорення з клієнтом цілей і переваг, складання меню з урахуванням кількості гостей і побажань.
                        Затвердження бюджету на закупівлю та передоплата за продукти.
                    </p>
                </div>
                <div class="stepsItem">
                    <h4 class="number">02</h4>
                    <h3>Закупівля продуктів</h3>
                    <p>Придбання свіжих і якісних продуктів у перевірених постачальників для забезпечення високого рівня
                        обслуговування. Контроль якості за обраними стравам і концепції заходу.
                    </p>
                </div>
                <div class="stepsItem">
                    <h4 class="number">03</h4>
                    <h3>Доставка та сервірування</h3>
                    <p>Стильне оформлення страв відповідно до побажань клієнта (кераміка або паперовий посуд). За
                        потреби залучення додаткових послуг (фотозона, фотограф, аніматори тощо).
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php
    $gallery_photo = get_field('gallery_photo');
    if ($gallery_photo): ?>
        <section>
            <div class="photoGalleryWrapper wrapper">
                <h2 class="blockName">Фото</h2>
                <div class="photoSwiper swiper">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php foreach ($gallery_photo as $image): ?>
                            <div class="swiper-slide">
                                <div class="photoSlide">
                                    <a href="<?php echo esc_url($image['url']); ?>">
                                        <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="swiperNavigation">
                    <button class="orange-rounded-button" id="photo-swiper-prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ArrowLeft.svg" alt="">
                    </button>
                    <div id="photo-pagination"></div>
                    <button class="transparent-rounded-button" id="photo-swiper-next"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ArrowRight.svg" alt="">
                    </button>
                </div>
                <script>
                    const photoSwiper = new Swiper('.photoSwiper', {




                        pagination: {
                            el: '#photo-pagination',
                        },

                        // Navigation arrows
                        navigation: {
                            nextEl: '#photo-swiper-next',
                            prevEl: '#photo-swiper-prev',
                        },
                        // ✅ Брейкпоинты
                        breakpoints: {
                            // >= 1025px
                            1025: {
                                loop: true,
                                slidesPerView: "auto",
                                centeredSlides: true,

                                spaceBetween: 40,
                            },
                            // >= 769px
                            769: {
                                loop: true,
                                slidesPerView: "auto",
                                centeredSlides: true,

                                spaceBetween: 40,
                            },
                            // >= 481px
                            481: {
                                loop: true,
                                slidesPerView: "auto",
                                centeredSlides: true,

                                spaceBetween: 40,
                            },
                            // <= 480px
                            0: {
                                loop: true,
                                slidesPerView: "auto",
                                centeredSlides: true,

                                spaceBetween: 8,
                            },
                        }


                    });


                </script>
            </div>
        </section>
    <?php endif; ?>
    <?php
    $gallery_video = get_field('gallery_video');
    if ($gallery_video): ?>
        <section>
            <div class="videoGalleryWrapper wrapper">
                <h2 class="blockName">Відео</h2>
                <div class="videoSwiper swiper">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php foreach ($gallery_video as $video): ?>
                            <div class="swiper-slide">
                                <div class="videoSlide">
                                    <video class="video-js" controls preload="auto" data-setup="{}">
                                        <source src="<?php echo esc_url($video['url']); ?>"
                                            type="<?php echo esc_attr($video['mime_type']); ?>" />
                                    </video>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
                <div class="swiperNavigation">
                    <button class="orange-rounded-button" id="video-swiper-prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ArrowLeft.svg" alt="">
                    </button>
                    <div id="video-pagination"></div>
                    <button class="transparent-rounded-button" id="video-swiper-next"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ArrowRight.svg" alt="">
                    </button>
                </div>
                <script>
                    const videoSwiper = new Swiper('.videoSwiper', {



                        pagination: {
                            el: '#video-pagination',
                        },

                        // Navigation arrows
                        navigation: {
                            nextEl: '#video-swiper-next',
                            prevEl: '#video-swiper-prev',
                        },
                        breakpoints: {
                            // >= 1025px
                            1025: {
                                loop: true,
                                slidesPerView: "auto",


                                spaceBetween: 40,

                            },
                            // >= 769px
                            769: {
                                loop: true,
                                slidesPerView: "auto",


                                spaceBetween: 40,

                            },
                            // >= 481px
                            481: {
                                loop: true,
                                slidesPerView: "auto",


                                spaceBetween: 8,

                            },
                            // <= 480px
                            0: {
                                loop: true,
                                slidesPerView: "auto",


                                spaceBetween: 8,

                            },
                        }


                    });

                    document.addEventListener('DOMContentLoaded', function () {
                        const videoConfig = {
                            controls: true,
                            autoplay: false,
                            preload: 'auto',
                            muted: false,
                            loop: false,
                            responsive: true,
                            fluid: false, // если true — ширина 100% от контейнера
                            // или '4:3', можно не указывать если фиксирована высота
                            controlBar: {
                                volumePanel: {
                                    inline: false
                                },
                                pictureInPictureToggle: false // если не нужен PiP
                            },
                            playbackRates: [0.5, 1, 1.5, 2], // если хочешь управление скоростью
                        };

                        // Инициализация
                        const players = document.querySelectorAll('video.video-js');
                        players.forEach((el) => {
                            videojs(el, videoConfig);
                        });
                    });


                </script>
            </div>
            <link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />
            <script src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>
        </section>
    <?php endif; ?>
    <section class="contactSection">
        <div class="contactWrapper wrapper">
            <img src="https://placehold.co/1440x700" alt="Консультація з питання про агродрони"
                class="contactBackground">
            <h1>Зворотній зв’язок</h1>
            <p>Зв’яжіться з нами зручним способом — телефонуйте або пишіть у месенджері. Ми завжди на зв’язку та готові
                допомогти!
            </p>
            <button class="orange-default-button openModalPhoneButton">Зателефонувати</button>
        </div>
    </section>
</div>
<?php
get_footer(); // Подключаем footer
?>
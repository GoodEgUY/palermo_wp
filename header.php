<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5LJCNR69');</script>
<!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); // Подключение стилей, скриптов и других хуков ?>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
 -->

</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LJCNR69"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header>
        <?php
        $is_product_section = false;
        if (
            is_post_type_archive('product')
            || is_singular('product')
            || is_tax('product_category')
        ) {
            $is_product_section = true;
        }

        ?>
        <div class="headerWrapper wrapper">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="" class="logo">
            </a>
            <div class="headerNav">
                <div class="headerItem" id="dropdown-menu">

                    <!-- Добавление активного класса на ссылку каталога -->
                    <a href="/product" class="headerItem <?php echo $is_product_section ? 'active' : ''; ?>"
                        id="catalogLink">
                        Каталог
                        <svg width="9" class="dropdown-arrow" height="5" viewBox="0 0 9 5" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 4.5L8.5 0.5H0.5L4.5 4.5Z" />
                        </svg>
                    </a>
                    <?php
                    // Получаем все термины таксономии 'product_category'
                    $terms = get_terms(array(
                        'taxonomy' => 'product_category',
                        'hide_empty' => false, // или true, если нужно скрывать пустые категории
                    ));

                    if (!empty($terms) && !is_wp_error($terms)): ?>
                        <div class="categoryDropdownWrapper">
                            <div class="categoryDropdown">
                                <svg width="24" class="borderRadius1" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 0H0C13.2549 0 24 10.7451 24 24V0Z" />
                                </svg>
                                <svg width="24" class="borderRadius2" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 0H0V24C0 10.7451 10.7451 0 24 0Z" />
                                </svg>
                                <a href="<?php echo get_post_type_archive_link('product'); ?>" class="<?php if (is_post_type_archive('product'))
                                       echo 'active'; ?>">
                                    Всі
                                </a>

                                <?php foreach ($terms as $term):
                                    // Ссылка на архив этой категории
                                    $term_link = get_term_link($term);

                                    // Проверяем, на странице ли мы этой категории
                                    // Если страница – архив таксономии 'product_category' с тем же slug
                                    $active_class = '';
                                    if (is_tax('product_category', $term->slug)) {
                                        $active_class = 'active';
                                    }

                                    global $wp;
                                    $current_path = $wp->request;
                                    ?>

                                    <a href="<?php echo esc_url($term_link); ?>" class="<?php echo esc_attr($active_class); ?>">
                                        <?php echo esc_html($term->name); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <a href="<?php echo home_url('/fertilization/'); ?>" class="headerItem <?php if (is_page('fertilization'))
                       echo 'active'; ?>">Внесення ЗЗР</a>
                <a href="<?php echo home_url('/pilots-academy/'); ?>" class="headerItem <?php if (is_page('pilots-academy'))
                       echo 'active'; ?>">Центр пілотів</a>
                <a href="<?php echo home_url('/blogs/'); ?>" class="headerItem <?php if ($current_path === 'blogs') {
                       echo 'active';
                   } ?>">Блог</a>
            </div>
            <button class="transparentButton openModalPhoneButton" data-target="Хедер">Зв’язатись з нами  <svg width="16"
                    height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg></button>
            <div class="burger" id="burgerButton">
                <svg class="burger-icon" width="32" height="32" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect class="line top" y="4" width="32" height="2" rx="1" fill="white" />
                    <rect class="line middle" x="6" y="15" width="26" height="2" rx="1" fill="white" />
                    <rect class="line bottom" y="26" width="32" height="2" rx="1" fill="white" />
                </svg>
            </div>
        </div>
        <div class="burgerWrapper" id="burgerMenu">
            <div class="burgerNav">
                <div class="headerItem" id="dropdown-menu">

                    <div class="mobileCatalogButton">
                    <a href="/product" class="headerItem <?php echo $is_product_section ? 'active' : ''; ?>" id="catalogLink">
                        Каталог
                       
                    </a>
                    <svg id="mobileCatalogArrow" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10 15.5L18 7.5H2L10 15.5Z" fill=""/>
</svg>

                    </div>
                    <?php if (!empty($terms) && !is_wp_error($terms)): ?>
                        <div class="categoryMobileDropdownWrapper">
                            <div class="categoryDropdown">
                                <svg width="24" class="borderRadius1" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 0H0C13.2549 0 24 10.7451 24 24V0Z" />
                                </svg>
                                <svg width="24" class="borderRadius2" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 0H0V24C0 10.7451 10.7451 0 24 0Z" />
                                </svg>
                                <a href="<?php echo get_post_type_archive_link('product'); ?>" class="<?php if (is_post_type_archive('product'))
                                       echo 'active'; ?>">
                                    Всі
                                </a>

                                <?php foreach ($terms as $term):
                                    // Ссылка на архив этой категории
                                    $term_link = get_term_link($term);

                                    // Проверяем, на странице ли мы этой категории
                                    // Если страница – архив таксономии 'product_category' с тем же slug
                                    $active_class = '';
                                    if (is_tax('product_category', $term->slug)) {
                                        $active_class = 'active';
                                    }

                                    global $wp;
                                    $current_path = $wp->request;
                                    ?>

                                    <a href="<?php echo esc_url($term_link); ?>" class="<?php echo esc_attr($active_class); ?>">
                                        <?php echo esc_html($term->name); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <a href="<?php echo home_url('/fertilization/'); ?>" class="headerItem <?php if (is_page('fertilization'))
                       echo 'active'; ?>">Внесення ЗЗР</a>
                <a href="<?php echo home_url('/pilots-academy/'); ?>" class="headerItem <?php if (is_page('pilots-academy'))
                       echo 'active'; ?>">Центр пілотів</a>
                <a href="<?php echo home_url('/blogs/'); ?>" class="headerItem <?php if ($current_path === 'blogs') {
                       echo 'active';
                   } ?>">Блог</a>
            </div>
            <button class="transparentButton burgerMenuButton openModalPhoneButton" data-target="Бургер Меню Кнопка">Зв’язатись з нами <svg width="16" height="17"
                    viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg></button>
        </div>
        <div class="modalWrapper" id="modalForm">
            <div class="modalBody">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cross.svg" alt=""
                    class="modalCross">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" class="modalLogo" alt="">
                <p>Заповніть форму нижче, і наші спеціалісти зв'яжуться з вами найближчим часом</p>
                <form class="modalForm contactForm">
                    <div class="inputWrapper">
                        <input type="text" name="name" placeholder="Ім'я " class="defaultInput" id="">
                    </div>
                    <div class="inputWrapper">
                        <input type="tel" name="phone" placeholder="Телефон" class="defaultInput" id="">
                    </div> <button type="submit" class="greenButton">Надіслати<svg width="16" height="17"
                            viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></button>
                    <input type="hidden" value="" name="target">

                </form>
            </div>
        </div>
        <div class="modalWrapper" id="modalSuccess">
            <div class="modalBody">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cross.svg" alt=""
                    class="modalCross">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/success.svg"
                    class="modalImageSucess" alt="">
                <h2>Ваша заявка прийнята</h2>
                <p>Ми отримали вашу заявку та вже працюємо над її обробкою. Наш менеджер зв’яжеться з вами найближчим
                    часом, щоб уточнити деталі.</p>
                <button class="greenButton modalCloseButton">Продовжити<svg width="16" height="17" viewBox="0 0 16 17"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg></button>
            </div>
        </div>
        <div class="modalWrapper" id="modalCookie">
            <div class="modalBody">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cross.svg" alt=""
                    class="modalCross">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cookie.svg"
                    class="modalImageCookie" alt="">
                <h2>Використання файлів cookie</h2>
                <p>Ми використовуємо файли cookie для покращення вашого досвіду на нашому сайті. Продовжуючи перегляд,
                    ви погоджуєтесь

                <div class="modalButtonGroup">
                    <button class="greenButton" id="acceptCookie">Прийняти<svg width="16" height="17"
                            viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></button>
                    <a href="<?php echo home_url('/cookie-policy/'); ?>" class="transparentButton">Читати більше<svg
                            width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="modalWrapper" id="modalPhone">
            <div class="modalBody">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cross.svg" alt=""
                    class="modalCross">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cookie.svg"
                    class="modalImageCookie" alt="">
                
                <p>Ми завжди поруч, щоб допомогти! Оберіть зручний номер для зв’язку, і ми з радістю відповімо на всі ваші запитання.

                <div class="modalButtonGroupVertical">
                <?php if ( have_rows( 'phone_number', 'options' ) ) : ?>
            <?php while ( have_rows( 'phone_number', 'options' ) ) :
               the_row(); ?>
            <a href="<?php if ( $number = get_sub_field( 'number', 'options' ) ) : ?>
               <?php echo esc_html( $number ); ?>
               <?php endif; ?>" class="greenButton"><?php if ( $label = get_sub_field( 'label', 'options' ) ) : ?>
            <?php echo esc_html( $label ); ?>
            
            <?php endif; ?><svg width="16"
                    height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg></a>
            
            <?php endwhile; ?>
            <?php endif; ?>
            <?php if ( have_rows( 'phone_number_2', 'options' ) ) : ?>
            <?php while ( have_rows( 'phone_number_2', 'options' ) ) :
               the_row(); ?>
            <a href="<?php if ( $number = get_sub_field( 'number', 'options' ) ) : ?>
               <?php echo esc_html( $number ); ?>
               <?php endif; ?>" class="greenButton"><?php if ( $label = get_sub_field( 'label', 'options' ) ) : ?>
            <?php echo esc_html( $label ); ?>
            
            <?php endif; ?><svg width="16"
                    height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg></a>
            
            <?php endwhile; ?>
            <?php endif; ?>
                </div>
            </div>
        </div>
        <script>
            // Функция для установки cookie
            function setCookie(name, value, days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                var expires = "expires=" + date.toUTCString();
                document.cookie = name + "=" + value + ";" + expires + ";path=/";
            }

            // Функция для получения cookie
            function getCookie(name) {
                var decodedCookie = decodeURIComponent(document.cookie);
                var cookieArray = decodedCookie.split(';');
                for (var i = 0; i < cookieArray.length; i++) {
                    var c = cookieArray[i].trim();
                    if (c.indexOf(name + "=") === 0) {
                        return c.substring((name.length + 1), c.length);
                    }
                }
                return "";
            }

            $(document).ready(function () {
                var $modalCookie = $("#modalCookie");
                var $acceptCookieBtn = $("#acceptCookie");
                var $closeModal = $("#closeModal");
                <?php if (is_page('cookie-policy')) { ?>

                <?php } else { ?>
                    // Проверяем, был ли установлен cookie "acceptedCookies"
                    if (getCookie("acceptedCookies") === "true") {
                        // Уже принят, не показываем окно
                        $modalCookie.hide();
                    } else {
                        jQuery('body').addClass('no-scroll');
                        // Не принят, показываем модалку с анимацией fadeIn
                        $modalCookie.fadeIn(100); // 300 = скорость анимации в мс
                    }
                <?php } ?>
                // Кнопка "Прийняти"
                $acceptCookieBtn.on("click", function () {
                    // Устанавливаем cookie на 365 дней
                    setCookie("acceptedCookies", "true", 365);
                    // Скрываем модалку с анимацией fadeOut
                    $modalCookie.fadeOut(100);
                    jQuery('body').removeClass('no-scroll');
                });

                // Можно добавить закрытие по клику на крестик

            });
        </script>
        <script>
            jQuery(document).ready(function () {
                const dropdown = jQuery('.categoryDropdownWrapper');
                const catalogLink = jQuery('#catalogLink');


                jQuery('#dropdown-menu').hover(
                    function () {
                        dropdown.stop(true, true).fadeIn(100);
                        catalogLink.find('svg').addClass('rotate');
                        catalogLink.addClass("link-hovered");
                    },
                    function () {
                        dropdown.stop(true, true).fadeOut(100);
                        catalogLink.find('svg').removeClass('rotate');
                        catalogLink.removeClass("link-hovered");
                    }
                );

                jQuery('#burgerButton').click(function () {
                    jQuery('#burgerMenu').toggleClass('open');
                    jQuery('body').toggleClass('no-scroll');
                });


                jQuery(document).click(function (e) {
                    if (!jQuery(e.target).closest('.burgerWrapper, #burgerButton').length) {
                        jQuery('#burgerMenu').removeClass('open');
                        jQuery('body').removeClass('no-scroll');
                    }
                });
                jQuery('#mobileCatalogArrow').click(function () {
                    jQuery(this).toggleClass("mobileCatalogArrow-active");
                    jQuery('.categoryMobileDropdownWrapper').slideToggle(100);
                    jQuery('body').toggleClass('no-scroll');
                });
                

            });
            jQuery(document).ready(function () {

                jQuery('.openModalButton').click(function (e) {
                    e.stopPropagation();
                    const targetValue = jQuery(this).data('target');
                    jQuery('#modalForm').fadeIn(100);
                    jQuery('#modalForm').find('input[name="target"]').val(targetValue);
                    jQuery('body').addClass('no-scroll');

                });
                jQuery('.openModalPhoneButton').click(function (e) {
                    e.stopPropagation();
                    const targetValue = jQuery(this).data('target');
                    jQuery('#modalPhone').fadeIn(100);
                    jQuery('body').addClass('no-scroll');

                });
                $('.modalCloseButton').on('click', function () {
                    // «this» — иконка-крестик, ищем ближайший контейнер-модалку
                    $(this).closest('.modalWrapper').fadeOut(100);
                    $('body').removeClass('no-scroll');
                });

                // Закрытие по крестику внутри модалки
                $('.modalCross').on('click', function () {
                    // «this» — иконка-крестик, ищем ближайший контейнер-модалку
                    $(this).closest('.modalWrapper').fadeOut(100);
                    $('body').removeClass('no-scroll');
                });

                // Закрытие по клику вне области модалки
                $(document).on('click', function (e) {
                    // Если кликнули не внутри .modalBody и не по кнопке .openModalButton,
                    // значит, кликаем «вне» модалки, и все открытые модалки закрываются
                    if (!$(e.target).closest('.modalBody, .openModalButton').length) {
                        $('.modalWrapper:visible').fadeOut(100);
                        $('body').removeClass('no-scroll');
                    }
                });
            });
            jQuery(document).ready(function () {
                let lastScrollTop = 0;
                const delta = 5;
                const header = jQuery('header');
                const headerHeight = header.outerHeight();

                jQuery(window).scroll(function () {
                    let currentScrollTop = jQuery(this).scrollTop();


                    if (Math.abs(lastScrollTop - currentScrollTop) <= delta) {
                        return;
                    }


                    if (currentScrollTop > lastScrollTop && currentScrollTop > headerHeight) {
                        header.css('transform', 'translateY(-100%)');
                    }

                    else if (currentScrollTop < lastScrollTop) {
                        header.css('transform', 'translateY(0)');
                    }

                    lastScrollTop = currentScrollTop;
                });
            });

        </script>


    </header>
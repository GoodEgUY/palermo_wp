<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5LJCNR69');</script>
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
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Palermo",
  "url": "https://lunares.com.ua"
}
</script>

</head>
<?php generate_breadcrumbs_json_ld(); ?>

<body <?php body_class(); ?>>

    <header>

        <div class="headerWrapper wrapper">
            <div class="headerNav">
                <a href="" class="headerItem">Послуги</a>
                <a href="" class="headerItem">Меню</a>
                <a href="" class="headerItem">Єтапи співпраці</a>
            </div>
            <h2 class="logo">Palermo</h2>
            <div class="headerSocials">
                <a href="https://www.tiktok.com/@lunares_agro?_t=ZM-8tHR0SgR78o&_r=1"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/telegram.svg"
                        alt=""></a>

                <a href="https://t.me/lunares_agro"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/instagram.svg"
                        alt=""></a>
                <a href="https://www.instagram.com/lunares_agro"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/phone.svg"
                        alt="">+380934094191</a>
            </div>

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
                
                <a href="<?php echo home_url('/fertilization/'); ?>" class="headerItem <?php if (is_page('fertilization'))
                       echo 'active'; ?>">Послуги</a>
                <a href="<?php echo home_url('/pilots-academy/'); ?>" class="headerItem <?php if (is_page('pilots-academy'))
                       echo 'active'; ?>">Меню</a>
                <a href="<?php echo home_url('/blogs/'); ?>" class="headerItem <?php if ($current_path === 'blogs') {
                       echo 'active';
                   } ?>">Єтапи співпраці</a>
            </div>
            <button class="transparentButton burgerMenuButton openModalPhoneButton"
                data-target="Бургер Меню Кнопка">Зв’язатись з нами <svg width="16" height="17" viewBox="0 0 16 17"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" class="modalLogo" alt="">


                <p>Ми завжди поруч, щоб допомогти! Оберіть зручний номер для зв’язку, і ми з радістю відповімо на всі
                    ваші запитання.

                <div class="modalButtonGroupVertical">
                    <?php if (have_rows('phone_number', 'options')): ?>
                        <?php while (have_rows('phone_number', 'options')):
                            the_row(); ?>
                            <a href="tel:<?php if ($number = get_sub_field('number', 'options')): ?>
               <?php echo esc_html($number); ?>
               <?php endif; ?>" class="greenButton"><?php if ($label = get_sub_field('label', 'options')): ?>
                                    <?php echo esc_html($label); ?>

                                <?php endif; ?><svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></a>

                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (have_rows('phone_number_2', 'options')): ?>
                        <?php while (have_rows('phone_number_2', 'options')):
                            the_row(); ?>
                            <a href="tel:<?php if ($number = get_sub_field('number', 'options')): ?>
               <?php echo esc_html($number); ?>
               <?php endif; ?>" class="greenButton"><?php if ($label = get_sub_field('label', 'options')): ?>
                                    <?php echo esc_html($label); ?>

                                <?php endif; ?><svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
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
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Главная",
      "item": "http://agronix.com.ua"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Каталог",
      "item": "http://agronix.com.ua/catalog"
    }
  ]
}
</script>


    </header>
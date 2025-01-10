<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); // Подключение стилей, скриптов и других хуков ?>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
</head>

<body <?php body_class(); ?>>
    <header>

        <div class="headerWrapper wrapper">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="" class="logo">
            </a>
            <div class="headerNav">
                <div class="headerItem" id="dropdown-menu">

                    <a href="/catalog" class="headerItem" id="catalogLink">
                        Каталог
                        <svg width="9" class="dropdown-arrow" height="5" viewBox="0 0 9 5" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 4.5L8.5 0.5H0.5L4.5 4.5Z" />
                        </svg>
                    </a>
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
                            <a href="/all">Всі</a>
                            <a href="/drones">Агродрони</a>
                            <a href="/mixing">Вузли змішування</a>
                            <a href="/generators">Генератори</a>
                            <a href="/components">Комплектуючі</a>
                        </div>
                    </div>
                </div>
                <a href="<?php echo home_url('/fertilization/'); ?>" class="headerItem">Внесення ЗЗР</a>
                <a href="<?php echo home_url('/pilots-academy/'); ?>" class="headerItem">Центр пілотів</a>
                <div class="headerItem">Блог</div>

            </div>
            <button class="transparentButton openModalButton" data-target="Хедер">Дізнатись більше <svg width="16"
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

                    <a href="/catalog" class="headerItem" id="catalogLink">
                        Каталог
                        <svg width="9" class="dropdown-arrow" height="5" viewBox="0 0 9 5" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 4.5L8.5 0.5H0.5L4.5 4.5Z" />
                        </svg>
                    </a>
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
                            <a href="/all">Всі</a>
                            <a href="/drones">Агродрони</a>
                            <a href="/mixing">Вузли змішування</a>
                            <a href="/generators">Генератори</a>
                            <a href="/components">Комплектуючі</a>
                        </div>
                    </div>
                </div>
                <a href="<?php echo home_url('/fertilization/'); ?>" class="headerItem">Внесення ЗЗР</a>
                <a href="<?php echo home_url('/pilots-academy/'); ?>" class="headerItem">Центр пілотів</a>
                <div class="headerItem">Блог</div>
            </div>
            <button class="transparentButton burgerMenuButton">Зв’язатись з нами <svg width="16" height="17"
                    viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg></button>
        </div>
        <div class="modalWrapper">
            <div class="modalBody">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cross.svg" alt=""
                    class="modalCross">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" class="modalLogo" alt="">
                <p>Заповніть форму нижче, і наші спеціалісти зв'яжуться з вами найближчим часом</p>
                <form class="modalForm">
                    <input type="text" class="defaultInput" placeholder="Ім'я" name="name">
                    <input type="tel" class="defaultInput" placeholder="Телефон" name="phone">
                    <button type="submit" class="greenButton">Надіслати<svg width="16" height="17" viewBox="0 0 16 17"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></button>
                    <input type="hidden" value="" name="target">

                </form>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                const dropdown = $('.categoryDropdownWrapper');
                const catalogLink = $('#catalogLink');


                $('#dropdown-menu').hover(
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

                $('#burgerButton').click(function () {
                    $('#burgerMenu').toggleClass('open');
                    $('body').toggleClass('no-scroll');
                });


                $(document).click(function (e) {
                    if (!$(e.target).closest('.burgerWrapper, #burgerButton').length) {
                        $('#burgerMenu').removeClass('open');
                        $('body').removeClass('no-scroll');
                    }
                });

            });
            $(document).ready(function () {

                $('.openModalButton').click(function (e) {
                    e.stopPropagation();
                    const targetValue = $(this).data('target');
                    $('.modalWrapper').fadeIn(100);
                    $('.modalWrapper').find('input[name="target"]').val(targetValue);
                    $('body').addClass('no-scroll');

                });


                $('.modalCross').click(function () {
                    $('.modalWrapper').fadeOut(100);
                    $('body').removeClass('no-scroll');
                });


                $(document).click(function (e) {
                    if (!$(e.target).closest('.modalBody, .openModalButton').length) {
                        $('.modalWrapper').fadeOut(100);
                        $('body').removeClass('no-scroll');
                    }
                });
            });
            $(document).ready(function () {
                let lastScrollTop = 0;
                const delta = 5;
                const header = $('header');
                const headerHeight = header.outerHeight();

                $(window).scroll(function () {
                    let currentScrollTop = $(this).scrollTop();


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
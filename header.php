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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="" class="logo">
            <div class="headerNav">
                <div class="headerItem">Каталог</div>
                <div class="headerItem">Внесення ЗЗР</div>
                <div class="headerItem">Центр пілотів</div>
                <div class="headerItem">Блог</div>

            </div>
            <button class="transparentButton">Дізнатись більше <svg width="16" height="17" viewBox="0 0 16 17"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg></button>
            <div class="burger">
                <svg class="burger-icon" width="32" height="32" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect class="line top" y="4" width="32" height="2" rx="1" fill="white" />
                    <rect class="line middle" x="6" y="15" width="26" height="2" rx="1" fill="white" />
                    <rect class="line bottom" y="26" width="32" height="2" rx="1" fill="white" />
                </svg>
            </div>

        </div>
    </header>
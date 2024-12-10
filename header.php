<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); // Подключение стилей, скриптов и других хуков ?>
</head>

<body <?php body_class(); ?>>
    <header>

        <div class="headerWrapper wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="">
            <div class="headerNav">
                <div class="headerItem">Каталог</div>
                <div class="headerItem">Внесення ЗЗР</div>
                <div class="headerItem">Центр пілотів</div>
                <div class="headerItem">Блог</div>

            </div>
            <button class="transparentButton">Дізнатись більше</button>
        </div>
    </header>
</body>
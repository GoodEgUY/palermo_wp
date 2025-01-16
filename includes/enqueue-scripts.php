<?php

add_action('wp_enqueue_scripts', 'lunare_enqueue_assets');
function lunare_enqueue_assets()
{
    // Подключение CSS
    $styles = [
        'header' => '/assets/css/header.css',
        'footer' => '/assets/css/footer.css',
        'home' => '/assets/css/home.css',
        'page-pilots-academy' => '/assets/css/page-pilots-academy.css',
        'page-single-product-other' => '/assets/css/products.css',
        'page-single-small-template' => '/assets/css/blog.css',
        'page-fertilization' => '/assets/css/page-fertilization.css',
        'ui' => '/assets/css/ui-styles.css',
    ];

    foreach ($styles as $handle => $path) {
        wp_enqueue_style($handle, get_template_directory_uri() . $path, [], '1.0.0', 'all');
    }

    // Подключение CSS intl-tel-input
    wp_enqueue_style(
        'intl-tel-input-css',
        'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css',
        [],
        '17.0.12',
        'all'
    );


    wp_enqueue_script(
        'intl-tel-input-js',
        'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.js',
        ['jquery'],
        '17.0.12',
        true
    );

    wp_enqueue_script(
        'jquery-mask-js',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js',
        ['jquery'],
        '1.14.11',
        true
    );
    wp_enqueue_script(
        'jquery-validation',
        'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js',
        ['jquery'],
        '1.14.11',
        true
    );

    wp_enqueue_script(
        'axios',
        'https://unpkg.com/axios/dist/axios.min.js',
        ['jquery'],
        '1.14.11',
        true
    );
    // Подключение кастомного JS
    
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), false);
    wp_enqueue_style('fancybox-style', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css', array(), false);

    // Подключение скриптов
    wp_enqueue_script('jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js', array('jquery'), null, false);
    wp_enqueue_script('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array(), null, false);
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, false);
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), null, false);
    // Передача AJAX URL в main.js
    // wp_localize_script('main-js', 'ajaxData', [
    //     'ajaxurl' => admin_url('admin-ajax.php'),
    // ]);
    wp_enqueue_script(
        'main-js',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        ['jquery'],
        '1.0',
        true
    );
    wp_enqueue_style('aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), false);

    wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, false);

    // Инлайн-скрипт для intl-tel-input
    add_action('wp_footer', function () {
        ?>
        <script>
            jQuery(document).ready(function ($) {
                var inputElements = document.querySelectorAll("input[type='tel']");

                inputElements.forEach(function (input) {
                    var iti = window.intlTelInput(input, {
                        autoPlaceholder: "aggressive",
                        geoIpLookup: function (callback) {
                            $.get("https://ipinfo.io", function () { }, "jsonp").always(function (resp) {
                                var countryCode = resp && resp.country ? resp.country : "";
                                callback(countryCode);
                            });
                        },
                        hiddenInput: "phone_number",
                        onlyCountries: ["UA"],
                        preferredCountries: ["UA"],
                        separateDialCode: true,
                        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js",
                    });

                    $(input).on("countrychange", function () {
                        var selectedCountryData = iti.getSelectedCountryData();
                        var newPlaceholder = intlTelInputUtils.getExampleNumber(
                            selectedCountryData.iso2,
                            true,
                            intlTelInputUtils.numberFormat.INTERNATIONAL
                        );
                        iti.setNumber("");
                        var mask = newPlaceholder.replace(/[1-9]/g, "0");
                        $(this).mask(mask);
                    });

                    iti.promise.then(function () {
                        $(input).trigger("countrychange");
                    });
                });
            });
        </script>
        <?php
    });
}

?>
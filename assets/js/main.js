jQuery(document).ready(function ($) {
    // Обработка клика по кнопке категории
    $('.category-btn').on('click', function () {
        // Убираем активный класс со всех кнопок и добавляем к текущей
        $('.category-btn').removeClass('active');
        $(this).addClass('active');

        // Получаем slug выбранной категории
        let category = $(this).data('category');

        // Отправляем AJAX-запрос
        $.ajax({
            url: ajaxData.ajaxurl, // Используем ajaxData.ajaxurl
            type: 'POST',
            data: {
                action: 'filter_products',
                category: category,
            },
            beforeSend: function () {
                $('#product-list').html('<p>Завантаження...</p>'); // Показать сообщение загрузки
            },
            success: function (response) {
                $('#product-list').html(response); // Обновить список товаров
            },
            error: function () {
                $('#product-list').html('<p>Сталася помилка. Спробуйте ще раз.</p>');
            },
        });
    });
});

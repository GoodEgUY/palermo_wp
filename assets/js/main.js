jQuery(document).ready(function ($) {
  // Обработка клика по кнопке категории
  $(".category-btn").on("click", function () {
    // Убираем активный класс со всех кнопок и добавляем к текущей
    $(".category-btn").removeClass("active");
    $(this).addClass("active");

    // Получаем slug выбранной категории
    let category = $(this).data("category");

    // Отправляем AJAX-запрос
    $.ajax({
      url: ajaxData.ajaxurl, // Используем ajaxData.ajaxurl
      type: "POST",
      data: {
        action: "filter_products",
        category: category,
      },
      beforeSend: function () {
        $("#product-list").html("<p>Завантаження...</p>"); // Показать сообщение загрузки
      },
      success: function (response) {
        $("#product-list").html(response); // Обновить список товаров
      },
      error: function () {
        $("#product-list").html("<p>Сталася помилка. Спробуйте ще раз.</p>");
      },
    });
  });
});
$(document).ready(function () {
    $(".accordion__title").off("click").on("click", function (event) {
      // Отладка: выводим текст элемента
      console.log("Клик по:", $(this).text());
  
      // Предотвращаем всплытие
      event.stopPropagation();
  
      // Получаем текущие элементы
      var content = $(this).next(".accordion__content");
      var arrow = $(this).find(".accordion__arrow-item");
  
      // Проверяем видимость контента
      if (content.is(":visible")) {
        console.log("Закрываем:", $(this).text());
        content.slideUp();
        arrow.removeClass("accordion__arrow-active").html(`<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 10H10M19 10H10M10 10V1M10 10V19" stroke="#0E0E0E" stroke-width="2" stroke-linecap="round"/>
            </svg>
            `);
        $(this).removeClass("accordion__title-active");
      } else {
        console.log("Открываем:", $(this).text());
        // Закрываем другие аккордеоны
        $(".accordion__content").slideUp();
        $(".accordion__arrow-item").removeClass("accordion__arrow-active").html(`<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 10H10M19 10H10M10 10V1M10 10V19" stroke="#0E0E0E" stroke-width="2" stroke-linecap="round"/>
            </svg>`);
        $(".accordion__title").removeClass("accordion__title-active");
  
        // Открываем текущий
        content.slideDown();
        arrow.addClass("accordion__arrow-active").html(`<svg width="20" height="2" viewBox="0 0 20 2" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 1H10H19" stroke="#0E0E0E" stroke-width="2" stroke-linecap="round"/>
</svg>`);
        $(this).addClass("accordion__title-active");
      }
    });
  });
  
  

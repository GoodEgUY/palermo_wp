

$(document).ready(function () {
  $(".burger").on("click", function (e) {
    e.stopPropagation(); // Предотвращает всплытие события
    $(this).toggleClass("active");
  });
});



function validateContactFormLand(form) {
  
  
  let $nameInput = $(form).find('input[name="name"]');
  let $phoneInput = $(form).find('input[name="phone"]');
  let $targetInput = $(form).find('input[name="target"]')
  let name = $nameInput.val().trim();
  let phone = $phoneInput.val().trim();
  let target = $targetInput.val().trim();
  let hasError = false;

  let code = form.querySelector('.iti__selected-dial-code').innerHTML;
  let fullPhone = code + phone; // Форматирование номера
  sendForm(fullPhone, name, target);
}

async function sendForm(phone, name, target) {
  let phoneNumber = "";
  let clientName = "";
  if (phone) {
    phoneNumber = phone;
   
  }
  if (name) {
    clientName = name;
  }
  const hopper = "Lunares";
  if (phoneNumber === "") {
    alert("Пожалуйста, введите ваш номер телефона.");
    return;
  }
  const currentDate = new Date();
  const formattedDate = `${currentDate.getDate()} ${currentDate.toLocaleString(
    "default",
    { month: "long" }
  )} ${currentDate.getFullYear()}, ${currentDate.getHours()}:${currentDate.getMinutes()}:${currentDate.getSeconds()}`;
  googlePhone = phoneNumber.replace("+", "").replace(" ", "")

  rowData = {
    data: [formattedDate, clientName, googlePhone, target, hopper],
  };
  var message = "";

  var message = `${formattedDate}\n${hopper}\n\nЗаявка на зворотній дзвінок\n\n<b>Імʼя клієнта:</b> ${clientName}\n<b>Номер телефона:</b>\n<code>${phoneNumber}</code>\n------------------------\n${target}\n`;

  axios
    .post(
      `https://api.telegram.org/bot8179073658:AAH-bQTmVvV3GV4IpgQ7b1HyT7f-vFox_4o/sendMessage`,
      { chat_id: "-1002342298500", parse_mode: "html", text: message }
    )
    .then((response) => {
      
      jQuery('body').addClass('no-scroll');
      $("#modalSuccess").fadeIn("fast");
      $("#modalForm").fadeOut("fast");

      $("[name='name']").each(function () {
        $(this).val("");
      });
      $("[name='phone']").each(function () {
        $(this).val("");
      });
    })
    .catch((error) => {
    
    });
    
    const webAppUrl =
    "https://script.google.com/macros/s/AKfycbxTbgyFALHHXWwiwQzh3_pOE6QR0rxz8XsxQsgfSPCygvh0aCqdi_vgpeFkcgxN2IyjOw/exec";
  fetch(webAppUrl, {
    method: "POST",
    mode: "no-cors",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(rowData),
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok " + response.statusText);
      }
      return response.json();
    })
    .then((data) => {
      
    })
    .catch((error) => {
      console.error(
        "Произошла ошибка при отправке данных в Google Sheets",
        error
      );
    });
}
$.validator.addMethod(
  "alphanumeric",
  function (value, element) {
      return (
          this.optional(element) ||
          /^[a-zA-Zа-яА-ЯЁё\s]+$/.test(value.replace(/ +/g, " ").trim())
      );
  },
  "Імʼя може містити лише букви"
);
$("form.contactForm").each(function () {
  $(this).validate({
    // Правила валидации для каждого поля
    rules: {
      name: {
        required: true,
        minlength: 2,
        alphanumeric: true,
      },
      phone: {
        required: true,
        minlength: 9, // Дополнительно, можно добавить специфическую валидацию для формата телефона
      },
    },
    // Сообщения ошибок
    messages: {
      name: {
        required: "Будь ласка, введіть ім'я",
        minlength: "Ім’я повинно містити не менше 2 символів",
      },
      phone: {
        required: "Будь ласка, введіть номер телефону",
        minlength: "Телефон повинен містити не менше 9 символів",
      },
    },

    submitHandler: function (form) {
      validateContactFormLand(form);
    },
  });
});
$(document).on("submit", "form.contactForm", function (event) {
  event.preventDefault(); // Блокируем стандартное поведение submit
});

$(document).ready(function () {
  var inputElements = document.querySelectorAll('input[type="tel"]');

  inputElements.forEach(function (input) {
    var iti = window.intlTelInput(input, {
      autoPlaceholder: "aggressive",
      geoIpLookup: function (callback) {
        $.get("http://ipinfo.io", function () {}, "jsonp").always(function (
          resp
        ) {
          var countryCode = resp && resp.country ? resp.country : "";
          callback(countryCode);
        });
      },
      hiddenInput: "phone_number",
      onlyCountries: ["UA"],
      preferredCountries: ["UA"],
      separateDialCode: true,
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js",
    });

    $(input).on("countrychange", function (event) {
      var selectedCountryData = iti.getSelectedCountryData();
      var newPlaceholder = intlTelInputUtils.getExampleNumber(
        selectedCountryData.iso2,
        true,
        intlTelInputUtils.numberFormat.INTERNATIONAL
      );
      iti.setNumber("");
      var mask = "00 000 0000";
      $(this).mask(mask);
    });

    iti.promise.then(function () {
      $(input).trigger("countrychange");
    });
  });
});

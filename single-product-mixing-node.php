<?php get_header(); // Подключаем header ?>
<div class="mainWrapper">
    <section>
        <div class="productMainInfoWrapper wrapper">
            <div class="productGallery">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/images/products/400Photo (1).png"
                    class="productGalleryBlack-big" data-fancybox="productMain">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/400Photo (1).png"
                        alt="Генератор">
                </a>
                <!-- Галерея миниатюр -->
                <div class="productGalleryThumbs">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/images/products/400Photo (2).png"
                        class="productGalleryBlack-small" data-fancybox="productMain">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/400Photo (2).png"
                            alt="Генератор миниатюра">
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/images/products/400Photo (3).png"
                        class="productGalleryBlack-small" data-fancybox="productMain">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/400Photo (3).png"
                            alt="Генератор миниатюра 2">
                    </a>
                </div>
            </div>
            <div class="productMain-info">
                <h1><?php the_title(); ?>
                </h1>
                <p class="productMain-title"><?php the_content(); ?></p>
                <div class="productMain-mainProperties">
                    <?php if (have_rows('main_properties')): ?>
                        <?php while (have_rows('main_properties')):
                            the_row(); ?>
                            <div class="mainPropertiesItem">
                                <?php if ($name = get_sub_field('name')): ?>
                                    <p class="propertieName">
                                        <?php echo esc_html($name); ?>
                                    </p>
                                <?php endif; ?>
                                <?php if ($value = get_sub_field('value')): ?>
                                    <p class="propertieValue"><?php echo esc_html($value); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- <div class="mainPropertiesItem">
               <p class="propertieName">Об’єм бака
               </p>
               <p class="propertieValue">400 л</p>
               </div>
               <div class="mainPropertiesItem">
               <p class="propertieName">Потужність
               </p>
               <p class="propertieValue">650w
               </p>
               </div> -->
                </div>
                <?php if ( have_rows( 'facts' ) ) : ?>
	

                <div class="productMain-advantages">
                <?php while ( have_rows( 'facts' ) ) :
		the_row(); ?>
		<div class="markListItem">
                        <div class="checkMarkIcon"></div>
                        <?php if ( $fact = get_sub_field( 'fact' ) ) : ?>
	                        <p><?php echo esc_html( $fact ); ?></p>

<?php endif; ?>
                    </div>
	<?php endwhile; ?>
                    
                    
                </div>
                <?php endif; ?>
                <div class="productMain-price">
                    <h3>1 200 000 <small>Грн.</small>
                    </h3>
                    <p>Ціна вказана з ПДВ. Вартість за комплект.</p>
                </div>
                <div class="productCardButtonGroup">
                    <button class="greenButton">
                        Замовити
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <a href="" class="transparentButton">
                        Характеристики
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="productTechnologyWrapper wrapper">
            <div class="technologyList">
                <h2>Особливості та <span> переваги</span><br />нашого<span> змішувача</span></h2>
                <div class="mainSwiperContainer">
                    <div class="swiperDefault swiperProductTechnology">
                        <div class="swiper-wrapper sliderWrapperDefault">
                            <div class="swiper-slide swiperSlideDefault">
                                <div class="swiperSlideContent">
                                    <p class="steps"><span>Перевага 1/6</span></p>
                                    <h3>Насос з корпусом з нержавіючої сталі</h3>
                                    <p>Продуктивність подвійного насоса до 24 л/хв. Це на 100% більше порівняно з
                                        попереднім поколінням, щоб закрити потреби полів, садів і
                                        високотемпературних
                                        середовищ.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide swiperSlideDefault">
                                <div class="swiperSlideContent">
                                    <p class="steps"><span>Перевага 2/6</span></p>
                                    <h3>Фільтр великого об’єму з клапаном</h3>
                                    <p>Розмір крапель можна регулювати в діапазоні 50-500 мкм, залежно від
                                        використовуваних хімічних речовин.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide swiperSlideDefault">
                                <div class="swiperSlideContent">
                                    <p class="steps"><span>Перевага 3/6</span></p>
                                    <h3>Електронний лічильник для точності</h3>
                                    <p>DJI Relay забезпечує безперебійну передачу відео в реальному часі для
                                        безпечних
                                        польотів навіть у складних сценаріях роботи з перешкодами сигналу.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide swiperSlideDefault">
                                <div class="swiperSlideContent">
                                    <p class="steps"><span>Перевага 4/6</span></p>
                                    <h3>Алюмінієвий пістолет</h3>
                                    <p>DJI Relay забезпечує безперебійну передачу відео в реальному часі для
                                        безпечних
                                        польотів навіть у складних сценаріях роботи з перешкодами сигналу.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide swiperSlideDefault">
                                <div class="swiperSlideContent">
                                    <p class="steps"><span>Перевага 5/6</span></p>
                                    <h3>Посилені шланги для роботи з хімією</h3>
                                    <p>DJI Relay забезпечує безперебійну передачу відео в реальному часі для
                                        безпечних
                                        польотів навіть у складних сценаріях роботи з перешкодами сигналу.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide swiperSlideDefault">
                                <div class="swiperSlideContent">
                                    <p class="steps"><span>Перевага 6/6</span></p>
                                    <h3>Кришка баку з автоматичним клапаном</h3>
                                    <p>DJI Relay забезпечує безперебійну передачу відео в реальному часі для
                                        безпечних
                                        польотів навіть у складних сценаріях роботи з перешкодами сигналу.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiperNavigationDefault">
                        <div class="swiperButtonPrev" id="swiperButtonPrev-productTechnology">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="swiperButtonNext " id="swiperButtonNext-productTechnology">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="borderRadius1" xmlns="http://www.w3.org/2000/svg">
                            <path class="topRight" />
                        </svg>
                        <svg class="borderRadius2" xmlns="http://www.w3.org/2000/svg">
                            <path class="topRight" />
                        </svg>
                    </div>
                </div>
                <script>
                    window.addEventListener('load', function () {
                        function updateTechnologyPhoto(index) {
                            const photos = [
                                '<?php echo get_template_directory_uri(); ?>/assets/images/products/added (1).png',
                                '<?php echo get_template_directory_uri(); ?>/assets/images/products/added (2).png',
                                '<?php echo get_template_directory_uri(); ?>/assets/images/products/added (3).png',
                                '<?php echo get_template_directory_uri(); ?>/assets/images/products/added (4).png',
                                '<?php echo get_template_directory_uri(); ?>/assets/images/products/added (5).png',
                                '<?php echo get_template_directory_uri(); ?>/assets/images/products/added (5).png',

                            ];

                            const photoWrapper = document.getElementById('technologyPhotoWrapper');
                            if (photoWrapper && photos[index - 1]) {
                                photoWrapper.innerHTML = `<img src="${photos[index - 1]}" alt="Technology Photo ${index}">`;
                            }
                        }
                        updateTechnologyPhoto(1);
                        const swiperTechnology = new Swiper('.swiperProductTechnology', {
                            loop: false,
                            slidesPerView: 1,

                            autoplay: {
                                delay: 5000,
                                disableOnInteraction: false,
                            },
                            navigation: {
                                nextEl: '#swiperButtonNext-productTechnology',
                                prevEl: '#swiperButtonPrev-productTechnology',
                            },
                            on: {
                                slideChange: function () {
                                    const activeIndex = this.activeIndex + 1;
                                    updateTechnologyPhoto(activeIndex);
                                },
                            },

                        });

                        updateTechnologyPhoto(1);
                    });
                </script>
            </div>
            <div class="technologyGallery" id="technologyPhotoWrapper"></div>
        </div>
    </section>
    <section>
        <div class="productKitWrapper wrapper">
            <div class="productKitInfo">
                <h2><span>Дрон-комплект</span> DJI AGRAS Т50</h2>
                <div class="productKit-list">
                    <div class="markListItem">
                        <div class="checkMarkIcon"></div>
                        <p>Агродрон моделі DJI Agras T50
                        </p>
                    </div>
                    <div class="markListItem">
                        <div class="checkMarkIcon"></div>
                        <p>Пульт керування RM700B
                        </p>
                    </div>
                    <div class="markListItem">
                        <div class="checkMarkIcon"></div>
                        <p>Кейс для пульта
                        </p>
                    </div>
                    <div class="markListItem">
                        <div class="checkMarkIcon"></div>
                        <p>x3 інтелектуальні батареї BAX601
                        </p>
                    </div>
                    <div class="markListItem">
                        <div class="checkMarkIcon"></div>
                        <p>Зарядний пристрій
                        </p>
                    </div>
                    <div class="markListItem">
                        <div class="checkMarkIcon"></div>
                        <p>Кейс для охолодження батарей
                        </p>
                    </div>
                </div>
                <button class="greenButton">
                    Замовити
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="productKitGallery">
                <div class="left-column">
                    <div class="gallery-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kitPhoto.png"
                            alt="Контроллер">
                    </div>
                    <div class="gallery-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kitPhoto.png" alt="Дрон">
                    </div>
                    <div class="gallery-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kitPhoto.png" alt="Кейс">
                    </div>
                </div>
                <div class="right-column">
                    <div class="gallery-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kitPhoto.png"
                            alt="Зарядное устройство">
                    </div>
                    <div class="gallery-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kitPhoto.png"
                            alt="Контейнер">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="productTechAdventagesWrapper wrapper">
            <div class="productTechAdventages-name">
                <h2>Технічні <span> характеристики</span> DJI Agras <span> T50</span></h2>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/14.png" alt="">
            </div>
            <div class="productTechAdventages-properties">
                <div class="techAdventages-propertiesItem">
                    <p class="property">Обприскування:</p>
                    <p class="value">40 кг</p>
                </div>
                <div class="techAdventages-propertiesItem">
                    <p class="property">Розкидання:</p>
                    <p class="value">50 кг</p>
                </div>
                <div class="techAdventages-propertiesItem">
                    <p class="property">Висока швидкість потоку:</p>
                    <p class="value">розпилення: 16 л/хв, розкидання: 108 кг/хв</p>
                </div>
                <div class="techAdventages-propertiesItem">
                    <p class="property">Стабільність сигналу:</p>
                    <p class="value">офлайн-операції, передача ОЗ на 2 км, додаткове реле DJI</p>
                </div>
                <div class="techAdventages-propertiesItem">
                    <p class="property">Адаптивність усіх сценаріїв:</p>
                    <p class="value">повністю автоматична робота, режим «Фруктовий сад», застосування диференційного
                        внесення
                    </p>
                </div>
                <div class="techAdventages-propertiesItem">
                    <p class="property">Багатоспрямоване запобігання перешкодам:</p>
                    <p class="value">✔️</p>
                </div>
                <div class="techAdventages-propertiesItem">
                    <p class="property">4-х спринклерне обприскування:</p>
                    <p class="value">24 л/хв</p>
                </div>
                <div class="techAdventages-propertiesItem">
                    <p class="property">Польові операції:</p>
                    <p class="value">21 га на годину</p>
                </div>
            </div>
        </div>
    </section>
    <?php if (have_rows('additional_equipment')): ?>
        <section>
            <div class="additionalEquipmentWrapper wrapper">
                <h2>Зробіть змішувач ще кращим — <span>обирайте додаткові опції</span></h2>
                <div class="additionalEquipmentDashboard">
                    <div class="additionalCategories">
                        <?php while (have_rows('additional_equipment')):
                            the_row(); ?>
                            <div class="additionalCategoryItem">
                                <?php if ($category_name = get_sub_field('category_name')): ?>
                                    <h2><?php echo esc_html($category_name); ?></h2>
                                <?php endif; ?>

                                <div class="categoryItems">
                                    <?php
                                    // Если "few" = true -> это чекбоксы
                                    // Если "few" = false (или не выставлено) -> это радио
                                    if (get_sub_field('few')):
                                        // CHECKBOX-GROUP
                                        if (have_rows('item_included')):
                                            while (have_rows('item_included')):
                                                the_row(); ?>
                                                <div class="categoryItem">
                                                    <label class="checkbox-wrapper">
                                                        <input type="checkbox" data-category="<?php echo esc_attr($category_name); ?>" />
                                                        <div class="chckerWrapper"><span class="checkbox-checkmark"></span>
                                                            <?php if ($name = get_sub_field('name')): ?>
                                                                <span class="checkbox-label"><?php echo esc_html($name); ?></span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <?php if ($price = get_sub_field('price')): ?>
                                                            <p class="item-price"><?php echo esc_html($price); ?></p>
                                                        <?php endif; ?>
                                                    </label>
                                                </div>
                                            <?php endwhile;
                                        endif;
                                    else:
                                        // RADIO-GROUP
                                        if (have_rows('item_included')):
                                            while (have_rows('item_included')):
                                                the_row(); ?>

                                                <div class="categoryItem">
                                                    <label class="radio-wrapper">
                                                        <!-- 
                            ВАЖНО: в name="" подставляем уникальный идентификатор категории,
                            чтобы каждая «radio-группа» была независима от других категорий 
                          -->
                                                        <input type="radio" name="<?php echo esc_attr(sanitize_title($category_name)); ?>"
                                                            data-category="<?php echo esc_attr($category_name); ?>" />
                                                        <div class="chckerWrapper"><span class="radio-checkmark"></span>
                                                            <?php if ($name = get_sub_field('name')): ?>
                                                                <span class="radio-label"><?php echo esc_html($name); ?></span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <?php if ($price = get_sub_field('price')): ?>
                                                            <p class="item-price"><?php echo esc_html($price); ?></p>
                                                        <?php endif; ?>
                                                    </label>
                                                </div>

                                            <?php endwhile;
                                        endif;
                                    endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <!-- Блок для вывода выбранных позиций и суммы -->
                    <div class="additionalSummary">
                        <div class="additionalSummaryBLock">
                            <h3>Комплектація</h3>
                            <p class="title">Lorem ipsum dolor sit amet consectetur. At arcu non sit nunc eget sed ac purus
                                odio.</p>
                            <div id="chosenExtras" class="choosenExtras"></div>
                        </div>
                        <div class="additionalSummaryTotal">
                            <div class="totalPriceRow">
                                <h3>Загальна вартість</h3>
                                <h3 class="totalPrice">
                                    <span id="totalPrice"></span> Грн.
                                </h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur. Mauris non eget ornare consectetur. Ipsum nisl
                                malesuada nibh duis augue.</p>
                            <button class="greenButton"> Зв’язатись з менеджером
                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></button>



                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Передаём базовую стоимость PHP -> JS -->
        <?php

        $base_price_str = get_field('price');
        $base_price_str = str_replace(' ', '', $base_price_str);
        $base_price = (float) $base_price_str;
        // если нет, то вернёт 0
        ?>
        <script>
            // Сразу сохраним базовую стоимость в переменную
            const basePrice = <?php echo $base_price ? $base_price : 0; ?>;
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const checkboxes = document.querySelectorAll('.checkbox-wrapper input[type="checkbox"]');
                const radios = document.querySelectorAll('.radio-wrapper input[type="radio"]');
                const totalPriceEl = document.getElementById('totalPrice');
                const chosenExtrasEl = document.getElementById('chosenExtras');

                function updatePrice() {
                    let newTotal = basePrice;
                    let chosenItems = []; // массив объектов { name: "...", price: 0 }

                    // Обрабатываем чекбоксы
                    checkboxes.forEach(ch => {
                        if (ch.checked) {
                            const parentLabel = ch.closest('label');
                            const nameEl = parentLabel.querySelector('.checkbox-label');
                            const priceEl = parentLabel.querySelector('.item-price');

                            let priceValue = 0;
                            if (priceEl) {
                                priceValue = parseFloat(priceEl.textContent.replace(/\D+/g, '')) || 0;
                                newTotal += priceValue;
                            }

                            if (nameEl) {
                                const itemName = nameEl.textContent.trim();
                                chosenItems.push({ name: itemName, price: priceValue });
                            }
                        }
                    });

                    // Обрабатываем радио
                    radios.forEach(radio => {
                        if (radio.checked) {
                            const parentLabel = radio.closest('label');
                            const nameEl = parentLabel.querySelector('.radio-label');
                            const priceEl = parentLabel.querySelector('.item-price');

                            let priceValue = 0;
                            if (priceEl) {
                                priceValue = parseFloat(priceEl.textContent.replace(/\D+/g, '')) || 0;
                                newTotal += priceValue;
                            }

                            if (nameEl) {
                                const itemName = nameEl.textContent.trim();
                                chosenItems.push({ name: itemName, price: priceValue });
                            }
                        }
                    });

                    // Выводим итог
                    if (totalPriceEl) {
                        totalPriceEl.textContent = newTotal;
                    }

                    // Формируем список выбранных опций: название и цена отдельно
                    if (chosenExtrasEl) {
                        chosenExtrasEl.innerHTML = ''; // очистим контейнер

                        chosenItems.forEach(item => {
                            // создаём блок для каждой опции
                            const itemDiv = document.createElement('div');
                            itemDiv.classList.add('chosen-item'); // класс на всякий случай

                            // параграф с названием
                            const nameP = document.createElement('p');
                            nameP.textContent = item.name;

                            // параграф с ценой (если 0, можно не выводить)
                            const priceP = document.createElement('p');
                            if (item.price > 0) {
                                priceP.textContent = item.price + ' грн';
                            } else {
                                priceP.textContent = '—'; // или что-то вроде "включено", "0 грн", "не указана" и т.д.
                            }

                            // Добавляем всё в родительский div
                            itemDiv.appendChild(nameP);
                            itemDiv.appendChild(priceP);

                            // И вставляем в chosenExtrasEl
                            chosenExtrasEl.appendChild(itemDiv);
                        });
                    }
                }

                // Вешаем обработчики
                checkboxes.forEach(ch => ch.addEventListener('change', updatePrice));
                radios.forEach(rd => rd.addEventListener('change', updatePrice));

                // Первый пересчёт
                updatePrice();
            });
        </script>



    <?php endif; ?>
    <section>
        <div class="faqWrapper wrapper">
            <h2><span>Відповіді</span> на поширені питання</h2>
            <div class="accordion">
                <div class="accordion__item" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="accordion__title">
                        <span class="accordion__title-text">
                            <h3>Як відбувається процес внесення ЗЗР дроном?</h3>
                        </span>
                        <div class="accordion__arrow">
                            <div class="accordion__arrow-item">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 10H10M19 10H10M10 10V1M10 10V19" stroke="#0E0E0E" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__content">
                        <p>Першим кроком узгоджуються всі деталі замовлення. Далі наша команда виїжджає на визначену
                            локацію та робить обмір полів. В залежності від площі, складності форми та площі обмір
                            може
                            відбуватись як пішки так і самим дроном. Наступним кроком команда замішує хімію в
                            спеціальному змішувачі та приступає до обприскування.
                        </p>
                    </div>
                </div>
                <div class="accordion__item" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="accordion__title">
                        <span class="accordion__title-text">
                            <h3>Яку площу може обробити дрон за зміну?</h3>
                        </span>
                        <div class="accordion__arrow">
                            <div class="accordion__arrow-item">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 10H10M19 10H10M10 10V1M10 10V19" stroke="#0E0E0E" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__content">
                        <p>В нашому дронопарку є різні дрони з різною продуктивністю. Dji Agras T30 може обробити до
                            120
                            га за зміну, а новіші моделі T40 та T50 до 220 га за зміну. За потреби на одному полі
                            може
                            працювати декілька дронів одночасно, тому за одну зміну наша команда може виконати понад
                            500
                            га.
                        </p>
                    </div>
                </div>
                <div class="accordion__item" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="accordion__title">
                        <span class="accordion__title-text">
                            <h3>Від чого залежить вартість внесення ЗЗР агродроном?</h3>
                        </span>
                        <div class="accordion__arrow">
                            <div class="accordion__arrow-item">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 10H10M19 10H10M10 10V1M10 10V19" stroke="#0E0E0E" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__content">
                        <p>Вартість внесення залежить від: площі, кількості полів, норми внесення, наявності
                            перешкод та
                            ліній електропередач на полі.
                        </p>
                    </div>
                </div>
                <div class="accordion__item" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="accordion__title">
                        <span class="accordion__title-text">
                            <h3>Як проходить навчання для пілотів агродронів?</h3>
                        </span>
                        <div class="accordion__arrow">
                            <div class="accordion__arrow-item">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 10H10M19 10H10M10 10V1M10 10V19" stroke="#0E0E0E" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__content">
                        <p>Навчання відбувається як в групах так і індивідуально. Курс триває 3 дні, складається з
                            теорії та практики та включає в себе 12 блоків та 48 тем. У вартість входить оренда
                            дрона та
                            транспортні витрати. По завершенню курсу кожен студент отримує сертифікат який
                            підтверджує
                            кваліфікацію.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="contactWrapper wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/screen1/screen1contactBackground.jpeg"
                alt="" class="contactBackground">
            <div class="contactBlockText">
                <h2 class="decorBig">Залишились питання?<br /> <span>Ми</span> завжди <span>на зв'язку!</span></h2>
                <p>Заповніть форму, і наші спеціалісти зв'яжуться з вами найближчим часом, щоб відповісти на всі
                    ваші
                    запитання. Або телефонуйте за номером:
                </p>
                <h2 class="decorBig"><i>+38 (093)969 46 42</i></h2>
            </div>
            <div class="contactBlockForm">
                <form action="" class="defaultForm">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/logo-small.svg" alt="">
                    <p>Заповніть форму нижче, і наші спеціалісти зв'яжуться з вами найближчим часом</p>
                    <div class="inputWrapper">
                        <input type="text" name="name" placeholder="Ім'я " class="defaultInput" id="">
                    </div>
                    <div class="inputWrapper">
                        <input type="tel" name="phone" placeholder="Телефон" class="defaultInput" id="">
                    </div>
                    <button class="greenButton">
                        Безкоштовна консультація
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <script>
        Fancybox.bind("[data-fancybox]", {
            Thumbs: {
                autoStart: true,
            }
        });
    </script>
</div>
<?php
get_footer(); // Подключаем footer
?>
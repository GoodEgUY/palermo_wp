<?php get_header(); // Подключаем header ?>
<div class="mainWrapper">
    <section>
        <div class="productMainInfoWrapper wrapper">
        <div class="productGallery">
                <div class="productGallery-big">
                    <!-- Основная фотография (первая из галереи) -->
                    <?php
                    $gallery = get_field('gallery'); // Получаем галерею из ACF
                    if ($gallery):
                        // Получаем первую фотографию из галереи
                        $first_image = $gallery[0];
                        ?>
                        <a href="<?php echo esc_url($first_image['url']); ?>" class="productGallery-bigLink"
                            data-fancybox="productOther">
                            <img src="<?php echo esc_url($first_image['sizes']['large']); ?>"
                                alt="<?php echo esc_attr($first_image['alt']); ?>">
                        </a>
                    <?php endif; ?>
                </div>
                <!-- Галерея миниатюр -->
                <div class="productGalleryThumbs">
                    <?php if ($gallery): ?>
                        <?php
                        // Пропускаем первую фотографию для миниатюр
                        foreach ($gallery as $index => $image):
                            if ($index == 0)
                                continue; // Пропускаем первую фотографию
                            ?>
                            <div class="productGallery-small">
                            <a href="<?php echo esc_url($image['url']); ?>" class="productGallery-smallLink"
                                data-fancybox="productOther">
                                <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                            </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
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
                <?php if (have_rows('facts')): ?>
                    <div class="productMain-advantages">
                        <?php while (have_rows('facts')):
                            the_row(); ?>
                            <div class="markListItem">
                                <div class="checkMarkIcon"></div>
                                <?php if ($fact = get_sub_field('fact')): ?>
                                    <p><?php echo esc_html($fact); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php if ($price = get_field('price')): ?>
                    <div class="productMain-price">
                        <h3>                        <?php echo number_format($price, 0, ',', ' ');?>
                        <small>Грн.</small>
                        </h3>
                        <p>Ціна вказана з ПДВ. Вартість за комплект.</p>
                    </div>
                <?php endif; ?>
                <div class="productCardButtonGroup">
                    <button class="greenButton openModalButton" data-target="Замовлення: <?php the_title(); ?>">
                        Замовити
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <a href="" class="transparentButton" scroll="goToFeatures">
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
    <?php if (have_rows('features_and_benefits')):
        $slides = get_field('features_and_benefits');


        $total = count($slides);

        ?>
        <section>
            <div class="productTechnologyWrapper wrapper">
            <h2 class="mobileChapter"> Особливості та <span> переваги</span><br />нашого<span> змішувача</span>
            </h2>
                <div class="technologyList">
                    <h2>Особливості та <span> переваги</span><br />нашого<span> змішувача</span></h2>
                    <div class="mainSwiperContainer">
                        <div class="swiperDefault swiperProductTechnology">
                            <div class="swiper-wrapper sliderWrapperDefault">
                                <?php
                                $i = 1;
                                while (have_rows('features_and_benefits')):
                                    the_row(); ?>
                                    <div class="swiper-slide swiperSlideDefault">
                                        <div class="swiperSlideContent">
                                            <p class="steps"><span>Перевага <?php echo $i; ?>/<?php echo $total; ?></span></p>
                                            <?php if ($benefit_name = get_sub_field('benefit_name')): ?>
                                                <h3><?php echo esc_html($benefit_name); ?></h3>
                                            <?php endif; ?>
                                            <?php if ($benefit_desc = get_sub_field('benefit_desc')): ?>
                                                <p><?php echo esc_html($benefit_desc); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php $i++; endwhile; ?>
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
                            // Формируем массив ссылок на фотографии из ACF
                            const photos = [
                                <?php
                                while (have_rows('features_and_benefits')):
                                    the_row();
                                    $benefit_photo = get_sub_field('benefit_photo');
                                    if ($benefit_photo):
                                        echo "'" . esc_url($benefit_photo['url']) . "',";
                                    endif;
                                endwhile;
                                ?>
                            ];

                            // Функция для обновления картинки по индексу
                            function updateTechnologyPhoto(index) {
                                const photoWrapper = document.getElementById('technologyPhotoWrapper');

                                // index - 1, потому что index слайдера начинается с 1, а массив с 0
                                if (photoWrapper && photos[index - 1]) {
                                    photoWrapper.innerHTML = `<img src="${photos[index - 1]}" alt="Technology Photo ${index}">`;
                                }
                            }

                            // При загрузке сразу показываем первое фото
                            updateTechnologyPhoto(1);

                            // Инициализируем Swiper
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
                                        // this.activeIndex начинается с 0,
                                        // поэтому прибавляем 1, чтобы совпадало с человеческим порядком
                                        const activeIndex = this.activeIndex + 1;
                                        updateTechnologyPhoto(activeIndex);
                                    },
                                },
                            });
                        });
                    </script>
                </div>
                <div class="technologyGallery" id="technologyPhotoWrapper"></div>
            </div>
        </section>
    <?php endif; ?>
    <?php if (have_rows('equipment')): ?>
        <section>
            <div class="productKitWrapper wrapper">
            <h2 class="mobileHeading"><span>Комплектація</span><br/><?php the_title(); ?></h2>
                <div class="productKitInfo">
                    <h2><span>Комплектація</span><br/><?php the_title(); ?></h2>
                    <div class="productKit-list">
                        <?php while (have_rows('equipment')):
                            the_row(); ?>
                            <?php if (have_rows('Component')): ?>
                                <?php while (have_rows('Component')):
                                    the_row(); ?>
                                    <div class="markListItem">
                                        <div class="checkMarkIcon"></div>
                                        <?php if ($name = get_sub_field('name')): ?>
                                            <p><?php echo esc_html($name); ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                    <button class="greenButton openModalButton" data-target="Замовлення:(<?php the_title() ?>)">
                        Замовити
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="productKitGallery">
                    <?php
                    // Проверяем, есть ли строки в повторителе "equipment"
                    if (have_rows('equipment')):
                        while (have_rows('equipment')):
                            the_row();

                            // Получаем галерею (массив изображений)
                            $gallery = get_sub_field('gallery');
                            // $gallery будет массивом, каждая ячейка которого — это массив данных изображения ACF
                            // Например: $gallery[0]['url'] — ссылка на полное изображение
                            //           $gallery[0]['sizes']['thumbnail'] — ссылка на миниатюру
                            //           $gallery[0]['alt'] — атрибут alt и т.д.
                            ?>
                            <div class="left-column">
                                <!-- 1-я картинка -->
                                <div class="gallery-item">
                                    <?php if (!empty($gallery[0])): ?>
                                        <img src="<?php echo esc_url($gallery[0]['url']); ?>"
                                            alt="<?php echo esc_attr($gallery[0]['alt']); ?>">
                                    <?php endif; ?>
                                </div>
                                <!-- 2-я картинка -->
                                <div class="gallery-item">
                                    <?php if (!empty($gallery[1])): ?>
                                        <img src="<?php echo esc_url($gallery[1]['url']); ?>"
                                            alt="<?php echo esc_attr($gallery[1]['alt']); ?>">
                                    <?php endif; ?>
                                </div>
                                <!-- 3-я картинка -->
                                <div class="gallery-item">
                                    <?php if (!empty($gallery[2])): ?>
                                        <img src="<?php echo esc_url($gallery[2]['url']); ?>"
                                            alt="<?php echo esc_attr($gallery[2]['alt']); ?>">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- .left-column -->
                            <div class="right-column">
                                <!-- 4-я картинка -->
                                <div class="gallery-item">
                                    <?php if (!empty($gallery[3])): ?>
                                        <img src="<?php echo esc_url($gallery[3]['url']); ?>"
                                            alt="<?php echo esc_attr($gallery[3]['alt']); ?>">
                                    <?php endif; ?>
                                </div>
                                <!-- 5-я картинка -->
                                <div class="gallery-item">
                                    <?php if (!empty($gallery[4])): ?>
                                        <img src="<?php echo esc_url($gallery[4]['url']); ?>"
                                            alt="<?php echo esc_attr($gallery[4]['alt']); ?>">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- .right-column -->
                        <?php
                        endwhile; // конец while ( have_rows('equipment') )
                    endif; // конец if ( have_rows('equipment') )
                    ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php if (have_rows('Specifications')): ?>
        <?php while (have_rows('Specifications')):
                        the_row(); ?>
        <section id="specifications">
            <div class="productTechAdventagesWrapper wrapper">
                <div class="productTechAdventages-name">
                    <h2>Технічні <span> характеристики</span> <?php the_title(); ?></h2>
                    <?php
$item_photo = get_sub_field( 'item_photo' );
if ( $item_photo ) : ?>
	<img src="<?php echo esc_url( $item_photo['url'] ); ?>" alt="<?php echo esc_attr( $item_photo['alt'] ); ?>" />
<?php endif; ?>
                    
                </div>
                <div class="productTechAdventages-properties">
                   
                        <?php if (have_rows('properties')): ?>
                            <?php while (have_rows('properties')):
                                the_row(); ?>
                                <div class="techAdventages-propertiesItem">
                                    <?php if ($name = get_sub_field('name')): ?>
                                        <p class="property"><?php echo esc_html($name); ?></p>
                                    <?php endif; ?>
                                    <?php if (get_sub_field('true')): ?>
                                        <div class="checkMarkIcon"></div>
                                    <?php else: ?>
                                        <?php if ($value = get_sub_field('value')): ?>
                                            <p class="value"><?php echo esc_html($value); ?></p>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        
                      
                        
                   
                </div>
            </div>
        </section>
        <?php endwhile; ?>
    <?php endif; ?>
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
                                                    <input type="checkbox"
                                                           data-category="<?php echo esc_attr($category_name); ?>" />
                                                    <div class="chckerWrapper">
                                                        <span class="checkbox-checkmark"></span>
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
                                        // Счётчик, чтобы пометить первый элемент как «базовый»
                                        $radio_index = 0;
                                        while (have_rows('item_included')):
                                            the_row(); ?>
                                            <div class="categoryItem">
                                                <label class="radio-wrapper">
                                                    <?php
                                                    // Если это первый элемент, делаем его «базовым»: 
                                                    // checked="checked" + data-base="true"
                                                    $extra_attrs = '';
                                                    if ($radio_index === 0) {
                                                        $extra_attrs = ' checked="checked" data-base="true"';
                                                    }
                                                    ?>
                                                    <input type="radio"
                                                           name="<?php echo esc_attr(sanitize_title($category_name)); ?>"
                                                           data-category="<?php echo esc_attr($category_name); ?>"
                                                           <?php echo $extra_attrs; ?>
                                                    />
                                                    <div class="chckerWrapper">
                                                        <span class="radio-checkmark"></span>
                                                        <?php if ($name = get_sub_field('name')): ?>
                                                            <span class="radio-label"><?php echo esc_html($name); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php if ($price = get_sub_field('price')): ?>
                                                        <p class="item-price"><?php echo esc_html($price); ?></p>
                                                    <?php endif; ?>
                                                </label>
                                            </div>
                                        <?php
                                            $radio_index++;
                                        endwhile;
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
                            odio.
                        </p>
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
                            malesuada nibh duis augue.
                        </p>
                        <button class="greenButton openModalButton" id="additionalEquipmentButton">
                            Зв’язатись з менеджером
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Передаём базовую стоимость PHP -> JS -->
    <?php
    $base_price_str = get_field('price');
    // Убираем пробелы, чтобы можно было делать (float)
    $base_price_str = str_replace(' ', '', $base_price_str);
    $base_price = (float) $base_price_str;
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


            const managerButton = document.querySelector('#additionalEquipmentButton');
            function updatePrice() {
                let newTotal = basePrice;
                let chosenItems = []; // массив объектов { name: "...", price: 0 }
                let notBaseNames = [];
                // Обрабатываем чекбоксы
                checkboxes.forEach(ch => {
                    if (ch.checked) {
                        const parentLabel = ch.closest('label');
                        const nameEl = parentLabel.querySelector('.checkbox-label');
                        const priceEl = parentLabel.querySelector('.item-price');
                        const isBase = ch.hasAttribute('data-base');
                        let priceValue = 0;
                        if (priceEl) {
                            // При желании можно добавить логику про базовый элемент и тут
                            priceValue = parseFloat(priceEl.textContent.replace(/\D+/g, '')) || 0;
                            newTotal += priceValue;
                        }

                        if (nameEl) {
                            const itemName = nameEl.textContent.trim();
                            chosenItems.push({ name: itemName, price: priceValue });
                            if (!isBase) {
                                notBaseNames.push(itemName);
                            }
                       
                        }
                    }
                });

                // Обрабатываем radio
                radios.forEach(radio => {
                    if (radio.checked) {
                        const parentLabel = radio.closest('label');
                        const nameEl = parentLabel.querySelector('.radio-label');
                        const priceEl = parentLabel.querySelector('.item-price');
                        
                        // Проверяем, является ли элемент "базовым" (data-base="true")
                        const isBase = radio.hasAttribute('data-base');

                        let priceValue = 0;
                        if (priceEl && !isBase) {
                            // Если элемент базовый — не прибавляем цену
                            priceValue = parseFloat(priceEl.textContent.replace(/\D+/g, '')) || 0;
                            newTotal += priceValue;
                        }

                        if (nameEl) {
                            const itemName = nameEl.textContent.trim();
                            chosenItems.push({ name: itemName, price: isBase ? 0 : priceValue });
                            if (!isBase) {
            notBaseNames.push(itemName);
        }
                        }
                    }
                });

                // Выводим итог
                if (totalPriceEl) {
                    totalPriceEl.textContent = newTotal.toLocaleString('ru-RU');
                }

                // Формируем список выбранных опций
                if (chosenExtrasEl) {
                    chosenExtrasEl.innerHTML = ''; // очистим контейнер

                    chosenItems.forEach(item => {
                        const itemDiv = document.createElement('div');
                        itemDiv.classList.add('chosen-item');

                        const nameP = document.createElement('p');
                        nameP.textContent = item.name;

                        const priceP = document.createElement('p');
                        // Если цена > 0, показываем её, иначе символ/текст о том, что бесплатно/включено
                        if (item.price > 0) {
                            priceP.textContent = item.price + ' грн';
                        } else {
                            priceP.textContent = '—'; 
                            // Или "Включено", "0 грн" и т.п.
                        }

                        itemDiv.appendChild(nameP);
                        itemDiv.appendChild(priceP);

                        chosenExtrasEl.appendChild(itemDiv);
                    });
                }
                // <-- Новая логика data-target для кнопки менеджера
                // Превращаем массив не базовых опций в строку через запятую
                const notBaseString = notBaseNames.join(', ');
                // Присваиваем атрибут data-target
                if (managerButton) {
                    message = "Товар: <?php the_title() ?> c Додатковою комплектацією:" + notBaseString
                    managerButton.setAttribute('data-target', message);
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

    
    <?php if ( have_rows( 'faq' ) ) : ?>

		
	

<section>
    <div class="faqWrapper wrapper">
        <h2><span>Відповіді</span> на поширені питання</h2>
        <div class="accordion">
        <?php while ( have_rows( 'faq' ) ) :
    the_row(); ?>
            <div class="accordion__item" data-aos-anchor-placement="bottom-bottom">
                <div class="accordion__title">
                    <span class="accordion__title-text">
                    <?php if ( $question = get_sub_field( 'question' ) ) : ?>
                        <h3><?php echo esc_html( $question ); ?></h3>
<?php endif; ?>
                        
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
                <?php if ( $answer = get_sub_field( 'answer' ) ) : ?>
                    <p><?php echo esc_html( $answer ); ?></p>
<?php endif; ?>
                    
                </div>
            </div>
            <?php endwhile; ?>
            
        </div>
    </div>
</section>
<?php endif; ?>
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
                <?php if (have_rows('phone_number', 'options')): ?>
                    <?php while (have_rows('phone_number', 'options')):
                        the_row(); ?>
                        <h2 class="decorBig"><a href="tel:<?php if ($number = get_sub_field('number', 'options')): ?>
               <?php echo esc_html($number); ?>
               <?php endif; ?>"><i><?php if ($label = get_sub_field('label', 'options')): ?>
                                        <?php echo esc_html($label); ?>
                                    <?php endif; ?></i></a>
                        </h2>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="contactBlockForm">
                <form action="" class="defaultForm contactForm">
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
                    <input type="hidden" value="Контакт Блок(<?php the_title(); ?>)" name="target">

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
    <script>
    document.querySelectorAll('[scroll="goToFeatures"]').forEach((link) => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            document.querySelector("#specifications").scrollIntoView({
                behavior: "smooth",
                block: "center",
            });
        });
    });
</script>
</div>
<?php if (get_post_type() === 'product') : ?>
    <?php 
    // Получаем галерею
    $gallery = get_field('gallery');
    $first_image_url = ''; // Переменная для первой картинки
    if ($gallery) {
        $first_image = $gallery[0]; // Первая картинка
        $first_image_url = esc_url($first_image['sizes']['large']); // Получаем URL первой картинки
    }


    // Получаем цену
    $price = get_field('price');
    ?>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Product",
          "name": "<?php the_title(); ?>",
          "image": "<?php echo $first_image_url; ?>",
          "description": "<?php echo strip_tags(get_the_excerpt()); ?>",
          "sku": "<?php echo get_post_meta(get_the_ID(), '_sku', true); ?>",
          "offers": {
            "@type": "Offer",
            "url": "<?php the_permalink(); ?>",
            "priceCurrency": "UAH", 
            "price": "<?php echo esc_html($price); ?>",
            "priceValidUntil": "2025-12-31",
            "itemCondition": "https://schema.org/NewCondition",
            "availability": "https://schema.org/InStock",
            "seller": {
              "@type": "Organization",
              "name": "Lunares"
            }
          }
        }
    </script>
<?php endif; ?>
<?php
get_footer(); // Подключаем footer
?>
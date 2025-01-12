<?php
get_header(); // Подключаем header
/*
Template Name: Single Product Agrodrone
*/
?>
<div class="mainWrapper">
    <section>
        <div class="productMainInfoWrapper wrapper">
            <div class="productGallery">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/images/drone-1.png"
                    class="productGalleryBlack-big" data-fancybox="productMain">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drone-1.png" alt="Генератор">
                </a>
                <!-- Галерея миниатюр -->
                <div class="productGalleryThumbs">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/images/drone-2.png"
                        class="productGalleryBlack-small" data-fancybox="productMain">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drone-2.png"
                            alt="Генератор миниатюра">
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/images/drone-3.png"
                        class="productGalleryBlack-small" data-fancybox="productMain">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drone-3.png"
                            alt="Генератор миниатюра 2">
                    </a>
                </div>
            </div>
            <div class="productMain-info">
                <h1>DJI AGRAS <span>T50</span></h1>
                <p class="productMain-title">Успадкував потужну коаксіальну двороторну силову установку та стійку до
                    крутного моменту конструкцію роздільного типу, що забезпечує новий рівень стабільності при
                    перенесенні 40 кг обприскування або 50 кг розкидання корисного вантажу.</p>
                <div class="productMain-mainProperties">
                    <div class="mainPropertiesItem">
                        <p class="propertieName">Продуктивність
                        </p>
                        <p class="propertieValue">21 га/год</p>
                    </div>
                    <div class="mainPropertiesItem">
                        <p class="propertieName">Об’єм бака
                        </p>
                        <p class="propertieValue">40 л</p>
                    </div>
                    <div class="mainPropertiesItem">
                        <p class="propertieName">Стабільність сигналу
                        </p>
                        <p class="propertieValue">Optional DJI Relay</p>
                    </div>
                </div>
                <div class="productMain-advantages">
                    <div class="markListItem">
                        <div class="checkMarkIcon"></div>
                        <p>Повністю автоматичне та ручне керування</p>
                    </div>
                    <div class="markListItem">
                        <div class="checkMarkIcon"></div>
                        <p>Режим “Фруктовий сад”</p>
                    </div>
                    <div class="markListItem">
                        <div class="checkMarkIcon"></div>
                        <p>Застосування зі змінною нормою поливу</p>
                    </div>
                    <div class="markListItem">
                        <div class="checkMarkIcon"></div>
                        <p>Один дрон для обприскування та розкидання
                        </p>
                    </div>
                </div>
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
            <h2 class="mobileChapter"> <span> Технології</span>, що підсилюють кожен етап <span>обробки полів</span>
            </h2>
            <div class="technologyList">
                <h2> <span> Технології</span>, що підсилюють кожен етап <span>обробки полів</span></h2>

                <div class="mainSwiperContainer">
                    <div class="swiperDefault swiperProductTechnology">

                        <div class="swiper-wrapper sliderWrapperDefault">
                            <div class="swiper-slide swiperSlideDefault">
                                <div class="swiperSlideContent">
                                    <p class="steps"><span>Технологія 1/3</span></p>
                                    <h3>Насос із магнітним приводом і робочим колесом</h3>
                                    <p>Продуктивність подвійного насоса до 24 л/хв. Це на 100% більше порівняно з
                                        попереднім поколінням, щоб закрити потреби полів, садів і високотемпературних
                                        середовищ.</p>
                                </div>
                            </div>
                            <div class="swiper-slide swiperSlideDefault">
                                <div class="swiperSlideContent">
                                    <p class="steps"><span>Технологія 2/3</span></p>
                                    <h3>Центробіжні атомайзери з подвійним розпиленням для точного внесення ЗЗР</h3>
                                    <p>Розмір крапель можна регулювати в діапазоні 50-500 мкм, залежно від
                                        використовуваних хімічних речовин.</p>


                                </div>
                            </div>
                            <div class="swiper-slide swiperSlideDefault">
                                <div class="swiperSlideContent">
                                    <p class="steps"><span>Технологія 3/3</span></p>
                                    <h3>Dji Relay (додатково)</h3>
                                    <p>DJI Relay забезпечує безперебійну передачу відео в реальному часі для безпечних
                                        польотів навіть у складних сценаріях роботи з перешкодами сигналу.</p>
                                </div>
                            </div>


                        </div>


                    </div>
                    <div class="swiperNavigationDefault">
                        <div class="swiperButtonPrev" id="swiperButtonPrev-productTechnology"><svg width="16"
                                height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg></div>
                        <div class="swiperButtonNext " id="swiperButtonNext-productTechnology">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="borderRadius1" xmlns="http://www.w3.org/2000/svg">
                            <path />
                        </svg>
                        <svg class="borderRadius2" xmlns="http://www.w3.org/2000/svg">
                            <path />
                        </svg>
                    </div>
                </div>
                <script>
                    window.addEventListener('load', function () {
                        function updateTechnologyPhoto(index) {
                            const photos = [
                                '<?php echo get_template_directory_uri(); ?>/assets/images/technologyPhoto1.png',
                                '<?php echo get_template_directory_uri(); ?>/assets/images/technologyPhoto2.png',
                                '<?php echo get_template_directory_uri(); ?>/assets/images/technologyPhoto1.png',

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
        <div class="textSeparator wrapper">
            <h2>
                <span>Бінокулярне</span> <br />виявлення перешкод із<br /> <span>подвійним <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/binocular.png"
                        alt="Icon2">радаром</span>


            </h2>
            <p>DJI AGRAS T50 має передній і задній радари з подвоєною кількістю радіоканалів для точного виявлення. Вони
                забезпечують багатовекторне уникнення перешкод, підвищуючи безпеку. Два комплекти бінокулярних датчиків
                розпізнають рельєф і перешкоди для автоматичного обльоту та слідування рельєфу.</p>
        </div>
    </section>
    <section>
        <div class="productBigPhotoWrapper wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bigPhoto.png" alt="Icon 2">
        </div>
    </section>

    <section>
        <div class="productKitWrapper wrapper">
            <h2 class="mobileChapter"><span>Дрон-комплект</span> DJI AGRAS Т50</h2>
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
                        внесення</p>
                </div>
                <div class="techAdventages-propertiesItem">
                    <p class="property">Багатоспрямоване запобігання перешкодам:</p>
                    <div class="checkMarkIcon"></div>
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
    <section>
        <div class="productEquipmentWrapper wrapper">
            <h2></h2>
            <div class="mainSwiperContainer">
                <div class="productsSwiper swiperProductsDashboard">

                    <div class="swiper-wrapper sliderWrapperDefault">
                        <div class="swiper-slide swiperSlideDefault">
                            <div class="swiperSlideProductContent">
                                <div class="productCardItem">
                                    <div class="productCardItemImage">
                                        <img src="https://placehold.co/387x300/png" alt="">
                                    </div>
                                    <h3>Насос потужністю до 150 л/хв
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur. Ipsum viverra morbi a ornare quam. Mi
                                        blandit sed diam sit eget nulla euismod odio.
                                    </p>
                                    <h1 class="decorBig">920 000 <small>Грн.</small></h1>
                                    <div class="productItemButton-wrapper">
                                        <a href="" class="transparentButton">Дізнатись більше <svg width="16"
                                                height="17" viewBox="0 0 16 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg></a>
                                        <svg class="productItemButton-wrapperFigure1"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                        <svg class="productItemButton-wrapperFigure2"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiperSlideDefault">
                            <div class="swiperSlideProductContent">
                                <div class="productCardItem">
                                    <div class="productCardItemImage">
                                        <img src="https://placehold.co/387x300/png" alt="">
                                    </div>
                                    <h3>Насос потужністю до 150 л/хв
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur. Ipsum viverra morbi a ornare quam. Mi
                                        blandit sed diam sit eget nulla euismod odio.
                                    </p>
                                    <h1 class="decorBig">920 000 <small>Грн.</small></h1>
                                    <div class="productItemButton-wrapper">
                                        <a href="" class="transparentButton">Дізнатись більше <svg width="16"
                                                height="17" viewBox="0 0 16 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg></a>
                                        <svg class="productItemButton-wrapperFigure1"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                        <svg class="productItemButton-wrapperFigure2"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiperSlideDefault">
                            <div class="swiperSlideProductContent">
                                <div class="productCardItem">
                                    <div class="productCardItemImage">
                                        <img src="https://placehold.co/387x300/png" alt="">
                                    </div>
                                    <h3>Насос потужністю до 150 л/хв
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur. Ipsum viverra morbi a ornare quam. Mi
                                        blandit sed diam sit eget nulla euismod odio.
                                    </p>
                                    <h1 class="decorBig">920 000 <small>Грн.</small></h1>
                                    <div class="productItemButton-wrapper">
                                        <a href="" class="transparentButton">Дізнатись більше <svg width="16"
                                                height="17" viewBox="0 0 16 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg></a>
                                        <svg class="productItemButton-wrapperFigure1"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                        <svg class="productItemButton-wrapperFigure2"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiperSlideDefault">
                            <div class="swiperSlideProductContent">
                                <div class="productCardItem">
                                    <div class="productCardItemImage">
                                        <img src="https://placehold.co/387x300/png" alt="">
                                    </div>
                                    <h3>Насос потужністю до 150 л/хв
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur. Ipsum viverra morbi a ornare quam. Mi
                                        blandit sed diam sit eget nulla euismod odio.
                                    </p>
                                    <h1 class="decorBig">920 000 <small>Грн.</small></h1>
                                    <div class="productItemButton-wrapper">
                                        <a href="" class="transparentButton">Дізнатись більше <svg width="16"
                                                height="17" viewBox="0 0 16 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg></a>
                                        <svg class="productItemButton-wrapperFigure1"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                        <svg class="productItemButton-wrapperFigure2"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiperSlideDefault">
                            <div class="swiperSlideProductContent">
                                <div class="productCardItem">
                                    <div class="productCardItemImage">
                                        <img src="https://placehold.co/387x300/png" alt="">
                                    </div>
                                    <h3>Насос потужністю до 150 л/хв
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur. Ipsum viverra morbi a ornare quam. Mi
                                        blandit sed diam sit eget nulla euismod odio.
                                    </p>
                                    <h1 class="decorBig">920 000 <small>Грн.</small></h1>
                                    <div class="productItemButton-wrapper">
                                        <a href="" class="transparentButton">Дізнатись більше <svg width="16"
                                                height="17" viewBox="0 0 16 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg></a>
                                        <svg class="productItemButton-wrapperFigure1"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                        <svg class="productItemButton-wrapperFigure2"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
                <div class="swiperNavigationDefault">
                    <div class="swiperButtonPrev" id="swiperButtonPrev-productTechnology"><svg width="16" height="17"
                            viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></div>
                    <div class="swiperButtonNext " id="swiperButtonNext-productTechnology">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
                <script>
                    const swiperTechnology = new Swiper('.swiperProductsDashboard', {
                        loop: false,
                        slidesPerView: 3,
                        spaceBetween: 20,
                        autoplay: {
                            delay: 5000,
                            disableOnInteraction: false,
                        },
                        breakpoints: {

                            900: {
                                slidesPerView: 3,
                                spaceBetween: 20,
                            },
                            // 600px и меньше (например, 1 слайд для мобильных)
                            600: {
                                slidesPerView: 2,
                                spaceBetween: 15,
                            },
                            0: {
                                slidesPerView: 1,
                                spaceBetween: 10,
                            }
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

                </script>
            </div>
        </div>
    </section>
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
                            локацію та робить обмір полів. В залежності від площі, складності форми та площі обмір може
                            відбуватись як пішки так і самим дроном. Наступним кроком команда замішує хімію в
                            спеціальному змішувачі та приступає до обприскування.</p>
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
                        <p>В нашому дронопарку є різні дрони з різною продуктивністю. Dji Agras T30 може обробити до 120
                            га за зміну, а новіші моделі T40 та T50 до 220 га за зміну. За потреби на одному полі може
                            працювати декілька дронів одночасно, тому за одну зміну наша команда може виконати понад 500
                            га.</p>
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
                        <p>Вартість внесення залежить від: площі, кількості полів, норми внесення, наявності перешкод та
                            ліній електропередач на полі.</p>
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
                            теорії та практики та включає в себе 12 блоків та 48 тем. У вартість входить оренда дрона та
                            транспортні витрати. По завершенню курсу кожен студент отримує сертифікат який підтверджує
                            кваліфікацію.</p>
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
                <p>Заповніть форму, і наші спеціалісти зв'яжуться з вами найближчим часом, щоб відповісти на всі ваші
                    запитання. Або телефонуйте за номером:</p>
                <h2 class="decorBig"><a href="tel:+380939694642"><i>+38 (093)969 46 42</i></a></h2>
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
                    <button class="greenButton">Безкоштовна консультація <svg width="16" height="17" viewBox="0 0 16 17"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></button>

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
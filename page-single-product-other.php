<?php
get_header(); // Подключаем header
/*
Template Name: Single Product Other
*/
?>
<div class="mainWrapper">
    <section>
        <div class="productOtherWrapper wrapper">
            <div class="productGallery">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/images/generator.png"
                    class="productGallery-big" data-fancybox="productOther">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/generator.png" alt="Генератор">
                </a>

                <!-- Галерея миниатюр -->
                <div class="productGalleryThumbs">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/images/generator.png"
                        class="productGallery-small" data-fancybox="productOther">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/generator.png"
                            alt="Генератор миниатюра">
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/images/generator.png"
                        class="productGallery-small" data-fancybox="productOther">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/generator.png"
                            alt="Генератор миниатюра 2">
                    </a>
                </div>
            </div>
            <div class="productOtherInfo">
                <h1><span>DJI D12500iЕ</span></h1>
                <p class="productOtherTitle">Успадкував потужну коаксіальну двороторну силову установку та стійку до
                    крутного моменту конструкцію
                    роздільного типу, що забезпечує новий рівень стабільності при перенесенні 40 кг обприскування або 50
                    кг розкидання корисного вантажу.</p>
                <h3 class="productOtherPrice">1 200 000 <small>Грн.</small>
                </h3>
                <div class="productCardButtonGroup">
                    <button class="greenButton">Замовити<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></button>
                    <a href="" class="transparentButton">Характеристики<svg width="16" height="17" viewBox="0 0 16 17"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></a>
                </div>
                <div class="productOtherPropertiesTable">
                    <h3>Розширені характеристики</h3>
                    <div class="productOtherPropertiesItem">
                        <p>Вага:</p>
                        <p class="productOtherPropertiesItem-value">70 кг</p>
                    </div>
                    <div class="productOtherPropertiesItem">
                        <p>Габарити:</p>
                        <p class="productOtherPropertiesItem-value">20x40x60 см</p>
                    </div>
                    <div class="productOtherPropertiesItem">
                        <p>Зарядний вихід:</p>
                        <p class="productOtherPropertiesItem-value">DC 42-59,92 В/9650 Вт</p>
                    </div>
                    <div class="productOtherPropertiesItem">
                        <p>Блок живлення радіатора з повітряним охолодженням:</p>
                        <p class="productOtherPropertiesItem-value">12В/6А</p>
                    </div>
                    <div class="productOtherPropertiesItem">
                        <p>Вихід змінного струму:</p>
                        <p class="productOtherPropertiesItem-value">220 В/1500 Вт</p>
                    </div>
                    <div class="productOtherPropertiesItem">
                        <p>Час зарядки:</p>
                        <p class="productOtherPropertiesItem-value">10-12 хвилин</p>
                    </div>
                    <div class="productOtherPropertiesItem">
                        <p>Ємність паливного баку:</p>
                        <p class="productOtherPropertiesItem-value">30 л</p>
                    </div>
                    <div class="productOtherPropertiesItem">
                        <p>Ємність олії:</p>
                        <p class="productOtherPropertiesItem-value">1,1 л</p>
                    </div>
                    <div class="productOtherPropertiesItem">
                        <p>Тип палива:</p>
                        <p class="productOtherPropertiesItem-value">бензин 92</p>
                    </div>
                    <div class="productOtherPropertiesItem">
                        <p>Витрата палива:</p>
                        <p class="productOtherPropertiesItem-value">500 мл/кВт-год</p>
                    </div>
                    <div class="productOtherPropertiesItem">
                        <p>Робоча температура:</p>
                        <p class="productOtherPropertiesItem-value">від -5 до 40С</p>
                    </div>
                    <div class="productOtherPropertiesItem">
                        <p>Номінальна потужність змінного струму:</p>
                        <p class="productOtherPropertiesItem-value">1500W</p>
                    </div>
                    <div class="productOtherPropertiesItem">
                        <p>Номінальна загальна вихідна потужність:</p>
                        <p class="productOtherPropertiesItem-value">9650W</p>
                    </div>
                    <div class="productOtherPropertiesItem">
                        <p>Максимальна потужність двигуна:</p>
                        <p class="productOtherPropertiesItem-value">12000W</p>
                    </div>
                    <div class="productOtherPropertiesItem">
                        <p>Сумісні акумуляторні батареї:</p>
                        <p class="productOtherPropertiesItem-value">T50/T40/T30</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {
            Thumbs: {
                autoStart: true,
            }
        });
    </script>
    <svg width="200" height="200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
        <!-- Верхняя дуга -->
        <path d="M 40 40 c 0 -22 -18 -40 -40 -40 h 40 Z" fill="white" />
        <!-- Правая дуга -->
        <!-- Правая дуга -->
        <path d="M 160 40 c 22 0 40 -18 40 -40 v 40 Z" fill="white" />
        <!-- Нижняя дуга -->
        <path d="M 160 160 c 0 22 18 40 40 40 h -40 Z" fill="white" />
        <!-- Левая дуга -->
        <path d="M 40 160 c -22 0 -40 18 -40 40 v -40 Z" fill="white" />
    </svg>
</div>
<?php
get_footer(); // Подключаем footer
?>
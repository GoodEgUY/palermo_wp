<?php
get_header(); // Подключаем header
/*
Template Name: Fertilization
*/
?>
<div class="mainWrapper">
    <section>
        <div class="introWrapper2 wrapper">
            <div class="introText2">
                <h1>
                    <span>Внесення ЗЗР</span> із точністю до 2 сантиметрів за <span> допомогою </span>
                    <svg class="borderRadius1" xmlns="http://www.w3.org/2000/svg">
                        <path class="bottomRight" />
                    </svg>
                </h1>
                <h1>
                    <span>Dji Agras</span><i> T30, T40, T50</i>
                    <svg class="borderRadius1" xmlns="http://www.w3.org/2000/svg">
                        <path class="bottomRight" />
                    </svg>
                </h1>
                <svg class="borderRadius2" xmlns="http://www.w3.org/2000/svg">
                    <path class="bottomRight" />
                </svg>
            </div>
            <div class="intro2Application">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/screen2/moonAndDrone.png"
                    class="introBackground2" alt="Місяць та агродрон DJI для точного внесення ЗЗР">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/screen2/introDrone.png"
                    class="introDrone2" alt="Агродрон DJI Agras для обприскування полів купити">
                <div class="introIcons2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/screen2/recycleIcons.svg"
                        alt="Іконка переробки для екологічного внесення добрив">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/screen2/savewaterIcons.svg"
                        alt="Іконка економії води при внесенні засобів захисту рослин">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/screen2/leavesIcons.svg" 
                        alt="Іконка екологічності при роботі з агродронами">
                </div>
                <p class="introParagraph2">Використовуємо агродрони для внесення ЗЗР, навчаємо пілотів та постачаємо
                    флагманські моделі DJI Agriculture.
                </p>
            </div>

            <div class="introProductBlock2">
                <div class="blackItemCard intro2ItemCard">
                    <div class="itemCard-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/screen2/introProductDrone2.png"
                            alt="Агродрон DJI Agras T50 купити для точного внесення добрив">
                    </div>
                    <div class="blackItemCardInfo">
                        <h3>DJI Agras T50</h3>
                        <a href="<?php echo home_url('/product/dji-agras-t50/'); ?>" class="transparentButton">
                            Перейти до каталогу
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <svg class="borderRadius1" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 24V0C24 13.2549 13.2549 24 0 24H24Z" />
                </svg>
                <svg class="borderRadius2" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 24V0C24 13.2549 13.2549 24 0 24H24Z" />
                </svg>
            </div>
        </div>
    </section>
    <section>
        <div class="textSeparator wrapper">
            <h2>
                Ефективне<br /> внесення <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/screen2/aboutIcon1.png" 
                    alt="Іконка для внесення добрив з агродроном">
                <span>добрив<br /></span>та <span>засобів захисту</span> рослин
            </h2>
            <div class="aboutButtonGroup pc">
                <a href="javascript:void(0)" scroll="goToItems" class="transparentButton">
                    Список препаратів
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <a href="javascript:void(0)" class="greenButton openModalButton" data-target="Внесення ЗЗР">
                    Зв’язатись з нами
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 13.5L12.4444 4.05556M13 12.3889В3.5L4.11111 3.5" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
</div>
<script>
        document.querySelectorAll('[scroll="goToItems"]').forEach((link) => {
            link.addEventListener("click", function (e) {
                e.preventDefault();
                document.querySelector("#itemsList").scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                });
            });
        });
</script>
<?php
get_footer(); // Подключаем footer
?>

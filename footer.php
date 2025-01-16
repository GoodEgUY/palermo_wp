<footer>
    <div class="footerWrapper wrapper">
        <div class="footerHeader">
        <div class="footerColumn">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="" class="footerLogo">
        </div>
            <div class="footerColumn">
                <p>КАТАЛОГ</p>
                <a href="">Агродрони</a>
                <a href="">Вузли змішування</a>
                <a href="">Генератори</a>
                <a href="">Комплектуючі</a>
            </div>
            <div class="footerColumn">
                <p>СТОРІНКИ</p>
                <a href="">Каталог</a>
                <a href="">Внесення ЗЗР</a>
                <a href="">Академія пілотів</a>
                <a href="">Блог</a>
            </div>
            <div class="footerColumn">
                <p>Інформація</p>
                <?php if ( $email = get_field( 'email', 'options' ) ) : ?>
	<a href="mailto:<?php echo esc_html( $email ); ?>"><?php echo esc_html( $email ); ?></a>
<?php endif; ?>
                
                <?php if ( have_rows( 'phone_number', 'options' ) ) : ?>
	<?php while ( have_rows( 'phone_number', 'options' ) ) :
		the_row(); ?>
		<a href="<?php if ( $number = get_sub_field( 'number', 'options' ) ) : ?>
	<?php echo esc_html( $number ); ?>
<?php endif; ?>"><?php if ( $label = get_sub_field( 'label', 'options' ) ) : ?>
	<?php echo esc_html( $label ); ?>
<?php endif; ?></a>
	<?php endwhile; ?>
<?php endif; ?>
                
            </div>
            <div class="footerSocials">
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/footerTikTok.svg"
                        alt=""></a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/footerFacebook.svg"
                        alt=""></a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/footerTelegram.svg"
                        alt=""></a>
                <a href=""><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/footerInstagram.svg"
                        alt=""></a>
            </div>
        </div>
        <div class="footerPolicy">
            <p class="copyright">©<?php echo date('Y'); ?> Всі права захищені</p>
            <div class="footerPolicyNav">
                <a href="">
                    <p>Політика конфіденційності</p>
                </a>
                <a href="">
                    <p>Умови використання</p>
                </a>
                <a href="">
                    <p>Cookies</p>
                </a>
            </div>
        </div>
    </div>
</footer>

        <?php wp_footer(); ?>
</body>

</html>
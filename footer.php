<footer>
   <div class="footerWrapper wrapper">
      <div class="footerHeader">
         <div class="footerColumn">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="" class="footerLogo">
         </div>
         <div class="footerColumn">
            <p>КАТАЛОГ</p>
            <a href="<?php echo home_url('/product-category/agrodrones/'); ?>">Агродрони</a>
            <a href="<?php echo home_url('/product-category/mixing-nodes/ '); ?>">Вузли змішування</a>
            <a href="<?php echo home_url('/product-category/generators/'); ?>">Генератори</a>
            <a href="<?php echo home_url('/product-category/accessories/'); ?>">Комплектуючі</a>
         </div>
         <div class="footerColumn">
            <p>СТОРІНКИ</p>
            <a href="<?php echo home_url('/product/'); ?>">Каталог</a>
            <a href="<?php echo home_url('/fertilization/'); ?>">Внесення ЗЗР</a>
            <a href="<?php echo home_url('/pilots-academy/'); ?>">Центр пілотів</a>
            <a href="<?php echo home_url('/blogs/'); ?>">Блог</a>
         </div>
         <div class="footerColumn">
            <p>Інформація</p>
            <?php if ( $email = get_field( 'email', 'options' ) ) : ?>
            <a href="mailto:<?php echo esc_html( $email ); ?>"><?php echo esc_html( $email ); ?></a>
            <?php endif; ?>
            <?php if ( have_rows( 'phone_number', 'options' ) ) : ?>
            <?php while ( have_rows( 'phone_number', 'options' ) ) :
               the_row(); ?>
            <a href="tel:<?php if ( $number = get_sub_field( 'number', 'options' ) ) : ?>
               <?php echo esc_html( $number ); ?>
               <?php endif; ?>"><?php if ( $label = get_sub_field( 'label', 'options' ) ) : ?>
            <?php echo esc_html( $label ); ?>
            
            <?php endif; ?></a>
            
            <?php endwhile; ?>
            <?php endif; ?>
            <?php if ( have_rows( 'phone_number_2', 'options' ) ) : ?>
            <?php while ( have_rows( 'phone_number_2', 'options' ) ) :
               the_row(); ?>
            <a href="tel:<?php if ( $number = get_sub_field( 'number', 'options' ) ) : ?>
               <?php echo esc_html( $number ); ?>
               <?php endif; ?>"><?php if ( $label = get_sub_field( 'label', 'options' ) ) : ?>
            <?php echo esc_html( $label ); ?>
            
            <?php endif; ?></a>
            
            <?php endwhile; ?>
            <?php endif; ?>
         </div>
         <div class="footerSocials">
            <a href="https://www.tiktok.com/@lunares_agro?_t=ZM-8tHR0SgR78o&_r=1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/footerTikTok.svg"
               alt=""></a>
            <?php /* <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/footerFacebook.svg"
            alt=""></a>*/?>
            <a href="https://t.me/lunares_agro"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/footerTelegram.svg"
               alt=""></a>
            <a href="https://www.instagram.com/lunares_agro"><img
               src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/footerInstagram.svg"
               alt=""></a>
         </div>
      </div>
      <div class="footerPolicy">
         <p class="copyright">©<?php echo date('Y'); ?> Всі права захищені</p>
         <div class="footerPolicyNav">
            <a href="<?php echo home_url('/policy/'); ?>">
               <p>Політика конфіденційності</p>
            </a>
            <a href="<?php echo home_url('/terms/'); ?>">
               <p>Умови використання</p>
            </a>
            <a href="<?php echo home_url('/cookie-policy/'); ?>">
               <p>Cookies</p>
            </a>
         </div>
      </div>
   </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
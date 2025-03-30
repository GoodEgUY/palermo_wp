<footer>
   <div class="footerWrapper wrapper">

      <h1 class="smalllogo">Palermo</h1>
      <p>©2023 Palermo. All right reserved</p>
      <div class="headerSocials">
         <a href="https://t.me/Anton_Buriakov"><img
               src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/telegram.svg" alt=""></a>

         <a href="https://www.instagram.com/palermo.kids.planet"><img
               src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/instagram.svg" alt=""></a>
         <a href="tel:+380934094191"><img
               src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/phone.svg" alt="">+380934094191</a>
      </div>
   </div>
</footer>
<script>
   document.querySelectorAll('[scroll="goToServices"]').forEach((link) => {
      link.addEventListener("click", function (e) {
         e.preventDefault();
         document.querySelector(".services").scrollIntoView({
            behavior: "smooth",
            block: "center",
         });
         $(".burger").removeClass("active");
         $(".burgerWrapper").removeClass("open");

      });
   });
   document.querySelectorAll('[scroll="goToMenu"]').forEach((link) => {
      link.addEventListener("click", function (e) {
         e.preventDefault();
         document.querySelector(".menu").scrollIntoView({
            behavior: "smooth",
            block: "center",
         });
         $(".burger").removeClass("active");

         $(".burgerWrapper").removeClass("open");
      });
   });
   document.querySelectorAll('[scroll="goToSteps"]').forEach((link) => {
      link.addEventListener("click", function (e) {
         e.preventDefault();
         document.querySelector(".steps").scrollIntoView({
            behavior: "smooth",
            block: "center",
         });
         $(".burger").removeClass("active");

         $(".burgerWrapper").removeClass("open");
      });
   });
</script>
<?php wp_footer(); ?>
</body>

</html>
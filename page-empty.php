<?php
get_header(); // Подключаем header
/*
Template Name: Empty Page
*/
?>
<div class="mainWrapper">
    <section>
        <div class="policyWrapper wrapper">
            <?php the_content() ?>
        </div>
    </section>
</div>
<?php
get_footer(); // Подключаем footer
?>
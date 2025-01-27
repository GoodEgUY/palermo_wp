<?php

// function remove_default_post_fields()
// {
//     remove_post_type_support('post', 'title'); // Убираем поле "Имя"
//     remove_post_type_support('post', 'editor'); // Убираем поле "Описание"
// }
// add_action('init', 'remove_default_post_fields');


// Добавляем страницу настроек

include get_template_directory() . '/includes/enqueue-scripts.php';
include get_template_directory() . '/includes/custom-post-types.php';
include get_template_directory() . '/includes/taxonomyes.php';
include get_template_directory() . '/includes/templates.php';
include get_template_directory() . '/includes/theme-options.php';


<?php
function get_ukrainian_date($date = null) {
    if ($date === null) {
        $date = get_the_date('Y-m-d');
    }

    $months = [
        1 => 'Січня', 'Лютого', 'Березня', 'Квітня', 'Травня', 'Червня',
        'Липня', 'Серпня', 'Вересня', 'Жовтня', 'Листопада', 'Грудня'
    ];

    $date_object = new DateTime($date);
    $day = $date_object->format('d');
    $month = $months[(int)$date_object->format('m')];
    $year = $date_object->format('Y');

    return "$day $month $year";
}
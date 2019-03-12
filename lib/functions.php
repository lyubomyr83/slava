<?php

function receiveDayOfWeek()
{
    $day = date("l");

    $days["Sunday"] = "Воскресенье";
    $days["Monday"] = "Понедельник";
    $days["Tuesday"] = "Вторник";
    $days["Wednesday"] = "Среда";
    $days["Thursday"] = "Четверг";
    $days["Friday"] = "Пятница";
    $days["Saturday"] = "Суббота";

    return $days["{$day}"];
}
function receiveMonth ()
{
    $month = date ("F");

    $months['January'] = "Января";
    $months['February'] = "Февраля";
    $months['March'] = "Марта";
    $months['April'] = "Апреля";
    $months['May'] = "Мая";
    $months['June'] = "Июня";
    $months['July'] = "Июля";
    $months['August'] = "Августа";
    $months['September'] = "Сентября";
    $months['October'] = "Октября";
    $months['November'] = "Ноября";
    $months['December'] = "Декабря";

    return $months["{$month}"];
}

//находит последнюю точку и обрезает всё что после неё
// $string - строка, которую нужно укоротить
function trim_to_dot($string) {
    $pos = strrpos($string, '.'); // поиск позиции точки с конца строки
    if (!$pos) {
        return $string; // если точка не найдена - возвращаем строку
    }
    return substr($string, 0, $pos + 1); // обрезаем строку используя количество
    // символов до точки + 1 (сама точка,
    // если она не нужна "+1" нужно убрать)
}// конец функции



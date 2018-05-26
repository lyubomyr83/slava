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
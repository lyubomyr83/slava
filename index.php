<?php
require_once "config/ini.php";
// подключим библиотеку функций
require_once "lib/functions.php";

$mycar = new app\classes\Auto("Фиолетовый","X5","BMW",220);
$friendcar = new app\classes\Auto("белый","C180","Mercedes",180);

$yourcar = new app\classes\Truck("серый","MAN","Big Truck",180,8);
$yourcar1 = new app\classes\Truck("серый","MAN","Big Truck",180,8);
$yourbus = new app\classes\Bus("желтый","ПАЗ","School Bus",120,27);

echo "Количество автомобилей: ".app\classes\Auto::$col."<br>";
echo "Количество автобусов: ".app\classes\Bus::$col."<br>";
echo "Количество грузовиков: ".app\classes\Truck::$col."<br>";
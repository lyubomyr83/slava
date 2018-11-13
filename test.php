<?php
use app\classes\Factory;
require_once "config\ini.php";
 /*$ggg = "123";

 $ok = new C();
//echo $ok->a;

// тернарный оператор
$k = ($ggg <10)? "меньше":"больше";
echo $k;

//PHP 7
// (синтаксический сахар isset и проверки на null

echo ($ggg) ?? "не существует";

function sayHello(int $name):int
{
    echo "Привет ".$name;
    return "ok";
}

sayHello("Вася");*/



$k = Factory::build("C");
echo $k->a;

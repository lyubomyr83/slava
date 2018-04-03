<?php
namespace app\classes;


class Auto
{
    public $color;
    public $model;
    public $name;
    public $speed;
    public $type = "Автомобиль";
    public static $col;

    public function __construct($c,$m,$n,$s)
    {
        $this->color = $c;
        $this->model = $m;
        $this->name = $n;
        $this->speed = $s;
        static::$col++;

        $this->getCar();
    }

    public function getCar()
    {
        echo $this->type."<br>";
        echo "Марка автомобиля: ".$this->name;
        echo "<br>Модель: ".$this->model;
        echo "<br>Цвет: ".$this->color;
        echo "<br>Скорость: ".$this->speed."<br><br>";
    }

}
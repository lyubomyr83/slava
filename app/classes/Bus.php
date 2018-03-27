<?php
namespace app\classes;


class Bus extends Auto
{
    public $seats;
    public $type = "Автобус";
    public static $col;

    public function __construct($c, $m, $n, $s, $st)
    {
        $this->seats = $st."<br>";
        echo "Количество мест: ".$this->seats;
        parent::__construct($c, $m, $n, $s);

    }
}
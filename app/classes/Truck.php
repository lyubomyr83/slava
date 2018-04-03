<?php
namespace app\classes;

class Truck extends Auto
{
    public $cargo;
    public $type = "Грузовик";
    public static $col;

    public function __construct($c, $m, $n, $s, $g)
    {
        $this->cargo = $g."<br>";
        echo "Грузоподьёмность: ".$this->cargo;
        parent::__construct($c, $m, $n, $s);

    }
}

<?php
/**
 * Created by PhpStorm.
 * User: NUC2
 * Date: 15.01.2019
 * Time: 17:14
 */

namespace app\classes;


class Cauthorization extends Mauthorization
{
    public function __construct($name,$surname)
    {
        echo "ooookkkk!!! ";
        echo $name." ".$surname;
    }
}
<?php
namespace app\classes;

class Factory
{
    public static function build($class_name):object
    {
        $full_class_name = "\app\classes\\".$class_name;
        return new $full_class_name();

    }
}
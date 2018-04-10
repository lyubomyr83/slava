<?php
namespace app\classes;


class Mmenu extends Db1
{
    public function prepareMenu()
    {
        $sql = "SELECT id, menu_name FROM pages";
        $result = $this->sql($sql);

        return $result;
    }
}
<?php
namespace app\classes;


class Mmenu
{
    public function prepareMenu()
    {
        $sql = "SELECT id, menu_name FROM pages";

        $result = Db::getInstance()->sql($sql);
        return $result;
    }

    public function prepareContent($id)
    {
        $sql = "SELECT content FROM pages WHERE id='$id'";


        $result = Db::getInstance()->sql($sql);
        return $result;
    }
}
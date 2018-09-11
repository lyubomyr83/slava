<?php

namespace app\classes;


class Mpage
{
    public function preparePages()
    {
        $sql = "SELECT id, menu_name FROM pages";

        $result = Db::getInstance()->sql($sql);
        return $result;
    }

    public function preparePageForEdit($id)
    {
        $sql = "SELECT menu_name, content FROM pages WHERE id='{$id}'";

        $result = Db::getInstance()->sql($sql);
        return $result;
    }
}
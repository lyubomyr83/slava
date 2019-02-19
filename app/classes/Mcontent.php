<?php
namespace app\classes;

class Mcontent
{
    public function prepareContent($id)
    {
        $sql = "SELECT content, blog FROM pages WHERE id='$id'";

        $result = Db::getInstance()->read($sql);
        return $result;

    }
}
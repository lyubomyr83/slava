<?php


namespace app\classes;


class Mcontent
{
    public function prepareContent($id)
    {
        $sql = "SELECT content FROM pages WHERE id='$id'";


        $result = Db::getInstance()->sql($sql);
        return $result;
    }
}
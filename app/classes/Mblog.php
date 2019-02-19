<?php

namespace app\classes;


class Mblog
{
    public function prepareBlog()
    {
        $sql = "SELECT * FROM blog";
        $result = Db::getInstance()->read($sql);
        return $result;
    }

}
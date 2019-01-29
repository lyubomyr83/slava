<?php
namespace app\classes;


class Mauthorization
{
    public function getLogin($data)
    {

        $sql = "SELECT name FROM users WHERE login='{$data['login']}' AND password='{$data['password']}'";
        $result = Db::getInstance()->read($sql);
        return $result;

    }
}
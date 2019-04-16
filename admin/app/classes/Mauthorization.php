<?php
namespace app\classes;


class Mauthorization
{
    public function select_user($post)
    {
        $sql="SELECT name FROM users WHERE login='{$post['login']}' AND password='{$post['password']}'";
        $result=DB::getInstance()->read($sql);
        return $result;
    }

}
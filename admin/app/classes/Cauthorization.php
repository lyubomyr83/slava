<?php
namespace app\classes;

class Cauthorization extends Mauthorization
{
    public function getUser($user)
    {
        $result = $this->getLogin($user);

        $db_user = $result->fetch();

        $_SESSION['loged'] = $db_user['name'];

    }

}
<?php
namespace app\classes;


class Cauthorization extends Mauthorization
{
    public function __construct($user)
    {
        $result = $this->select_user($user);

        $loged = $result->fetch();
        if (!empty($loged))
        {
            $_SESSION['loged'] = $loged['name'];
            header('Refresh: 0; URL=index.php');
        }
    }
}
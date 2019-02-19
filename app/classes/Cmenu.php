<?php

namespace app\classes;


class Cmenu extends Mmenu
{
    public function getMenu()
    {
        $result = $this->prepareMenu();
        $menu = $result->fetchAll();
        return $menu;
    }


}
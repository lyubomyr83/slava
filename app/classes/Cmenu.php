<?php

namespace app\classes;


class Cmenu extends Mmenu
{
    public function getMenu()
    {
        $result = $this->prepareMenu();

        while ($row = mysqli_fetch_assoc($result))
        {
            $menu[] = $row;
        }

        return $menu;
    }
}
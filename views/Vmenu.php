<?php
$main_menu = new app\classes\Cmenu();
$menu = $main_menu->getMenu();

foreach ($menu as $value)
{
    echo $value['menu_name']."<br>";
}
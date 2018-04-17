<?php
$main_menu = new app\classes\Cmenu();
$menu = $main_menu->getMenu();

echo "<div id='menu'>";

foreach ($menu as $value)
{
    echo "<a href=\"index.php?page={$value['id']}\">".$value['menu_name']."</a><br>";
}

echo "</div>";


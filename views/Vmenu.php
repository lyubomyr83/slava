<?php
$main_menu = new app\classes\Cmenu();
$menu = $main_menu->getMenu();

echo "<div id='menu'>";

echo "<ul>";
foreach ($menu as $value)
{
    echo "<li><a href=\"index.php?page={$value['id']}\">".$value['menu_name']."</a></li>";
}

echo "</ul>";

echo "</div>";


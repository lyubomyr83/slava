<?php
echo "Список страниц";
$pageslist = $page->getPages();

echo "<div id='page'>";

echo "<ul>";
foreach ($pageslist as $value)
{
    echo "<li><a href=\"index.php?page=edit&id={$value['id']}\">".$value['menu_name']."</a> | " ;
    echo "<a href=\"index.php?page=edit&id={$value['id']}\">Редактировать</a> | ";
    echo "<a href=\"index.php?page=delete&id={$value['id']}\">Удалить</a>";
    echo " | создана: ".date("d.m.Y \в H:i:s",$value['created']);
    echo " | редактирована: ".date("d.m.Y \в H:i:s",$value['updated']);
}





echo "</ul>";

echo "</div>";
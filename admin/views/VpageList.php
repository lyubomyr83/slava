<?php
echo "Список страниц";
$pageslist = $page->getPages();

echo "<div id='page'>";

echo "<ul>";
foreach ($pageslist as $value)
{
    echo "<li><a href=\"index.php?page=edit&id={$value['id']}\">".$value['menu_name']."</a> | " ;
    echo "<a href=\"index.php?page=edit&id={$value['id']}\">Редактировать</a> | ";
    echo "<a href=\"index.php?page=delete&id={$value['id']}\">Удалить</a></li>";
}





echo "</ul>";

echo "</div>";
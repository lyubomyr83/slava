<?php
echo "Список страниц";
$pageslist = $page->getPages();

echo "<div id='page'>";

echo "<ul>";
foreach ($pageslist as $value)
{
    echo "<li><a href=\"index.php?page=edit&id={$value['id']}\">".$value['menu_name']."</a></li>";
}

echo "</ul>";

echo "</div>";
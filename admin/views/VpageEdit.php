<?php
$edit = $page->getPageForEdit();
foreach ($edit as $v)
{
    echo $v;
}
?>
<form method="post">
    <div class="row">
        <div class="col-md-2">Название в меню</div>
        <div class="col-md-4"><input type="text" name="menu_name" value="<?=$edit['menu_name']?>"></div>
    </div>
    <div class="row">
        <div class="col-md-2">Контент</div>
        <div class="col-md-4"><textarea name="content"></textarea></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4"><input type="submit" value="Обновить"></div>
    </div>
</form>
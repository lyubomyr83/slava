<?php
$edit = $page->getPageForEdit($_GET['id']);
?>
<form method="post">
<div class="row">
    <div class="col-md-2">Название в меню</div>
    <div class="col-md-4"><input type="text" name="menu_name" value="<?=$edit['menu_name']?>"></div>
</div>
<div class="row">
    <div class="col-md-2">Контент</div>
    <div class="col-md-4"><textarea name="content"><?=$edit['content']?></textarea></div>
</div>
    <div class="row">
        <div class="col-md-2">Блог</div>
        <div class="col-md-4"><input type="checkbox" name="blog" value="1" <?php if($edit['blog']){echo "checked";}?>>
        </div>
    </div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4"><input type="submit" value="Обновить"></div>
</div>
</form>
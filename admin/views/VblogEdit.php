<?php
/*$edit = $page->getPageForEdit($_GET['id']);*/
?>
<form method="post">
    <div class="row">
        <div class="col-md-2">Название статьи</div>
        <div class="col-md-4"><input type="text" name="post_header" value="<?=$edit['post_header']?>"></div>
    </div>
    <div class="row">
        <div class="col-md-2">Контент</div>
        <div class="col-md-4"><textarea name="post_content"><?=$edit['post_content']?></textarea></div>
    </div>
    <div class="row">
        <div class="col-md-2">Тэги</div>
        <div class="col-md-4"><textarea name="post_content"></textarea></div>
    </div>
    <div class="row">
        <div class="col-md-2">Категории</div>
        <div class="col-md-4"><textarea name="post_content"></textarea></div>
    </div>
    <div class="row">
        <div class="col-md-2">Изображение</div>
        <div class="col-md-4"><textarea name="post_content"></textarea></div>
    </div>
    <div class="row">
        <div class="col-md-2">Принадлежит странице</div>
        <div class="col-md-4"><input type="text" name="page_id"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4"><input type="submit" value="Обновить"></div>
    </div>
</form>

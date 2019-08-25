<?php
$categories = $blog->getCategoryList();
$pages = $page->getPages();
?>
Создать статью
<p></p>
<form method="post" >
    <input type="hidden" name="id">
    <div class="row">
        <div class="col-md-2">Название статьи</div>
        <div class="col-md-4"><input type="text" class="blogEditTitle" name="post_header" value="<?=$item['post_header']?>"></div>
    </div>
    <div class="row">
        <div class="col-md-2">Контент</div>
        <div class="col-md-4"><textarea name="post_content"><?=$item['post_content']?></textarea></div>
    </div>
    <div class="row">
        <div class="col-md-2">Тэги</div>
        <div class="col-md-4">
            <input type="text" class="blogEditTitle" name="tags" title="Тэги разделять запятой">
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">Категории</div>
        <div class="col-md-4">
            <select size="3" multiple name="category[]">
                <?php
                $all_categories = '';
                foreach ($categories as $category)
                {
                    $new_one= "<option value=\"{$category['id']}\" title='Выбор нескольких значений с помощью клавиши ctrl'>{$category['name']}</option>\n\t\t\t";
                    $all_categories .= $new_one;
                }
                echo $all_categories;
                ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">Изображение</div>
        <div class="col-md-4"><input type="file"  name="image" accept="image/*,image/jpeg"></div>
    </div>
    <div class="row">
        <div class="col-md-2">Принадлежит странице</div>
        <div class="col-md-4">
            <select name="page_id">
                <?php
                foreach ($pages as $page)
                {
                    echo "<option value=\"{$page['id']}\">{$page['menu_name']}</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4"><input type="submit" value="Обновить"></div>
    </div>
</form>

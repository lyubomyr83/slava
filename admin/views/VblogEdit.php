<?php
$item = $blog->getBlogItemForEdit($_GET['id']);
$cat= unserialize($item['category']);

var_dump($cat);

$pages = $blog->getPagesList();
$categories = $blog->getCategoryList();
?>
<form method="post">
    <input type="hidden" name="id" value="<?=$item['id']?>">
    <div class="row">
        <div class="col-md-2">Название статьи</div>
        <div class="col-md-4"><input type="text" name="post_header" value="<?=$item['post_header']?>"></div>
    </div>
    <div class="row">
        <div class="col-md-2">Контент</div>
        <div class="col-md-4"><textarea name="post_content"><?=$item['post_content']?></textarea></div>
    </div>
    <div class="row">
        <div class="col-md-2">Тэги</div>
        <div class="col-md-4">Выбор нескольких значений с помощью клавиши ctrl<br>
         <select>
                <?php


                ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">Категории</div>
        <div class="col-md-4">
         <select size="2" multiple name="category[]">
                <?php
                foreach ($categories as $category)
                {
                    foreach ($cat as $item_category_id)
                    {
                        if ($item_category_id == $category['id'])
                        {
                            echo "<option value=\"{$category['id']}\" selected>{$category['name']}</option>";
                        }
                        else
                        {
                            echo "<option value=\"{$category['id']}\">{$category['name']}</option>";
                        }
                    }

                }

                ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">Изображение</div>
        <div class="col-md-4"><></div>
    </div>
    <div class="row">
        <div class="col-md-2">Принадлежит странице</div>
        <div class="col-md-4">
            <select>
                <?php


                foreach ($pages as $page)
                {
                    $selected = ($item['page_id']==$page['id'])?"selected":"";
                    echo "<option value=\"{$page['id']}\" $selected>{$page['menu_name']}</option>";
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

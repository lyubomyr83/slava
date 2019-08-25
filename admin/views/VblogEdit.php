<?php
 /**
  * @var $item \app\classes\Cblog
  * @var $blog \app\classes\Cblog
  */

$item = $blog->getBlogItemForEdit($_GET['id']);
// массив с номерами категорий страницы блога
$cat= unserialize($item['category']);
$categories = $blog->getCategoryList();
$pages = $blog->getPagesList();

?>
<form method="post" >
    <input type="hidden" name="id" value="<?=$item['id']?>">
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
            <input type="text" class="blogEditTitle" name="tags" value="<?=$item['tags']?>" title="Тэги разделять запятой">
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
                foreach ($cat as $item_category_id)
                    {
                        $replace = str_replace( "value=\"{$item_category_id['id']}\"", "value=\"{$item_category_id['id']}\" selected", $all_categories);
                        $all_categories=$replace;
                    }
                echo $all_categories;
                ?>
        </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">Изображение</div>
        <div class="col-md-4"><img src="../img/<?=$item['image']?>" width="200px" title="Это изображение отображается на сайте сейчас">
            <input type="file"  name="image" accept="image/*,image/jpeg"></div>
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
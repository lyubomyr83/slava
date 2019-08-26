<?php
$bloglist = $blog->getBlog($_POST['page_id']);
?>
<div class="col-md-10">
    <div id='page' class="row pageListHeader">
        <div class="col-md-3">Название статьи</div>
        <div class="col-md-2">Приинадлежит странице</div>
        <div class="col-md-1">Редактировать</div>
        <div class="col-md-1">Удалить</div>
        <div class="col-md-2">Дата создания</div>
        <div class="col-md-2">Дата редактирования</div>
    </div>
    <?php
    foreach ($bloglist as $value)
    {
    $page_name = $page->getPageName($value['page_id']);
    ?>
    <div id='page' class="row pageListRow">
        <div class="col-md-3 pageListRowPageName"><?=$value['post_header']?></div>
        <div class="col-md-2 pageListRowPageName"><?=$page_name['menu_name']?></div>
        <div class="col-md-1 pageListRowPageDelete"><a class="btn btn-warning btn-lg" href="index.php?page=blog_edit&id=<?=$value['id']?>"><span class="glyphicon glyphicon-pencil" title="Редактировать"></span></a></button></div>
        <div class="col-md-1 pageListRowPageDelete"><a class="btn btn-danger btn-lg"  href="index.php?page=blog_delete&id=<?=$value['id']?>"><span class="glyphicon glyphicon-trash" title="Удалить"></span></a></button></div>
        <div class="col-md-2"><?php echo date("d.m.Y \в H:i:s",$value['created']);?></div>
        <div class="col-md-2">
        <?php
        if ($value['updated'])
        {
            echo date("d.m.Y \в H:i:s",$value['updated']);
        }
        else
        {
        echo "Нет изменений";
        }
        ?>
       </div>
    </div>
    <hr>
    <?php
    }
    ?>
</div>
<div class="col-md-2">
    <form method="post">
        Принадлежит странице:
        <?php
        $pages_names = $page->getPageWithBlog();
        foreach ($pages_names as $pages_name)
        {
            echo "<li><input type='checkbox' name='page_id[]' value='{$pages_name["id"]}'> {$pages_name['menu_name']}</li>";
        }
        ?>
        <input type="submit" value="Применить">
    </form>
</div>

<?php
$bloglist = $blog->getBlog();
?>
    <div id='page' class="row pageListHeader">
        <div class="col-md-2">Название статьи</div>
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
        <div class="col-md-2 pageListRowPageName"><?=$value['post_header']?></div>
        <div class="col-md-2 pageListRowPageName"><?=$page_name['menu_name']?></div>
        <div class="col-md-1 pageListRowPageDelete"><a class="btn btn-warning btn-lg" href="index.php?page=blog_edit&id=<?=$value['id']?>"><span class="glyphicon glyphicon-pencil" title="Редактировать"></span></a></button></div>
        <div class="col-md-1 pageListRowPageDelete"><a class="btn btn-danger btn-lg"  href="index.php?page=blog_delete&id=<?=$value['id']?>"><span class="glyphicon glyphicon-trash" title="Удалить"></span></a></button></div>
        <div class="col-md-2"><?php echo date("d.m.Y \в H:i:s",$value['created_at']);?></div>
        <div class="col-md-2">
        <?php
        if ($value['updated_at'])
        {
            echo date("d.m.Y \в H:i:s",$value['updated_at']);
        }
        ?>
       </div>
    </div>
    <hr>
    <?php
}
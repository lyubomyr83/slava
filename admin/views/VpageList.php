<?php
$pageslist = $page->getPages();
?>
<div id='page' class="row pageListHeader">
    <div class="col-md-2">Название страницы</div>
    <div class="col-md-2">Редактировать</div>
    <div class="col-md-2">Удалить</div>
    <div class="col-md-2">Дата создания</div>
    <div class="col-md-2">Дата редактирования</div>
</div>
<?php
foreach ($pageslist as $value)
{
    ?>
    <div id='page' class="row pageListRow">
        <div class="col-md-2 pageListRowPageName"><a class="btn btn-success" href="index.php?page=edit&id=<?=$value['id']?>"><?=$value['menu_name']?></a></div>
        <div class="col-md-2 pageListRowPageDelete"><a class="btn btn-warning btn-lg" href="index.php?page=edit&id=<?=$value['id']?>"><span class="glyphicon glyphicon-pencil" title="Редактировать"></span></a></button></div>
        <div class="col-md-2 pageListRowPageDelete"><a class="btn btn-danger btn-lg"  href="index.php?page=delete&id=<?=$value['id']?>"><span class="glyphicon glyphicon-trash" title="Удалить"></span></a></button></div>
        <div class="col-md-2"><?php echo date("d.m.Y \в H:i:s",$value['created']);?></div>
        <div class="col-md-2">
        <?php
        if ($value['updated'])
        {
            echo date("d.m.Y \в H:i:s",$value['updated']);
        }
        ?>
       </div>
    </div>
<?php
}
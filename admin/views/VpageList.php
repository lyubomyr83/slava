<?php
$pageslist = $page->getPages();

foreach ($pageslist as $value)
{
    ?>
    <div id='page' class="row"> 
        <div class="col-md-2"><a href="index.php?page=edit&id=<?=$value['id']?>"><?=$value['menu_name']?></a></div>
        <div class="col-md-2"><a href="index.php?page=edit&id=<?=$value['id']?>">Редактировать</a></div>
        <div class="col-md-2"><a href="index.php?page=delete&id=<?=$value['id']?>">Удалить</a></div>
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
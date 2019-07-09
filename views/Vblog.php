<div id="news" class="row">
    <div class="col-md-4 column"><img src='img/<?=$post_item['image']?>'></div>
    <div class="col-md-8 content next">
        <h2><?=$post_item['post_header']?></h2>
        <?php
        $content = substr($post_item['post_content'],0,1300);
        $content = trim_to_dot($content);
        ?>
        <?=$content?>
        <div class="row">
            <div class="col-md-4 content"><a href="?news=#">далее</a></div>
            <div class="col-md-4 col-md-offset-4"><span class="glyphicon glyphicon-user"> <?=$post_item['author'] ?></span><span class="glyphicon glyphicon-time"> <?=date("d.m.Y",$post_item['created_at'] )?></span></div>
        </div>
    </div>
</div>


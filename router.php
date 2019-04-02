<?php
use app\classes\Factory;

if($_GET)
{
    if($_GET['page'])
    {

        $content = Factory::getClassInst('Ccontent');
        $content_for_page = $content->getContent($_GET['page']);

        echo $content_for_page['content'];
        if ($content_for_page['blog']==1)
        {
           $post = Factory::getClassInst("Cblog");
           $posts = $post->getBlog();

           foreach ($posts as $post_item )
           {
            ?>
            <div id="news" class="row">
                <div class="col-md-3 column"><img src='img/<?=$post_item['image']?>'></div>
                <div class="col-md-9 content next">
                    <h2><?=$post_item['post_header']?></h2>
                    <?php
                        $content = substr($post_item['post_content'],0,1000);
                        $content = trim_to_dot($content);
                    ?>
                    <?=$content?>
                    <a href="?news=#">далее</a>
                    <span class="glyphicon glyphicon-user"></span>
                    <span class="glyphicon glyphicon-time"></span>

                </div>
            </div>

            <?php
           }
        }
    }
}
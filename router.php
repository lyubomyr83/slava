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
                <div class="row news">
                    <div class="col-md-4"><img class="img_news_title" src="img/<?=$post_item['image'] ?>"></div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12"><h2><?=$post_item['post_header']?></h2></div>
                        </div>
                        <div class="row news_title_content">
                            <?php
                            $content = substr($post_item['post_content'],0,1000);
                            ?>
                            <div class="col-md-12"><?=$content."..."?></div>
                            <a href="#">Читать далее</a>
                        </div>
                    </div>
                </div>

            <?php
           }
        }
    }
}
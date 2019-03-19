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
                    <div class="col-md-3 news_img"><img src="img/<?=$post_item['image'] ?>"></div>
                    <div class="col-md-9 news_content">
                        <div class="row">
                            <div class="col-md-12"><h2><?=$post_item['post_header']?></h2></div>
                        </div>
                        <div class="row news_title_content">
                            <?php
                            $content = substr($post_item['post_content'],0,1000);
                            $content = trim_to_dot($content);
                            ?>
                            <div class="col-md-12"><?=$content?></div>
                        </div>
                        <div class="row next">
                            <div class="col-md-12"><a href="#">Далее</a></div>
                        </div>
                    </div>
                </div>

            <?php
           }
        }
    }
}
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
                <div class="row">
                    <div class="col-md-4"><img src="img/<?=$post_item['image'] ?>"></div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12"><h2><?=$post_item['post_header']?></h2></div>
                        </div>
                        <div class="row">

                            <div class="col-md-12"><?=$post_item['post_content'] ?></div>
                        </div>
                    </div>
                </div>

            <?php
           }
        }
    }
}
<?php
use app\classes\Factory;

/* @var $post \app\classes\Cblog */

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


           $posts = $post->getBlog($_GET['page'],$_POST);
           var_dump($posts);
           $categories = $post->getCategoryList();
           ?>
           <div id="blog" class="row">
               <div class="col-md-10 column"><?php
                    foreach ($posts as $post_items )
                    {
                        if (is_array($post_items))
                        {
                            foreach ($post_items as $post_item)
                            {
                                require_once "views/Vblog.php";
                            }
                        }
                        else
                        {
                            require_once "views/Vblog.php";
                        }

                    }
               ?>
               </div>
               <div class="col-md-2 category">
                    <?php require_once "views/Vcategories.php";?>
               </div>
           </div>
           <?php
        }
    }
}

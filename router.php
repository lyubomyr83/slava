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
           $posts = $post->getBlog($_GET['page']);
           $categories = $post->getCategoryList();
           ?>
           <div id="blog" class="row">
           <div class="col-md-10 column">
           <?php
                foreach ($posts as $post_item )
                {
                    ?>
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
                    <?php
                }
           ?>
           </div>
               <?php
               echo "Выберите категории";
               foreach ($categories as $category)
               {
                   ?>
                   <div class="col-md-2 category">
                       <input type="checkbox" name="category_name" value="1"><?=$category['name']; ?>
                   </div>
                   <?php
               }
               ?>
               <br>
               <input type="submit" value="Вывести">
           </div>
           <?php
        }
    }
}

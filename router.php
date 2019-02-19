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
           echo "Это блог";
           $post = Factory::getClassInst("Cblog");
           $posts = $post->getBlog();
           echo "<PRE>";
                var_export($posts);
            echo "</PRE>";

        }


    }
}
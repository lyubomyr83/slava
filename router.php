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


           $posts = $post->getBlog($_GET['page'],$_POST['category_name']);

           $categories = $post->getCategoryList();

           require_once "views/Vblog.php";

        }
    }
}

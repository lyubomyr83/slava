<?php

if($_GET)
{
    if($_GET['page'])
    {
        $content = new \app\classes\Ccontent();
        $content_for_page = $content->getContent($_GET['page']);

        echo $content_for_page['content'];
    }
}
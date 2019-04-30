<?php
namespace app\classes;


class Cblog extends Mblog
{
    public function getBlog($page_id)
    {
        $blog = $this->prepareBlog($page_id);
        $all_posts = $blog->fetchAll();
        return $all_posts;
    }
}
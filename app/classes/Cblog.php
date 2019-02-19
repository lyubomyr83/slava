<?php
namespace app\classes;


class Cblog extends Mblog
{
    public function getBlog()
    {
        $blog = $this->prepareBlog();
        $all_posts = $blog->fetchAll();
        return $all_posts;
    }
}
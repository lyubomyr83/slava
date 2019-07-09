<?php
namespace app\classes;


class Cblog extends Mblog
{
    public function getBlog($page_id, $categories=null)
    {
        if ($categories)
            {
                $blog = $this->prepareBlog($page_id, $categories);
            }
        else
            {
                $blog = $this->prepareBlog($page_id);
            }
        $result = $blog->fetchAll();
        return $result;
    }

    public function getCategoryList()
    {
        $result = $this->prepareCategorylist();
        $categories = $result->fetchAll();
        return $categories;
    }
}
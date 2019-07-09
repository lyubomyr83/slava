<?php
namespace app\classes;


class Mblog
{
    public function prepareBlog($page_id, $categories=null)
    {
        if ($categories)
        {
            foreach ($categories as $category)
                {
                    $sql = "SELECT * FROM blog WHERE page_id='{$page_id}' AND category='{$category}' ";
                    $result = Db::getInstance()->read($sql);
                    return $result;
                }
        }
        else
            {
                $sql = "SELECT * FROM blog WHERE page_id='{$page_id}'";
                $result = Db::getInstance()->read($sql);
                return $result;
            }
    }
    public function prepareCategorylist()
    {
        $sql = "SELECT * FROM categories";
        $result = Db::getInstance()->read($sql);
        return $result;
    }

}
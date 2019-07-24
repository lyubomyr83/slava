<?php
namespace app\classes;


class Mblog
{
    public function prepareBlog($page_id, $category=null)
    {
        $sql = "SELECT * FROM blog WHERE page_id='{$page_id}'";
        if ($category)
        {
            $sql .= " AND category='a:1:{i:0;s:1:\"'{$category}'\";}'";

        }
        $result = Db::getInstance()->read($sql);
        return $result;
    }

    public function prepareCategorylist()
    {
        $sql = "SELECT * FROM categories";
        $result = Db::getInstance()->read($sql);
        return $result;
    }

}
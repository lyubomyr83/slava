<?php
namespace app\classes;


class Mblog
{
    public function prepareBlog($page_id, $category=null)
    {
        $sql = "SELECT * FROM blog WHERE page_id='{$page_id}'";
        if ($category)
        {
            $sql .=  " AND (category LIKE ";

            foreach ($category as $one_category)
            {
                $sql .= "'%:\"{$one_category}\";%' OR category LIKE ";

            }
            $sql = substr($sql,0,-18);
            $sql .=")";
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
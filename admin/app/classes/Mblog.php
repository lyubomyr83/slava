<?php

namespace app\classes;


class Mblog
{
    public function prepareBlog()
    {
        $sql = "SELECT * FROM blog";
        $result = Db::getInstance()->read($sql);
        return $result;
    }

    public function preparePagesList()
    {
        $sql = "SELECT id,menu_name FROM pages WHERE blog='1'";
        $result = Db::getInstance()->read($sql);
        return $result;
    }

    public function prepareCategorylist()
    {
        $sql = "SELECT * FROM categories";
        $result = Db::getInstance()->read($sql);
        return $result;
    }

    public function prepareBlogItemForEdit($id)
    {
        $sql = "SELECT id,post_header, post_content, tags, category, image, author, page_id FROM blog WHERE id='{$id}'";

        $result = Db::getInstance()->read($sql);
        return $result;
    }

    public function EditBlogItem($post)
    {
        Db::getInstance()->update("blog",$post,['id'=>$post['id']],true);
    }

}

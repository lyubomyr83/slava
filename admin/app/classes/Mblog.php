<?php

namespace app\classes;


class Mblog
{
    public function prepareBlog($post=null)
    {
        $sql = "SELECT * FROM blog";
        if ($post)
        {   $sql .= " WHERE ";
            foreach ($post as $id)
            {
                $sql .= "page_id='{$id}' OR ";
            }
            $sql = substr($sql,0,-3);
        }
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

    public function updateTags($tags)
    {
        foreach ($tags as $tag)
            {
                $sql = "INSERT INTO tags (tag) VALUES ('{$tag}')";
                Db::getInstance()->read($sql);
            }
    }

    public function AddBlog($post)
    {
        Db::getInstance()->create("blog",$post, TRUE);
    }

}

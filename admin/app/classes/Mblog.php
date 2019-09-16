<?php

namespace app\classes;


class Mblog
{
    public function prepareBlog($page=null,$tags=null)
    {
        $sql = "SELECT * FROM blog";
        if ($page)
        {
            $sql .= " WHERE ";
            foreach ($page as $id)
            {
                $sql .= "page_id='{$id}' OR ";
            }
            $sql = substr($sql,0,-3);

            if ($tags)
            {
                $sql .= "AND (tags LIKE ";
                foreach ($tags as $tag)
                {
                    $sql .= "'%{$tag}%' OR tags LIKE ";
                }
                $sql = substr($sql,0,-14);
                $sql .=")";
            }
        }
        if (!$page)
        {
            if ($tags)
            {
                $sql .= " WHERE (tags LIKE ";
                foreach ($tags as $tag)
                {
                    $sql .= "'%{$tag}%' OR tags LIKE ";
                }
                $sql = substr($sql,0,-14);
                $sql .=")";
            }
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
        $query = "SELECT tag FROM tags";
        $all_tags = Db::getInstance()->read($query);
        $tagsfromdb = $all_tags->fetchAll();

        $tagsdb = '';
        foreach ($tagsfromdb as $tags_db)
        {
            foreach ($tags_db as $tagdb)
            {
                $tagsdb .= $tagdb;
                $tagsdb .= ",";
            }
        }
        $tag_db = explode (",", $tagsdb);
        foreach ($tags as $tag)
        {
            if (!in_array($tag,$tag_db))
            {
                $sql = "INSERT INTO tags (tag) VALUES ('{$tag}')";
                Db::getInstance()->read($sql);
            }
        }
    }

    public function AddBlog($post)
    {
        Db::getInstance()->create("blog",$post, TRUE);
    }

    public function prepareTags()
    {
        $sql = "SELECT * FROM tags";
        $result = Db::getInstance()->read($sql);
        return $result;
    }

}

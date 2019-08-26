<?php

namespace app\classes;


class Mpage
{
    public function preparePages()
    {
        $sql = "SELECT id, menu_name, created, updated FROM pages";

        $result = Db::getInstance()->read($sql);
        return $result;
    }

    public function preparePageName($id)
    {
        $sql = "SELECT menu_name FROM pages WHERE id='{$id}'";

        $result = Db::getInstance()->read($sql);
        return $result;
    }

    public function preparePageForEdit($id)
    {
        $sql = "SELECT menu_name, content, blog FROM pages WHERE id='{$id}'";

        $result = Db::getInstance()->read($sql);
        return $result;
    }

    public function EditPage($id,$post)
    {


        if (!$post['blog'])
        {
            $post['blog'] = 0;
        }

        Db::getInstance()->update("pages",$post,array('id'=>$id), TRUE);
    }

    public function AddPage($post)
    {
        Db::getInstance()->create("pages",$post, TRUE);
    }

    public function DeletePage($id)
    {
        Db::getInstance()->delete("pages",$id);
    }

    public function preparePageWithBlog()
    {
        $sql = "SELECT id, menu_name FROM pages WHERE blog = '1'";
        $result = Db::getInstance()->read($sql);
        return $result;
    }
}
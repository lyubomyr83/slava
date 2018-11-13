<?php

namespace app\classes;


class Mpage
{
    public function preparePages()
    {
        $sql = "SELECT id, menu_name FROM pages";

        $result = Db::getInstance()->read($sql);
        return $result;
    }

    public function preparePageForEdit($id)
    {
        $sql = "SELECT menu_name, content FROM pages WHERE id='{$id}'";

        $result = Db::getInstance()->read($sql);
        return $result;
    }

    public function EditPage($id,$post)
    {
            Db::getInstance()->update("pages",$_POST,array('id'=>$id));
    }


}
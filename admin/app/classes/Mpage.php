<?php

namespace app\classes;


class Mpage
{
    public function preparePages()
    {
        $sql = "SELECT id, menu_name FROM pages";

        $result = Db::getInstance()->sql($sql);
        return $result;
    }

    public function preparePageForEdit($id)
    {
        $sql = "SELECT menu_name, content FROM pages WHERE id='{$id}'";

        $result = Db::getInstance()->sql($sql);
        return $result;
    }

    public function EditPage($id,$post)
    {
        $sql = "UPDATE pages SET ";

        foreach ($post as $column=>$value)
        {
            $sql .= $column." = '".$value."',";
        }

        $sql = substr($sql,0,-1);

        $sql .= " WHERE id='{$id}'";
        echo $sql;

        //$result = Db::getInstance()->sql($sql);
        //return $result;
    }


}
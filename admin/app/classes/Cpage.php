<?php
namespace app\classes;

class Cpage extends Mpage
{

    public function getPages()
    {
        $result = $this->preparePages();
        $pages = $result->fetchAll();
        return $pages;
    }


    public function getPageForEdit($id)
    {
        $result = $this->preparePageForEdit($id);
        $pages= $result->fetch();

        return $pages;
    }

    public function prepareAddPage($post)
    {
        $this->AddPage($post);
    }
}
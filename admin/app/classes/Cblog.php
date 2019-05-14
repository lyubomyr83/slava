<?php
namespace app\classes;

class Cblog extends Mblog
{


    public function getBlog()
    {
        $result = $this->prepareBlog();
        $blog = $result->fetchAll();
        return $blog;
    }


   /* public function getPageForEdit($id)
    {
        $result = $this->preparePageForEdit($id);
        $pages= $result->fetch();

        return $pages;
    }

    public function prepareAddPage($post)
    {
        $this->AddPage($post);
    }*/
}
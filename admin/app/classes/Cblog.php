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

    public function getPagesList()
    {
        $result = $this->preparePagesList();
        $pages = $result->fetchAll();
        return $pages;
    }

    public function getCategoryList()
    {
        $result = $this->prepareCategorylist();
        $categories = $result->fetchAll();
        return $categories;
    }

    public function getBlogItemForEdit($id)
    {
        $result = $this->prepareBlogItemForEdit($id);
        $item= $result->fetch();

        return $item;
    }

    public function prepareEditBlogItem($post)
    {
        $post['category'] = serialize($post['category']);
        $this->EditBlogItem($post);
    }
}
<?php
namespace app\classes;

class Cblog extends Mblog
{


    public function getBlog($post=null)
    {
        $result = $this->prepareBlog($post);
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

    public function prepareUpdateTags ($tags)
    {
        $arrayTags = explode (",", $tags);
        $this->updateTags($arrayTags);
    }

    public function prepareAddBlog($newone)
    {
        $newone['category'] = serialize($newone['category']);
        $this->AddBlog($newone);
    }

    public function getTags()
    {
        $result = $this->prepareTags();
        $tags  = $result->fetchAll();
        return $tags;

    }

}
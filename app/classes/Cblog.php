<?php
namespace app\classes;


class Cblog extends Mblog
{
    public function getBlog($page_id, $categories=null)
    {
        echo "<PRE>";
        var_dump($categories);
        echo "</PRE>";
        $blog = $this->prepareBlog($page_id);
        $result = $blog->fetchAll();

        if ($categories)
        {
            foreach ($result as $item)
            {
                foreach ($item as $k=>$v)
                {
                    if ($k == 'category')
                    {
                        $ct_unserialized = unserialize($v);
                        foreach ($ct_unserialized as $ct_id)
                        {
                            if (array_search('{$ct_id}',$categories))
                            {
                                // если десерелизованная категория есть в POST со списком выбранных категорий

                            }
                        }
                    }
                }
            }


            foreach ($result['category'])


        }
        else
        {

        }


        return $blog_items;
    }

    public function getCategoryList()
    {
        $result = $this->prepareCategorylist();
        $categories = $result->fetchAll();
        return $categories;
    }
}
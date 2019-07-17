<?php
namespace app\classes;


class Cblog extends Mblog
{
    public function getBlog($page_id, $categories=null)
    {


        $blog = $this->prepareBlog($page_id);
        $result = $blog->fetchAll();

            // если выбраны конкретные категории
            if ($categories)
            {
                foreach ($result as $item)
                {
                    foreach ($item as $k=>$v)
                    {
                        if ($k == 'category')
                        {
                            $ct_unserialized = unserialize($v);
                            // смотрим список всех выбранных пользователем категорий
                            foreach ($categories as $category)
                            {
                                 if (array_search($category,$ct_unserialized))
                                 {

                                         $blog_items[] = $item;
                                         echo "ok";

                                 }
                            }
                        }
                    }
                }
            }
            else
            {
                $blog_items = $result;
            }

/*        echo "???<PRE>";
        var_dump($blog_items);
        echo "???</PRE>";*/
        return $blog_items;
    }

    public function getCategoryList()
    {
        $result = $this->prepareCategorylist();
        $categories = $result->fetchAll();
        return $categories;
    }
}
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
                                //сравнивает запрошенные категории с категориями к которым принадлежит статья блога
                                 $find = array_search($category,$ct_unserialized);
                                 if ($find)
                                 {
                                     $blog_items[] = $item;
                                     //попытка провести обычный запрос, чтобы вывести статью с одной категорией
                                     $blog_cat = $this->prepareBlog($page_id, $category);
                                     echo $blog_cat->fetchAll();

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

        return $blog_items;
    }

    public function getCategoryList()
    {
        $result = $this->prepareCategorylist();
        $categories = $result->fetchAll();
        return $categories;
    }
}
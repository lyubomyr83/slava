<?php
namespace app\classes;


class Cblog extends Mblog
{
    public function getBlog($page_id, $categories=null)
    {

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
                            foreach ($categories as $category)
                            {
                                 if (array_search($category,$ct_unserialized))
                                 {
                                     $ct = serialize($ct_unserialized);
                                     if (array_search($ct,$item))
                                     {
                                         echo "<PRE>";
                                         var_dump($item);
                                         echo "</PRE>";
                                         $blog_items[] = $item;

                                     }
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
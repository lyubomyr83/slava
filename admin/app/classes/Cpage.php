<?php
namespace app\classes;

class Cpage extends Mpage
{

    public function getPages()
    {
        $result = $this->preparePages();

        while ($row = mysqli_fetch_assoc($result))
        {
            $pages[] = $row;
        }

        return $pages;
    }


    public function getPageForEdit($id)
    {
        $result = $this->preparePageForEdit($id);
        $pages[] = mysqli_fetch_assoc($result);

        return $pages;
    }
}
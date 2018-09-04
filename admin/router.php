<?php

if($_GET)
{
    if($_GET['page'])
    {
        $page = new \app\classes\Cpage();

        switch ($_GET['page'])
        {
            case "page_list":
                require_once "views/VpageList.php";
                break;
            case "page_add":
                require_once "views/VpageAdd.php";
                break;
        }
    }


}
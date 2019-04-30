<?php
/* @var $page \app\classes\Cpage*/
// если пользователь не авторизован
if (!$_SESSION['loged'])
{
    if($_POST)
    {
        if($_GET['page']=='authorization')
        {
            $authorization = new app\classes\Cauthorization($_POST);
        }
    }
    else
    {
        require_once "views/Vauthorization.php";
    }

}
else
{
    if($_GET['page'])
    {
        switch ($_GET['page'])
        {
            case "page_list":
                require_once "views/VpageList.php";
                break;
            case "page_add":

                if(!$_POST)
                {
                    require_once "views/VpageAdd.php";
                }
                else
                {
                    $page->prepareAddPage($_POST);
                }
                break;
            case "edit":
                if(!$_POST)
                {
                    require_once "views/VpageEdit.php";
                }
                else
                {
                    $page->EditPage($_GET['id'],$_POST);
                }
                break;
            case "delete":
                $page->DeletePage($_GET['id']);
                break;
            case "blog_list":
                require_once "views/VblogList.php";
                break;
            case "blog_add":
                require_once 'views/VblogAdd.php';
                break;
            case "exit":
                unset($_SESSION['loged']);
                header('Refresh: 0; URL=index.php');
                break;
        }

    }
}










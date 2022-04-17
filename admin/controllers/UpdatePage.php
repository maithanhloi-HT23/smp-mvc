<?php
class UpdatePage
{
    public function __construct()
    {
    }

    public function updatePage()
    {
        include "../controllers/UpdatePage.php";
        $pagetype = $_GET['type'];
        $pagedetails = $_POST['pgedetails'];
        $page = new Page();
        if($page->Update($pagetype, $pagedetails)){
            return true;
        }else{
            return false;
        }        
    }
}

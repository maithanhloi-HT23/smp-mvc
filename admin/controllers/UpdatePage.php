<?php
class UpdatePage
{
    public function __construct()
    {
    }

    public function updatePage()
    {
        include "../models/Page.php";
        $page = new Page();

        $pagetype = $_GET['type'];
		$pagedetails = $_POST['pgedetails'];
        if($page->Update($pagetype, $pagedetails) == true){
            return true;
        }else{
            return false;
        }        
    }
}

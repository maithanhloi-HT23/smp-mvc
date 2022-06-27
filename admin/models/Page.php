<?php
class Page
{
    public function __construct()
    {
    }

    public function Update($pagetype, $pagedetails)
    {
        include "../includes/config.php";

        $sql = "UPDATE tblpages SET detail=:pagedetails WHERE type=:pagetype";
		$query = $dbh->prepare($sql);
		$query->bindParam(':pagetype', $pagetype, PDO::PARAM_STR);
		$query->bindParam(':pagedetails', $pagedetails, PDO::PARAM_STR);
		
        if($query->execute() == true){
            return true;
        }else{
            return false;
        }
    }
}

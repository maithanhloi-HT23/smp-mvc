<?php
class Enquiry
{

    public function __construct()
    {
    }

    public function getCoutEnquiry()
    {
        include '../includes/config.php';
        $sql = "SELECT id from tblenquiry";
        $query = $dbh->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $cnt = $query->rowCount();
        return $cnt;
    }

    public function read($status, $eid){
        include '../includes/config.php';
        $sql = "UPDATE tblenquiry SET Status=:status WHERE  id=:eid";
		$query = $dbh->prepare($sql);
		$query->bindParam(':status', $status, PDO::PARAM_STR);
		$query->bindParam(':eid', $eid, PDO::PARAM_STR);
		if($query->execute()){
            return true;
        }else{
            return false;
        }
    }

}

<?php
class ReadEnquiry{
    public function __construct()
    {
    }

    public function readEnquiry(){
        include "../models/Enquiry.php";
        $eid = intval($_GET['eid']);
		$status = 1;
        $Enquiry = new Enquiry();
        if($Enquiry->read($status, $eid) == true){
            return true;
        }else{
            return false;
        }       
    }
}
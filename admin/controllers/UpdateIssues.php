<?php
class UpdateIssues{

    public function __construct()
    {
    }

    public function updateIssues($iid, $remark)
    {
       include "../models/Issues.php";
       $iid = intval($_GET['iid']);
       $remark = $_POST['remark'];
       $issues = new Issues();
       if($issues->update($iid, $remark) == true){
           return true;
       }else{
           return false;
       }
    }
}
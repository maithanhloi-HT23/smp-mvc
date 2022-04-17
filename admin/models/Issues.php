<?php
class Issues
{

    public function __construct()
    {
    }

    public function getCoutIssues()
    {
        include '../includes/config.php';
        $sql = "SELECT id from tblissues";
        $query = $dbh->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        $cnt = $query->rowCount();
        return $cnt;
    }

    public function update($iid, $remark)
    {
        include '../includes/config.php';
        $sql = "UPDATE tblissues SET AdminRemark=:remark WHERE  id=:iid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':remark', $remark, PDO::PARAM_STR);
        $query->bindParam(':iid', $iid, PDO::PARAM_STR);
        if($query->execute()){
            return true;
        }else{
            return false;
        }
    }
}

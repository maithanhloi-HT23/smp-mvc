<?php
class Product
{
    public function __construct()
    {
    }

    public function getCoutProduct()
    {
        include '../includes/config.php';
        $sql = "SELECT PackageId from tbltourpackages";
        $query = $dbh->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $cnt = $query->rowCount();
        return $cnt;
    }

    public function CreatePackge($pname, $ptype, $plocation, $pprice, $pfeatures, $pdetails, $pimage){
        include('../includes/config.php');
        $sql = "INSERT INTO tbltourpackages(PackageName,PackageType,PackageLocation,PackagePrice,PackageFetures,PackageDetails,PackageImage) VALUES(:pname,:ptype,:plocation,:pprice,:pfeatures,:pdetails,:pimage)";
		$query = $dbh->prepare($sql);
		$query->bindParam(':pname', $pname, PDO::PARAM_STR);
		$query->bindParam(':ptype', $ptype, PDO::PARAM_STR);
		$query->bindParam(':plocation', $plocation, PDO::PARAM_STR);
		$query->bindParam(':pprice', $pprice, PDO::PARAM_STR);
		$query->bindParam(':pfeatures', $pfeatures, PDO::PARAM_STR);
		$query->bindParam(':pdetails', $pdetails, PDO::PARAM_STR);
		$query->bindParam(':pimage', $pimage, PDO::PARAM_STR);
		$query->execute();
		$lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
			return true;
		} else {
			return false;
		}
    }

    public function UpdatePackge($pname, $ptype, $plocation, $pprice, $pfeatures, $pdetails)
    {
        include('../includes/config.php');
        $sql = "update TblTourPackages set PackageName=:pname,PackageType=:ptype,PackageLocation=:plocation,PackagePrice=:pprice,PackageFetures=:pfeatures,PackageDetails=:pdetails where PackageId=:pid";
		$query = $dbh->prepare($sql);
		$query->bindParam(':pname', $pname, PDO::PARAM_STR);
		$query->bindParam(':ptype', $ptype, PDO::PARAM_STR);
		$query->bindParam(':plocation', $plocation, PDO::PARAM_STR);
		$query->bindParam(':pprice', $pprice, PDO::PARAM_STR);
		$query->bindParam(':pfeatures', $pfeatures, PDO::PARAM_STR);
		$query->bindParam(':pdetails', $pdetails, PDO::PARAM_STR);
		$query->bindParam(':pid', $pid, PDO::PARAM_STR);
		if($query->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function PackgeChangeImg($imgid, $pimage)
    {
        include('../includes/config.php');
        $sql = "update TblTourPackages set PackageImage=:pimage where PackageId=:imgid";
		$query = $dbh->prepare($sql);
		$query->bindParam(':imgid', $imgid, PDO::PARAM_STR);
		$query->bindParam(':pimage', $pimage, PDO::PARAM_STR);
		if($query->execute()){
            return true;
        }else{
            return false;
        }
    }
}

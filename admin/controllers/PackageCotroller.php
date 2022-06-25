<?php

class PackageController{

    public function __construct()
    {
    }

    public function Create()
    {
        include '../models/Product.php';
        $product = new Product();

        $pname = $_POST['packagename'];
		$ptype = $_POST['packagetype'];
		$plocation = $_POST['packagelocation'];
		$pprice = $_POST['packageprice'];
		$pfeatures = $_POST['packagefeatures'];
		$pdetails = $_POST['packagedetails'];
		$pimage = $_FILES["packageimage"]["name"];
		move_uploaded_file($_FILES["packageimage"]["tmp_name"], "../pacakgeimages" . $_FILES["packageimage"]["name"]);
        if ($product->CreatePackge($pname, $ptype, $plocation, $pprice, $pfeatures, $pdetails, $pimage)) {
			return true;
		} else {
			return false;
		}
    }

    public function Update()
    {
        include '../models/Product.php';
        $product = new Product();

        $pname = $_POST['packagename'];
		$ptype = $_POST['packagetype'];
		$plocation = $_POST['packagelocation'];
		$pprice = $_POST['packageprice'];
		$pfeatures = $_POST['packagefeatures'];
		$pdetails = $_POST['packagedetails'];
		move_uploaded_file($_FILES["packageimage"]["tmp_name"], "../pacakgeimages" . $_FILES["packageimage"]["name"]);
		
        if ($product->UpdatePackge($pname, $ptype, $plocation, $pprice, $pfeatures, $pdetails)) {
			return true;
		} else {
			return false;
		}
    }

	public function ChangeImg()
	{
		include '../models/Product.php';
        $product = new Product();
		$pimage = $_FILES["packageimage"]["name"];
		move_uploaded_file($_FILES["packageimage"]["tmp_name"], "pacakgeimages/" . $_FILES["packageimage"]["name"]);
		
		if ($product->PackgeChangeImg($imgid, $pimage) == true) {
			return true;
		} else {
			return false;
		}
	}
}


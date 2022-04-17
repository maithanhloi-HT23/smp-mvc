<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class User
{

    public function __construct()
    {
    }

    public function login($email, $password)
    {
        require '../includes/config.php';
        $sql = "SELECT EmailId,Password FROM tblusers WHERE EmailId=:email and Password=:password";
        $query = $dbh->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount() > 0) {

            return true;
        } else {
            return false;
        }
    }

    public function changePassword($email, $password, $newpassword)
    {
        require '../includes/config.php';
        $sql = "SELECT Password FROM tblusers WHERE EmailId=:email and Password=:password";
        $query = $dbh->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount() > 0) {
            $con = "update tblusers set Password=:newpassword where EmailId=:email";
            $chngpwd1 = $dbh->prepare($con);
            $chngpwd1->bindParam(':email', $email, PDO::PARAM_STR);
            $chngpwd1->bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
            $chngpwd1->execute();
            return true;
        } else {
            return false;
        }
    }

    public function forgotPassword($email, $mobile, $newpassword)
    {
        require '../includes/config.php';
        $sql = "SELECT EmailId FROM tblusers WHERE EmailId=:email and MobileNumber=:mobile";
        $query = $dbh->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() > 0) {
            $con = "update tblusers set Password=:newpassword where EmailId=:email and MobileNumber=:mobile";
            $chngpwd1 = $dbh->prepare($con);
            $chngpwd1->bindParam(':email', $email, PDO::PARAM_STR);
            $chngpwd1->bindParam(':mobile', $mobile, PDO::PARAM_STR);
            $chngpwd1->bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
            $chngpwd1->execute();
            return true;
        } else {
            return false;
        }
    }

    public function signUp($fname, $mnumber, $email, $password)
    {
        require '../includes/config.php';
        $sql = "INSERT INTO  tblusers(FullName,MobileNumber,EmailId,Password) VALUES(:fname,:mnumber,:email,:password)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':fname', $fname, PDO::PARAM_STR);
        $query->bindParam(':mnumber', $mnumber, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
            return true;
        } else {
            return false;
        }
    }

    function updateProfile($name, $mobileno, $email)
    {
        require '../includes/config.php';
        $sql = "update tblusers set FullName=:name,MobileNumber=:mobileno where EmailId=:email";
        $query = $dbh->prepare($sql);
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->execute();
        if ($equiry->postEquiry() == false) {
            return false;
        } else {
            return true;
        }
    }

    function checkEmail($email)
    {
        require_once("../includes/config.php");
        $sql = "SELECT EmailId FROM tblusers WHERE EmailId=:email";
        $query = $dbh->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function postEquiry($fname, $email, $mobile, $subject, $description)
    {
        require '../includes/config.php';
        $sql = "INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':fname', $fname, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
        $query->bindParam(':subject', $subject, PDO::PARAM_STR);
        $query->bindParam(':description', $description, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
            return true;
        } else {
            return false;
        }
    }
}

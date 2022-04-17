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

    public function login($username, $password)
    {
        require '../includes/config.php';
        $sql = "SELECT UserName,Password FROM admin WHERE UserName='$username' and Password='$password' ";
        $query = $dbh->prepare($sql);
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function changePassword($username, $password, $newpassword)
    {
        require '../includes/config.php';
        $sql = "SELECT Password FROM admin WHERE UserName=:username and Password=:password";
        $query = $dbh->prepare($sql);
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount() > 0) {
            $con = "update admin set Password=:newpassword where UserName=:username";
            $chngpwd1 = $dbh->prepare($con);
            $chngpwd1->bindParam(':username', $username, PDO::PARAM_STR);
            $chngpwd1->bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
            $chngpwd1->execute();
            return true;
        } else {

            return false;
        }
    }

    public function getCountUser()
    {
        include '../includes/config.php';
        $sql = "SELECT id from tblusers";
        $query = $dbh->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $cnt = $query->rowCount();
        return $cnt;
    }
}

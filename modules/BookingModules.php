<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class BookingModules {

    function __construct() {
        
    }

    function booking($pid, $useremail, $amount, $comment, $status) {
        include('../includes/config.php');
        $sql = "INSERT INTO tblbooking(PackageId,UserEmail,Amount,Comment,status) VALUES(:pid,:useremail,:amount,:comment,:status)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':pid', $pid, PDO::PARAM_STR);
        $query->bindParam(':useremail', $useremail, PDO::PARAM_STR);
        $query->bindParam(':amount', $amount, PDO::PARAM_STR);
        $query->bindParam(':comment', $comment, PDO::PARAM_STR);
        $query->bindParam(':status', $status, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
            return true;
        } else {
            return false;
        }
    }

    function cancelBooking($email, $bid) {
        include('../includes/config.php');
        $sql = "SELECT Bookingdate FROM tblbooking WHERE UserEmail=:email and BookingId=:bid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':bid', $bid, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount() > 0) {
            foreach ($results as $result) {
                $fdate = $result->Bookingdate;
                $a = explode("/", $fdate);
                $val = array_reverse($a);
                $mydate = implode("/", $val);
                $cdate = date('Y/m/d');
                $date1 = date_create("$cdate");
                $date2 = date_create("$fdate");
                $diff = date_diff($date1, $date2);
                echo $df = $diff->format("%a");
                if ($df > 1) {
                    $status = 2;
                    $cancelby = 'u';
                    $sql = "UPDATE tblbooking SET status=:status,CancelledBy=:cancelby WHERE UserEmail=:email and BookingId=:bid";
                    $query = $dbh->prepare($sql);
                    $query->bindParam(':status', $status, PDO::PARAM_STR);
                    $query->bindParam(':cancelby', $cancelby, PDO::PARAM_STR);
                    $query->bindParam(':email', $email, PDO::PARAM_STR);
                    $query->bindParam(':bid', $bid, PDO::PARAM_STR);
                    $query->execute();
                    return true;
                } else {
                    return false;
                }
            }
        }
    }

}

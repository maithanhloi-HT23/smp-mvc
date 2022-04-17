<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class BookingController {

    public function __construct() {
        
    }

    function booking() {
        include('../includes/config.php');
        include '../modules/BookingModules.php';
        $pid = intval($_GET['pkgid']);
        $useremail = $_SESSION['login'];
        $amount = $_POST['amount'];
        $comment = $_POST['comment'];
        $status = 0;
        $booking = new BookingModules();
        if ($booking->booking($pid, $useremail, $amount, $comment, $status) == true) {
            return true;
        } else {
            return false;
        }
    }

}

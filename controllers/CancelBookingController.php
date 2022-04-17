<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class CancelBooking {

    public function __construct() {
        
    }

    function cancleBooking() {
        include "../modules/BookingModules.php";
        $bid = intval($_GET['bkid']);
        $email = $_SESSION['login'];
        $cancle = new BookingModules();
        if ($cancle->cancelBooking($email, $bid)) {
            return true;
        }else{
            return false;
        }
    }

}

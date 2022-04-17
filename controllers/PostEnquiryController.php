<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class PostEquiryController {

    public function __construct() {
        
    }

    function postEquiry() {
        require '../modules/User.php';
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobileno'];
        $subject = $_POST['subject'];
        $description = $_POST['description'];
        $equiry = new User();
        if ($equiry->postEquiry($fname, $email, $mobile, $subject, $description) == true) {
            return true;
        } else {
            return false;
        }
    }

}
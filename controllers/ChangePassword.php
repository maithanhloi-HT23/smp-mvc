<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

Class ChangePassword {

    public function __construct() {
        
    }

    function changePassword() {
        require '../modules/User.php';
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $email = $_SESSION['login'];
        $user = new User();
        if ($user->changePassword($email, $password, $newpassword) == true) {
            return true;
        } else {
            return false;
        }
    }

}

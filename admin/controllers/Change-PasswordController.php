<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

Class ChangePasswordController {
    
    public function __construct() {
        
    }

    function changePassword() {
        require '../models/Users.php';
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $username = 'admin';
        $user = new User();
        if ($user->changePassword($username, $password, $newpassword) == true) {
            return true;
        } else {
            return false;
        }
    }

}

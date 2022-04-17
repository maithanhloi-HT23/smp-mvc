<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class UpdateProfileController{
    function __construct() {

    }

    function update(){
        include '../modules/User.php';
        $name = $_POST['name'];
        $mobileno = $_POST['mobileno'];
        $email = $_SESSION['login'];
        $user = new User();
        if($user->updateProfile($name, $mobileno, $email) == true){
            return true;
        }else{
            return false;
        }
    }

    
}
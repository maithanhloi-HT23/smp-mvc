<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require '../models/Users.php';
if (isset($_POST['login'])) {
    $username= $_POST['username'];
    $password = $_POST['password'];
    $user = new User();  
    if($user->login($username, $password) == true){
        session_start();
        $_SESSION['alogin'] = $_POST['username'];
        echo "<script type='text/javascript'> document.location = '../views/index.php'; </script>";
    }else{
        echo "<script>alert('Invalid Details');</script>";
        echo "<script type='text/javascript'> document.location = '../index.php'; </script>";
    }
} 

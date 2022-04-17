<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


include '../modules/User.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
}

$email = $_POST['email'];
$password = $_POST['password'];
$user = new User();
if ($user->login($email, $password) == true) {  
    session_start();
    $_SESSION['login'] = $_POST['email']; 
    echo "<script type='text/javascript'> document.location = '../views/package-list.php'; </script>";
} else {
    echo "<script>alert('Invalid Details');</script>";
}






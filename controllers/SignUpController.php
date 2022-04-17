<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include '../modules/User.php';
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $mnumber = $_POST['mobilenumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = new User();
        
    if ($user->signUp($fname, $mnumber, $email, $password) == true) {
        session_start();
        $_SESSION['msg'] = "Bạn đã đăng ký thành công. Bây giờ bạn có thể đăng nhập";       
        header('location:../views/thankyou.php');
    } else {
        session_start();
        $_SESSION['msg'] = "Đã xảy ra lỗi. Vui lòng thử lại.";       
        header('location:../views/thankyou.php');
    }
    
}
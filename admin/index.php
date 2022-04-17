<?php
session_start();
?>
<!DOCTYPE HTML>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <title>QUẢN TRỊ VIÊN ĐĂNG NHẬP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="css/morris.css" type="text/css"/>
        <!-- Graph CSS -->
        <link href="css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="css/jquery-ui.css"> 
        <!-- jQuery -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- //jQuery -->
        <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <!-- lined-icons -->
        <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
        <!-- //lined-icons -->
    </head> 
    <body>
        <div class="main-wthree">
            <div class="container">
                <div class="sin-w3-agile">
                    <h2>Đăng Nhập</h2>
                    <form action="controllers/LoginController.php" method="post">
                        <div class="username">
                            <span class="username">TÊN TÀI KHOẢN:</span>
                            <input type="text" name="username" class="name" placeholder="Username *" required="">
                            <div class="clearfix"></div>
                        </div>
                        <div class="password-agileits">
                            <span class="username">MẬT KHẨU:</span>
                            <input type="password" name="password" class="password" placeholder="Password *" required="">
                            <div class="clearfix"></div>
                        </div>	
                        <div class="login-w3" >
                            <input type="submit" class="login" name="login" value="ĐĂNG NHẬP">
                        </div>
                        <div class="clearfix"></div>
                    </form>
                    <div class="back">
                        <a href="../views/index.php">QUAY LẠI TRANG CHỦ</a>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>

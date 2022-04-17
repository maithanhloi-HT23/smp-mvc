<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>LTQQN | Hệ Thống Quản Lý Bán Hàng</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="../css/style.css" rel='stylesheet' type='text/css' />
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href="../css/font-awesome.css" rel="stylesheet">
        <!-- Custom Theme files -->
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <!--animate-->
        <link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="../js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!--//end-animate-->
    </head>
    <body>
        <?php include('../includes/header.php'); ?>
        <!--- banner ---->
        <div class="banner-3">
            <div class="container">
            </div>
        </div>
        <!--- /banner ---->
        <!--- rooms ---->
        <div class="rooms">
            <div class="container">

                <div class="room-bottom">
                    <h3>Danh Sách Sản Phẩm</h3>
                    <?php include '../controllers/ListProductController.php';?>
                </div>
            </div>
        </div>
        <!--- /rooms ---->

        <!--- /footer-top ---->
        <?php include('../includes/footer.php'); ?>
        <!-- signup -->
        <?php include('../includes/signup.php'); ?>			
        <!-- //signu -->
        <!-- signin -->
        <?php include('../includes/signin.php'); ?>			
        <!-- //signin -->
        <!-- write us -->
        <?php include('../includes/write-us.php'); ?>			
        <!-- //write us -->
    </body>
</html>
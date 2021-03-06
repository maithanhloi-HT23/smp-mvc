<?php
session_start();
error_reporting(0);
include '../controllers/BookingController.php';
$booking = new BookingController();
if (isset($_POST['submit2'])) {
    if ($booking->booking() == true) {
        $msg = "Đặt hàng thành công.";
    } else {
        $error = "Có gì đó không ổn. Vui lòng thử lại.";
    }
}
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
        <link rel="stylesheet" href="../css/jquery-ui.css" />
        <script>
            new WOW().init();
        </script>
        <script src="../js/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#datepicker,#datepicker1").datepicker();
            });
        </script>
        <style>
            .errorWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #fff;
                border-left: 4px solid #dd3d36;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
                box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
            }
            .succWrap{
                padding: 10px;
                margin: 0 0 20px 0;
                background: #fff;
                border-left: 4px solid #5cb85c;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
                box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
            }
        </style>				
    </head>
    <body>
        <!-- top-header -->
        <?php include('../includes/header.php'); ?>
        <div class="banner-3">
            <div class="container">
            </div>
        </div>
        <!--- /banner ---->
        <!--- selectroom ---->
        <div class="selectroom">
            <div class="container">	
                <?php if ($error) { ?><div class="errorWrap"><strong>LỖI</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) {
                    ?><div class="succWrap"><strong>THÀNH VIÊN</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
                <?php include '../controllers/ProductDetailsController.php'; ?>

            </div>
        </div>
        <!--- /selectroom ---->
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
    </body>
</html>
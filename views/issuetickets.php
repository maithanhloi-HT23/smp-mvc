<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    ?>
    <!DOCTYPE HTML>
    <html>
        <head>
            <title>LTQQN | Hệ Thống Quản Lý Bán Hàng</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="keywords" content="Tourism Management System In PHP" />
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
            <div class="top-header">
                <?php include('../includes/header.php'); ?>
                <div class="banner-1 ">
                    <div class="container">
                    </div>
                </div>
                <!--- /banner-1 ---->
                <!--- privacy ---->
                <div class="privacy">
                    <div class="container">
                        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Phát hành vé</h3>
                        <form name="chngpwd" method="post" onSubmit="return valid();">
                            <?php if ($error) { ?><div class="errorWrap"><strong>LỖI</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) {
                                ?><div class="succWrap"><strong>THÀNH CÔNG</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
                            <p>
                            <table border="1" width="100%">
                                <tr align="center">
                                    <th>#</th>
                                    <th>Id </th>
                                    <th>Vấn đề</th>	
                                    <th>Mô tả</th>
                                    <th>Nhận xét Quản trị</th>
                                    <th>Ngày gửi</th>
                                    <th>Ngày nhận xét</th>

                                </tr>
                                <?php
                                include "../controllers/ShowEquiryController.php";
                                ?>
                            </table>

                            </p>
                        </form>


                    </div>
                </div>
                <!--- /privacy ---->
                <!--- footer-top ---->
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
<?php } ?>

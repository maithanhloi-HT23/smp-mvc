<?php if ($_SESSION['login']) {
    ?>
    <div class="top-header">
        <div class="container">
            <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
                <li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
                <li class="prnt"><a href="../views/profile.php">Hồ sơ của tôi</a></li>
                <li class="prnt"><a href="../views/change-password.php">Thay đổi Mật khẩu</a></li>
                <li class="prnt"><a href="../views/booking-history.php">Lịch sử mua hàng của tôi</a></li>
                <li class="prnt"><a href="../views/issuetickets.php">Phản hồi bạn</a></li>
            </ul>
            <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
                <li class="tol">Chào Mừng :</li>				
                <li class="sig"><?php echo htmlentities($_SESSION['login']); ?></li> 
                <li class="sigi"><a href="../controllers/logout.php" >/ Đăng xuất</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
<?php } else { ?>
    <div class="top-header">
        <div class="container">
            <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
                <li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
                <li class="hm"><a href="../admin/index.php">Quản trị viên đăng nhập</a></li>
            </ul>
            <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
                <li class="tol">ĐIỆN THOẠI : 0123-456879</li>				
                <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >ĐĂNG KÝ</a></li> 
                <li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ ĐĂNG NHẬP</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    </div>
<?php } ?>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
    <div class="container">
        <div class="logo wow fadeInDown animated" data-wow-delay=".5s">
            <a href="index.php">HỆ THỐNG <span>QUẢN LÝ BÁN HÀNG</span></a>	
        </div>

        <div class="lock fadeInDown animated" data-wow-delay=".5s"> 
            <li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">AN TOÀN &amp; BẢO MẬT </div></li>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
    <div class="container">
        <div class="navigation">
            <nav class="navbar navbar-default">
                <!-- Thương hiệu và chuyển đổi được nhóm lại để hiển thị di động tốt hơn -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Thu thập các liên kết dẫn hướng, biểu mẫu và nội dung khác để chuyển đổi -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav class="cl-effect-1">
                        <ul class="nav navbar-nav">
                            <li><a href="../views/index.php">Home</a></li>
                            <li><a href="../views/page.php?type=aboutus">ABOUT</a></li>
                            <li><a href="../views/package-list.php">DANH SÁCH SẢN PHẨM</a></li>
                            <li><a href="../views/page.php?type=privacy">CHÍNH SÁCH BẢO MẬT</a></li>
                            <li><a href="../views/page.php?type=terms">ĐIỀU KHOẢN</a></li>
                            <li><a href="../views/page.php?type=contact">LIÊN HỆ CHÚNG TÔI</a></li>
                            <?php if ($_SESSION['login']) {
                                ?>
                                <li>CẦN GIÚP?<a href="#" data-toggle="modal" data-target="#myModal3"> / VIẾT CHO CHÚNG TÔI </a>  </li>
                            <?php } else { ?>
                                <li><a href="../views/enquiry.php"> Điều Tra </a>  </li>
                            <?php } ?>
                            <div class="clearfix"></div>

                        </ul>
                    </nav>
                </div><!-- /.navbar-collapse -->	
            </nav>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
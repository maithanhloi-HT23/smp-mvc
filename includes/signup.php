<?php
error_reporting(0);
?>
<!--Javascript for check email availabilty-->
<script>
    function checkAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
            url: "..//controllers//check_availability.php",
            data: 'emailid=' + $("#email").val(),
            type: "POST",
            success: function (data) {
                $("#user-availability-status").html(data);
                $("#loaderIcon").hide();
            },
            error: function () {}
        });
    }
</script>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
            </div>
            <section>
                <div class="modal-body modal-spa">
                    <div class="login-grids">
                        <div class="login">
                            <div class="login-left">
                                <ul>
                                    <li><a class="fb" href="https://www.facebook.com/profile.php?id=100010657245759"><i></i>Facebook</a></li>
                                    <li><a class="goog" href="https://www.google.com/maps/place/Nga+T%C3%A2n,+Nga+S%C6%A1n,+Thanh+Ho%C3%A1,+Vi%E1%BB%87t+Nam/@19.977209,105.9900724,14z/data=!3m1!4b1!4m5!3m4!1s0x31366828fa59e8b1:0xc79e2e2f3f69baa0!8m2!3d19.9792114!4d106.0111203"><i></i>Google</a></li>			
                                </ul>
                            </div>
                            <div class="login-right">
                                <form action="../controllers/SignUpController.php" name="signup" method="post">
                                    <h3>Tạo tài khoản của bạn </h3>
                                    <input type="text" value="" placeholder="Họ Tên" name="fname" autocomplete="off" required="">
                                    <input type="text" value="" placeholder="Số điện thoại" maxlength="10" name="mobilenumber" autocomplete="off" required="">
                                    <input type="text" value="" placeholder="Email" name="email" id="email" onBlur="checkAvailability()" autocomplete="off"  required="">	
                                    <span id="user-availability-status" style="font-size:12px;"></span> 
                                    <input type="password" value="" placeholder="Mật Khẩu" name="password" required="">	
                                    <input type="submit" name="submit" id="submit" value="Tạo Tài Khoản">
                                </form>
                            </div>
                            <div class="clearfix"></div>								
                        </div>
                        <p>Bằng cách đăng nhập vào bạn đồng ý với chúng tôi <a href="../views/page.php?type=terms">Điều khoản và Điều kiện</a> and <a href="../views/page.php?type=privacy">Chính Sách Bảo Mật</a></p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
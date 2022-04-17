<?php

include '../modules/User.php';
// check mã email quản trị availablity
if (!empty($_POST["emailid"])) {
    $email = $_POST["emailid"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo "error : Bạn đã không nhập một email hợp lệ.";
    } else {
        $user = new User();
        $cnt = 1;
        if ($user->checkEmail($email) == true) {
            echo "<span style='color:red'>Email đã tồn tại.</span>";
            echo "<script>$('#submit').prop('disabled',true);</script>";
        } else {
            echo "<span style='color:green'> Email sẵn sàng để đăng ký.</span>";
            echo "<script>$('#submit').prop('disabled',false);</script>";
        }
    }
}

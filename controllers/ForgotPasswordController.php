<?php

class ForgotPassword
{
    public function __construct()
    {
    }

    public function forgotPass()
    {
        include "../modules/User.php";
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $newpassword = $_POST['newpassword'];

        $user = new User();

        if ($user->forgotPassword($email, $mobile, $newpassword)) {
            return true;
        } else {
            return false;
        }
    }
}

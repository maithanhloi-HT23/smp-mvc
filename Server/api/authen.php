<?php
session_start();
header('Access-Control-Allow-Origin: *');

require_once ('../db/dbhelper.php');
require_once ('../utils/utility.php');

$action = getPOST('action');

switch ($action) {
	case 'login':
		doLogin();
		break;
	case 'logout':
		doLogout();
		break;
	case 'register':
		doRegister();
		break;
	case 'list':
		doUserList();
		break;
}

function doLogout() {
	$token = getCOOKIE('token');
	if (empty($token)) {
		$res = [
			"status" => 1,
			"msg"    => "Logout success!!!"
		];
		echo json_encode($res);
		return;
	}

	// Xoa token khoi database
	$sql = "delete from login_tokens where token = '$token'";
	execute($sql);

	// Xoa token khoi cookie
	setcookie('token', '', time()-7*24*60*60, '/');

	$res = [
		"status" => 1,
		"msg"    => "Logout success!!!"
	];
	echo json_encode($res);

	session_destroy();
}

function doLogin() {
	$email    = getPOST('email');
	$password = getPOST('password');

	$password = md5Security($password);

	$sql  = "select * from users where email = '$email' and password = '$password'";
	$user = executeResult($sql, true);

	if ($user != null) {
		$email = $user['email'];
		$id    = $user['id'];

		$token = md5Security($email.time().$id);

		// setcookie('status', 'login', time()+7*24*60*60, '/');
		setcookie('token', $token, time()+7*24*60*60, '/');

		// save database
		$sql = "insert into login_tokens (id_user, token) values ('$id', '$token')";
		execute($sql);

		$res = [
			"status" => 1,
			"msg"    => "Login success!!!"
		];
	} else {
		$res = [
			"status" => -1,
			"msg"    => "Login failed!!!"
		];
	}
	echo json_encode($res);
}

function doRegister() {
	$username = getPOST('username');
	$fullname = getPOST('fullname');
	$email    = getPOST('email');
	$password = getPOST('password');
	$address  = getPOST('address');

	$sql    = "select * from users where username = '$username' or email = '$email'";
	$result = executeResult($sql);
	if ($result == null || count($result) == 0) {
		$password = md5Security($password);

		$sql = "insert into users(fullname, username, email, password, address) values ('$fullname', '$username', '$email', '$password', '$address')";
		execute($sql);

		$res = [
			"status" => 1,
			"msg"    => "Create new account success!!!"
		];
	} else {
		$res = [
			"status" => -1,
			"msg"    => "Email|Username existed!!!"
		];
	}
	echo json_encode($res);
}

function doUserList() {
	$user = authenToken();
	// var_dump($user);
	// die();
	if ($user == null) {
		$res = [
			"status"   => -1,
			"msg"      => "Not login!!!",
			"userList" => []
		];
		echo json_encode($res);
		return;
	}

	$sql    = "select * from users";
	$result = executeResult($sql);
	$res    = [
		"status"   => 1,
		"msg"      => "success!!!",
		"userList" => $result
	];
	echo json_encode($res);
}
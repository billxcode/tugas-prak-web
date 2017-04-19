<?php


$username = $_POST['username'];
$password = $_POST['password'];

session_start();
if ($username=="bill" && $password=="123456") {
	$_SESSSION['username'] = $username;
	header("Location: home.php");
}else{
	header("Location: login.php");
}
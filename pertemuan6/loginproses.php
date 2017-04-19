<?php


$username = $_POST['username'];
$password = $_POST['password'];

if ($username=="bill" && $password=="123456") {
	session_start();
	$_SESSION['username'] = $username;
	header("Location: home.php");
}else{
	header("Location: login.php");
}
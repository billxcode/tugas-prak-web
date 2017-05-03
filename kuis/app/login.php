<?php

require_once "../database/config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM mahasiswa WHERE `username`='$username' and `password`='$password'";
$query = mysqli_query($db, $query);
if(mysqli_num_rows($query)>0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	header("location: ../home.php");
}else{
	header("location: ../index.php");
}
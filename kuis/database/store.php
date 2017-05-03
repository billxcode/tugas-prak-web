<?php

require_once "config.php";

$nim 		= $_POST['nim'];
$nama 		= $_POST['nama'];
$alamat 	= $_POST['alamat'];
$username 	= $_POST['username'];
$password 	= $_POST['password'];

$query = mysqli_query($db, "INSERT INTO mahasiswa (`nim`, `nama`, `alamat`, `username`, `password`) VALUES('$nim', '$nama', '$alamat', '$username', '$password')") or die(mysqli_error($db));

if ($query) {
	echo true;
}else{
	echo false;
}
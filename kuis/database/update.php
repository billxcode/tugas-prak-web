<?php

require_once "config.php";

$id 	= $_GET['id'];
$nim 	= $_POST['nim'];
$nama 	= $_POST['nama'];
$alamat = $_POST['alamat'];

$query = mysqli_query($db, "UPDATE mahasiswa SET `nim`='$nim', `nama`='$nama', `alamat`='$alamat' WHERE `id`='$id'") or die(mysqli_error($db));

if ($query) {
	echo true;
}else{
	echo false;
}
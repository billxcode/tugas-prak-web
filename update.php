<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$hobi = $_POST['hobi'];
mysqli_query($connect, "UPDATE mahasiswa SET `nama`='$nama', `alamat`='$alamat' where `nim`=$nim") or die(mysqli_error($connect));
mysqli_query($connect, "DELETE FROM mhs_hobi WHERE nim=$nim") or die(mysqli_error($connect));
foreach ($hobi as $key => $value) {
	mysqli_query($connect, "INSERT INTO mhs_hobi (`nim`, `hobi`) VALUES($nim, $value)") or die(mysqli_error($connect));	
}



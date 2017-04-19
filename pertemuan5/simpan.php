<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$hobi = $_POST['hobi'];
$query = "INSERT INTO mahasiswa (`nim`,`nama`,`alamat`) values('$nim', '$nama', '$alamat')";
mysqli_query($connect, $query) or die(mysqli_error($connect));

foreach ($hobi as $key => $value) {
	mysqli_query($connect, "INSERT INTO mhs_hobi (`nim`, `hobi`) values($nim, $value)") or die(mysqli_error($connect));
}

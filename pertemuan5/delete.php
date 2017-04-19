<?php

include "koneksi.php";
$nim = $_GET['nim'];

mysqli_query($connect, "DELETE FROM mahasiswa WHERE nim=$nim") or die(mysql_error());
mysqli_query($connect, "DELETE FROM mhs_hobi WHERE nim=$nim") or die(mysql_error());
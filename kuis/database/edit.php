<?php

require_once "config.php";

$id = $_GET['id'];
$query 	= mysqli_query($db, "SELECT * FROM mahasiswa WHERE `id`=$id");
$row 	= Array();

while ($data = mysqli_fetch_assoc($query)) {
	$row[] = $data;
}

echo json_encode($row);
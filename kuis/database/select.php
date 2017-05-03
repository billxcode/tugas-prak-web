<?php

require_once "config.php";
$rows = Array();
$query = mysqli_query($db, "SELECT * FROM mahasiswa");
while($data = mysqli_fetch_assoc($query)){
	$rows[] = $data;
}
$data = json_encode($rows);

if ($data=="null") {
	echo "failed";
}else{
	echo $data;
}
<?php

require_once "config.php";

$id = $_GET['id'];

$query = mysqli_query($db, "DELETE FROM mahasiswa WHERE `id`=$id") or die(mysqli_error($db));

if ($query) {
	echo true;
}else{
	echo false;
}
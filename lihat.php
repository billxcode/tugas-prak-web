<!DOCTYPE html>
<html>
<head>
	<title>Lihat</title>
</head>
<body>
<table border="1">
	<tr>
		<td>nim</td>
		<td>nama</td>
		<td>alamat</td>
		<td>hobi</td>
		<td colspan="2">Aksi</td>
	</tr>
	<?php
	include "koneksi.php";

	function getHobi($nim){
		mysqli_query($connect, "SELECT * FROM mhs_hobi, hobi where `mhs_hobi`.`hobi`=`hobi`.`id` and `nim`='$nim'");
		while($data = mysqli_fetch_array($query)) {
			echo $data['nama'].",";
		}
	}
	$query = mysqli_query($connect, "SELECT * FROM mahasiswa");
	while ($data = mysqli_fetch_array($query)) {
		?>
		<tr>
			<td><?php echo $data['nim']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php 
			$nim =$data['nim'];
			$query = mysqli_query($connect, "SELECT * FROM mhs_hobi, hobi where `mhs_hobi`.`hobi`=`hobi`.`id` and `nim`=$nim");
		while($data = mysqli_fetch_array($query)) {
			echo $data['nama'].",";
		};
		?></td>
			<td><a href="delete.php?nim=<?php echo $nim; ?>">Delete</a></td>
			<td><a href="form.php?form=update&nim=<?php echo $nim; ?>">Update</a></td>
		</tr>
		<?php
	}
	?>
</table>
</body>
</html>
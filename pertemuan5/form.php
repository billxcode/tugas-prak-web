<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

	include "koneksi.php";

 if (isset($_GET['form']) && isset($_GET['nim'])) {
 	$form = $_GET['form'];
 	$nim  = $_GET['nim'];
 	$query = mysqli_query($connect, "SELECT * FROM mahasiswa where `nim`=$nim");
 	$data = mysqli_fetch_array($query);
 	?>
 		<form method="post" action="update.php">
 			<input type="text" name="nim" value="<?php echo $data['nim']; ?>" placeholder="nim"><br>
			<input type="text" name="nama" placeholder="nama" value="<?php echo $data['nama']; ?>"><br>
			<textarea name="alamat"><?php echo $data['alamat']; ?></textarea>		<br>
		<?php
			$query = mysqli_query($connect, "SELECT * FROM hobi") or die(mysqli_error($connect));
			while($data = mysqli_fetch_array($query)){
				$cetak = true;
				$query2 = mysqli_query($connect, "SELECT * FROM mhs_hobi where nim=$nim") or die(mysqli_error($connect));
				while ($data2 = mysqli_fetch_array($query2)){
					if ($data['id']==$data2['hobi']) {
						?>
							<input type="checkbox" name="hobi[]" value="<?php echo $data['id']; ?>" checked><?php echo $data['nama']."<br>";?> 
						<?php
						$cetak=false;
					}
				}
				if ($cetak) {
				?>
					<input type="checkbox" name="hobi[]" value="<?php echo $data['id']; ?>"><?php echo $data['nama']."<br>";?> 
				<?php
				}
				
			}
		?>
		<button>Submit</button>
 		</form>
 	<?php
 }else{


?>
<form method="post" action="simpan.php">
	<input type="text" name="nim" placeholder="nim"><br>
	<input type="text" name="nama" placeholder="nama"><br>
	<textarea name="alamat" placeholder="alamat"></textarea><br>
	<?php
	$query = mysqli_query($connect, "SELECT * FROM hobi") or die(mysql_error());
	while($data = mysqli_fetch_array($query)) {
		?>
		<input type="checkbox" name="hobi[]" value="<?php echo $data['id']; ?>"><?php echo $data['nama']."<br>";?> 
		<?php
	}
	?>
	<button>Submit</button>
</form>
<?php

 }

?>
</body>
</html>
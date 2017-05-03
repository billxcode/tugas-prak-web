<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.css">
</head>
<body>
<?php

require_once "app/session.php";

?>
<div class="wrapper">
	<div class="row">
		<div class="col-md-6">
			<a href="app/logout.php" class="btn btn-danger">Logout</a>
			<form class="form" id="form_mahasiswa">
				<input type="hidden" name="id" id="id" value="">
				<div class="form-group">
					<input type="text" class="form-control" name="username" placeholder="Username" id="username">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="password" placeholder="Password" id="password">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="nim" placeholder="Nim" id="nim">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="nama" placeholder="Nama" id="nama">
				</div>
				<div class="form-group">
					<textarea name="alamat" placeholder="Alamat" class="form-control" id="alamat"></textarea>
				</div>
				<div class="form-group">
							<button type="button" class="btn btn-primary pull-right" id="store">Save <span class="fa fa-pencil"></span></button>
							<button type="button" class="btn btn-warning pull-right" id="update">Update <span class="fa fa-clipboard"></span></button>
					<div id="result"></div>
				</div>
			</form>		
		</div>
		<div class="col-md-6">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>username</th>
						<th>nim</th>
						<th>nama</th>
						<th>alamat</th>
						<th>action</th>
					</tr>
				</thead>
				<tbody id="mahasiswa">
					<tr>

						<td></td>
						<td></td>
						<td></td>

					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap-material-design.umd.min.js"></script>
<script type="text/javascript" src="js/bootstrap-material-design.iife.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">

$(function(){
	$("#store").show();
	$("#update").hide();
	select();
	$("#store").on("click", function(){
		$username 	= $("#username").val();
		$password 	= $("#password").val();
		$nim 	= $("#nim").val();
		$nama 	= $("#nama").val();
		$alamat = $("#alamat").val();
		store($nim, $nama, $alamat, $username, $password);
	});
	$("#update").on("click", function(){
		$username 	= $("#username").val();
		$password 	= $("#password").val();
		$id 	= $("#id").val();
		$nim 	= $("#nim").val();
		$nama 	= $("#nama").val();
		$alamat = $("#alamat").val();
		update($id, $nim, $nama, $alamat, $username, $password);
	});
})

</script>
</body>
</html>
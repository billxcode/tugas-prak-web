<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.css">
</head>
<body>
<div class="wrapper">
	<div class="row">
		<div class="col-md-4">
			<form class="form" action="app/login.php" method="POST">
				<div class="form-control">
					<input type="text" name="username" placeholder="username" class="form-control">
				</div>
				<div class="form-control">
					<input type="password" name="password" placeholder="password" class="form-control">
				</div>
				<div class="form-control">
					<button class="btn btn-success pull-right">Login</button>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
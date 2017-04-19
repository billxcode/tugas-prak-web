<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
<?php
include "sidebar.php";

switch ($_GET['q']) {
	case 'home':
		include "dashboard.php";
		break;
	case 'profile':
		include "profile.php";
		break;
	case 'logout':
		header("Location: logout.php");
		break;
	default:
		include "dashboard.php";
		break;
}

include "session_checker.php";
?>
</body>
</html>
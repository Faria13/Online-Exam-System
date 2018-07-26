
<?php
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../lib/Session.php');
	Session::checkAdminSession();
	include_once ($filepath.'/../helpers/Format.php');
	$db = new Database();
	$fm = new Format();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Online Exam System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

	<header class="headersection template">
		<img src="img/Admin-resized-2.jpg">
		<?php
			if (isset($_GET['action']) && ($_GET['action']) == 'logout') {
				Session::destroy();
				header("Location:login.php");
				exit();
			}
		?>
	</header>

	<section class="main-content template">
		<div class="button">
			<a href="index.php"><button type="button" value="Home">Home</button></a>
			<a href="users.php"><button type="button" value="Manage User">Manage User</button></a>
			<a href="quesadd.php"><button type="button" value="Add Ques">Add Ques</button></a>
			<a href="queslist.php"><button type="button" value="Ques List">Ques List</button></a>
			<a href="?action=logout"><button type="button" value="Logout">Logout</button></a>
		</div>
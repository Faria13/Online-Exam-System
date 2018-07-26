<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Session.php');
	Session::init();
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');

	spl_autoload_register(function($class){
		include_once "classes/".$class.".php";
	});

	$db = new Database();
	$fm = new Format();
	$exam = new Exam();
	$usr = new User();
	$pro = new Process();

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Exam System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html">
	<meta http-equiv="no-cache">
	<meta http-equiv="Cache-Control" content="no-cache">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
</head>
<body>

	<?php
		if (isset($_GET['action']) && $_GET['action'] == 'logout') {
			Session::destroy();
			header("Location:index.php");
			exit();
		}
	?>

	<header class="headersection template">
		<img src="img/Online-Exam-preparation.png">
	</header>

	<section class="main-content template">
		<div class="button">
			<?php
				$login = Session::get("login");
				if ($login == true) {
			?>
			<a href="profile.php"><button type="button" value="Profile">Profile</button></a>
			<a href="exam.php"><button type="button" value="Exam">Exam</button></a>
			<a href="?action=logout"><button type="button" value="Logout">Logout</button></a>

			<?php } else { ?>
			<a href="index.php"><button type="button" value="Login">Login</button></a>
			<a href="register.php"><button type="button" value="Register">Register</button></a>
			<?php } ?>

			<?php
				$login = Session::get("login");
				if ($login == true) {
			?>
			<span style="float: right;color:#fff;font-family: verdana;font-size: 18px;margin-top: 5px;">
				Welcome <strong><?php echo Session::get("name"); ?></strong>
			</span>
			<?php } ?>
		</div>
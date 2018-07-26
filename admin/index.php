<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
?>
<?php
  // Session::checkLogin();
?>
		<div class="content template">
			<div class="title">
				<h3>Admin Panel</h3>
			</div>
			<div class="adminpanel">
				<h2>Welcome to Control Panel!</h2>
				<p>You can manage your user and online exam start from here..</p>
			</div>
		</div>
<?php include 'inc/footer.php'; ?>
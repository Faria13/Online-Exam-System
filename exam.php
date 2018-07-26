<?php include 'inc/header.php'; ?>
<?php
	Session::checkSession();
?>
	<div class="content template">
		<div class="title">
			<h3>Welcome to Online Exam</h3>
		</div>
		<div class="left-content">
			<img src="img/computer-question.jpg">
		</div>
		<div class="right-content" style="height: 325px;">
			<h4>Start Test</h4>
			<a href="start-test.php" class="btn" style="text-decoration: none;"><button style="border: 2px solid #204185;margin-left: 100px;padding: 9px 55px;background: transparent;cursor: pointer;">Start Now</button></a>
		</div>
	</div>
<?php include 'inc/footer.php'; ?>	
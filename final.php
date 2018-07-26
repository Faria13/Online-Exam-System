<?php include 'inc/header.php'; ?>
<?php
	Session::checkSession();
?>
	<div class="content template">
		<div class="title">
			<h3>You are done!</h3>
		</div>
		<div class="starttest" style="width: 510px;margin: auto;border: 1px solid #eee;padding: 20px;">
			
			<p style="font-family: verdana;font-size: 18px;margin-left: 20px;margin-top: 10px;">Congraytulation! You have just completed the test.</p>
			<p style="font-family: verdana;font-size: 18px;margin-left: 20px;margin-top: 10px;">Final Score: 
				<?php

					if (isset($_SESSION['score'])) {
						echo $_SESSION['score'];
						unset($_SESSION['score']);
					}

				?>

			</p>
			
			<a href="viewans.php" style="color: #fff;margin-top: 20px;padding: 5px;background: #A6AECB;text-align: center;display: block;font-size: 20px;font-family: verdana;text-decoration: none;">View Answer</a>
			<a href="start-test.php" style="color: #fff;margin-top: 20px;padding: 5px;background: #A6AECB;text-align: center;display: block;font-size: 20px;font-family: verdana;text-decoration: none;">Start Again</a>
		</div>
	</div>
<?php include 'inc/footer.php'; ?>	
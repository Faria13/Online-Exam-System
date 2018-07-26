<?php include 'inc/header.php'; ?>
<?php
	Session::checkLogin();
?>
		<div class="content template">
			<div class="title">
				<h3>Online Exam System - User Login</h3>
			</div>
			<div class="left-content">
				<img src="img/computer-question.jpg">
			</div>
			<div class="right-content" style="height: 325px;">
				<form action="" method="POST">
					<table style="margin-left: 20px;margin-top: 55px;">
						<tr>
							<td style="font-family: verdana;font-size: 18px;">Email: </td>
							<td><input type="text" name="email" id="email" style="margin-left: 10px;margin-top: 15px;">
							</td>
						</tr>

						<tr>
							<td style="font-family: verdana;font-size: 18px;">Password: </td>
							<td><input type="password" name="password" id="password" style="margin-left: 10px;"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" id="loginsubmit" value="Login"></td>
						</tr>
					</table>
				</form>
				<p>New User?<a href="register.php">Signup</a> Free</p>
				<span class="empty" style="display: none;">Field Must not be empty! </span>
				<span class="error" style="display: none;">Email or Password not matched! </span>
				<span class="Disable" style="display: none;">User Id Disabled! </span>
			</div>
		</div>
	</section>
<?php include 'inc/footer.php'; ?>

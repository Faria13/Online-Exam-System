<?php include 'inc/header.php'; ?>
	<div class="content template">
		<div class="title">
			<h3>Online Exam System - User Registration</h3>
		</div>
		<div class="left-content"  style="height: 345px;">
			<img src="img/regimage.jpg">
		</div>
		<div class="right-content">
			<form action="" method="POST">
				<table style="margin-left: 20px;">
					<tr>
						<td style="font-family: verdana;font-size: 18px;">Name: </td>
						<td><input type="text" name="name" id="name" style="margin-left: 10px;margin-top: 25px;"></td>
					</tr>

					<tr>
						<td style="font-family: verdana;font-size: 18px;">Username: </td>
						<td><input type="text" name="username" id="username" style="margin-left: 10px;margin-top: 15px;"></td>
					</tr>

					<tr>
						<td style="font-family: verdana;font-size: 18px;">Password: </td>
						<td><input type="password" name="password" id="password" style="margin-left: 10px;"></td>
					</tr>

					<tr>
						<td style="font-family: verdana;font-size: 18px;">Email: </td>
						<td><input type="email" name="email" id="email" style="margin-left: 10px;"></td>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" id="regsubmit" value="Signup" style="border: none;background: #204185;padding: 10px 20px;font-size: 18px;font-family: verdana;margin-top: 10px;margin-left: 10px;border-radius: 5px;color: #fff;"></td>
					</tr>
				</table>
			</form>
			<p>Already Registered?<a href="index.php">Login</a> here</p>
			<span id="state"></span>
		</div>
	</div>
<?php include 'inc/footer.php'; ?>

			
			
			
			
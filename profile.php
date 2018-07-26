<?php include 'inc/header.php'; ?>
<?php
	Session::checkSession();
	$userid = Session::get("userid");
?>
<?php
	if($_SERVER["REQUEST_METHOD"] == 'POST') {
		$updateUser = $usr->UpdateUserData($userid, $_POST);
	}

?>
	<div class="content template">
		<div class="title" style="margin-bottom: 20px;">
			<h3>User Profile</h3>
		</div>
		<div class="Profile" style="width: 460px;margin: auto;border: 1px solid #ccc;padding: 30px;">
			<?php
				if (isset($updateUser)) {
					echo $updateUser;
				}
			?>
			<form action="" method="POST">
				<?php
				    $getData = $usr->getUserData($userid);
				    if ($getData) {
				    	$result = $getData->fetch_assoc();
				?>
				<table>
					<tr>
						<td style="font-family: verdana;font-size: 19px;">Name </td>
						<td><input type="text" name="name" value="<?php echo $result['name']; ?>" style="margin-top: 10px;padding: 12px 40px;border-radius: 5px;margin-left: 10px;/">
						</td>
					</tr>
					<tr>
						<td style="font-family: verdana;font-size: 19px;">Username </td>
						<td><input type="text" name="username" value="<?php echo $result['username']; ?>" style="margin-top: 10px;padding: 12px 40px;border-radius: 5px;margin-left: 10px;/">
						</td>
					</tr>
					<tr>
						<td style="font-family: verdana;font-size: 19px;">Email </td>
						<td><input type="text" name="email" value="<?php echo $result['email']; ?>" style="margin-top: 10px;padding: 12px 40px;border-radius: 5px;margin-left: 10px;"/>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Update"></td>
					</tr>
				</table>
				<?php  } ?>
			</form>
		</div>
		</div>
	</section>
<?php include 'inc/footer.php'; ?>

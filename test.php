<?php include 'inc/header.php'; ?>
<?php
	Session::checkSession();
	if (isset($_GET['q'])) {
		$number = (int) $_GET['q'];
	}else{
		header("Location:exam.php");
	}
	$total = $exam->getTotalRows();
	$question = $exam->getQuesByNumber($number);
?>

<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$process = $pro->ProcessData($_POST);
	}

?>
<div class="content template">
	<div class="title">
		<h3>Question <?php echo $question['quesNo']; ?> of <?php echo $total; ?></h3>
	</div>

	<div class="content-ques" style="border: 1px solid #eee;width: 705px;margin-left: auto;margin-right: auto;padding: 40px;margin-top: 0px;">
		<form action="" method="POST">
			<table class="tbl-test">
				<tr>
					<td colspan="2">
						<h4>Que <?php echo $question['quesNo']; ?>: <?php echo $question['ques']; ?></h4>
					</td>
				</tr>
				<?php
					$answer = $exam->getAnswer($number);
					if ($answer) {
						while ($result = $answer->fetch_assoc()) {
				?>
				<tr>
					<td>
						<input type="radio" name="ans" value="<?php echo $result['id']; ?>"> <?php echo $result['ans']; ?> 
					</td>
				</tr>

				<?php } } ?>
				<tr>
					<td>
						<input type="submit" name="submit" value="Next Question"  style="border: none;color: 
						#fff;background: #204185;font-size: 18px;font-family: verdana;margin-left: 10px;border-radius: 5px;padding: 10px 20px;cursor: pointer;">
		 				<input type="hidden" name="number" value="<?php echo $number; ?>">	
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<?php include 'inc/footer.php'; ?>

				
<?php include 'inc/header.php'; ?>
<?php
	Session::checkSession();
	$total = $exam->getTotalRows();
?>
		<div class="content template" style="height: 1460px;">
			<div class="title">
				<h3>All Questions & Ans: <?php echo $total; ?></h3>
			</div>

			<div class="content-ques" style="border: 1px solid #eee;width: 705px;margin-left: auto;margin-right: auto;padding: 40px;margin-top: 0px;">
				<?php
					$getQues = $exam->getQuesByOrder();
					if ($getQues) {
						while ($question = $getQues->fetch_assoc()) {

				?>
				<h4>Que <?php echo $question['quesNo']; ?>: <?php echo $question['ques']; ?></h4>
				<?php

					$number = $question['quesNo'];
					$answer = $exam->getAnswer($number);
					if ($answer) {
						while ($result = $answer->fetch_assoc()) {
				?>
				<div class="radio-button">
					<input type="radio">
						<?php
							if ($result['right_ans'] == '1') {
							 	echo "<span style='color:blue'>".$result['ans']."</span>";

							 }else{
							 	echo $result['ans']; 
							 } 
						?>
					<br>
				</div>
				<?php } } ?>

			<?php } } ?>
			<a href="start-test.php" style="color: #fff;margin-top: 20px;padding: 5px;background: #A6AECB;text-align: center;display: block;font-size: 20px;font-family: verdana;text-decoration: none;">Start Again</a>
			</div>
		</div>
<?php include 'inc/footer.php'; ?>	
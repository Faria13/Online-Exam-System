<?php include 'inc/header.php'; ?>
<?php
	Session::checkSession();
	$question = $exam->getQuestion();
	$total = $exam->getTotalRows();
?>
	<div class="content template">
		<div class="title">
			<h3>Welcome to Online Exam</h3>
		</div>
		<div class="starttest" style="width: 510px;margin: auto;border: 1px solid #eee;padding: 20px;">
			<h4 style="font-size: 22px;font-family: verdana;text-align: center;border-bottom: 1px solid #ddd;padding: 5px;">Test Your Knowledge</h4>
			<p style="font-family: verdana;font-size: 18px;margin-left: 20px;margin-top: 10px;">This is multiple choice quiz to test your knowledge!</p>
			<ul>
				<li style="margin-bottom: 10px;list-style: none;margin-top: 10px;font-family: verdana;font-size: 18px;margin-left: 22px;"><strong>Number of questions: </strong><?php echo $total; ?></li>
				<li style="margin-bottom: 10px;list-style: none;margin-top: 10px;font-family: verdana;font-size: 18px;margin-left: 22px;"><strong>Question Type: </strong>Multiple Choice</li>
			</ul>
			<a href="test.php?q=<?php echo $question['quesNo']; ?>" style="color: #fff;margin-top: 20px;padding: 5px;background: #A6AECB;text-align: center;display: block;font-size: 20px;font-family: verdana;text-decoration: none;">Start Test</a>
		</div>
	</div>
<?php include 'inc/footer.php'; ?>	
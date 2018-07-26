<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/Exam.php');
	$exam = new Exam();
?>
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$addQue = $exam->AddQuestion($_POST);
	}
	$total = $exam->getTotalRows();
	$next = $total+1;
?>
		<div class="content template" style="height: 605px;">
			<div class="title" style="margin-top: 30px;width: 850px;margin-bottom: 20px;">
				<h3>Admin Panel - Add Question</h3>
			</div>
			<?php
				if (isset($addQue)) {
					echo $addQue;
				}

			?>
			<div class="adminpanel" style="width: 650px;padding: 20px;border: 1px solid #ccc;margin: auto;">
				<h4>QES 1: What is the first event that will be triggered in the from?</h4>
				<form action="" method="POST">
					<table class="tbl-ques">
						<tr>
							<td>Question No. </td>
							<td>:</td>
							<td><input type="number" name="quesNo" value="<?php 
									if(isset($next)){
										echo $next;
									}?>">
							</td>
						</tr>
						<tr>
							<td>Question</td>
							<td>:</td>
							<td><input type="text" name="ques" placeholder="Enter question..." required="" style="padding: 11px 50px;margin-left: 10px;margin-bottom: 10px;"></td>
						</tr>
						<tr>
							<td>Choice one</td>
							<td>:</td>
							<td><input type="text" name="ans1" placeholder="Enter Choice one..." required=""></td>
						</tr>
						<tr>
							<td>Choice two</td>
							<td>:</td>
							<td><input type="text" name="ans2" placeholder="Enter Choice two..." required=""></td>
						</tr>
						<tr>
							<td>Choice three</td>
							<td>:</td>
							<td><input type="text" name="ans3" placeholder="Enter Choice three..." required=""></td>
						</tr>
						<tr>
							<td>Choice four</td>
							<td>:</td>
							<td><input type="text" name="ans4" placeholder="Enter Choice four..." required=""></td>
						</tr>
						<tr>
							<td>Correct No.</td>
							<td>:</td>
							<td><input type="number" name="right_ans" required=""></td>
						</tr>
						<tr>
							<td colspan="3" align="center">
								<input type="submit" value="Add a question" style="cursor: pointer;">
							</td>
						</tr>
				</table>
				</form>
			</div>
		</div>
<?php include 'inc/footer.php'; ?>
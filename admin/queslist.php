<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/Exam.php');
	$exm = new Exam();
?>
<?php
	if (isset($_GET['delques'])) {
		$quesNo = (int)$_GET['delques'];
		$delques = $exm->DeleteQuestion($quesNo);
	}


?>
	<div class="content template">
		<div class="title">
			<h3>Admin Panel - Question List</h3>
		</div>
		<?php
			if (isset($delques)) {
				echo $delques;
			}
		?>
		<div class="queslist">
			<table class="tblone">
				<tr class="thead">
					<th width="10%">No</th>
					<th width="60%">Question</th>
					<th width="30%">Action</th>
				</tr>
				<?php
					$getData = $exm->getQuesByOrder();
					if ($getData) {
						$i = 0;
						while ($result = $getData->fetch_assoc()) {
						$i++;
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td style="text-align:left;"><?php echo $result['ques']; ?></td>
					<td>
						<a onclick="return confirm('Are you sure to remove?')" href="?delques=<?php echo $result['quesNo']; ?>">Remove</a>
					</td>
				</tr>
				<?php
						}
					}
				?>
			</table>
		</div>
	</div>
<?php include 'inc/footer.php'; ?>
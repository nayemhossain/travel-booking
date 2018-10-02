<?php
	//if(!isset($_POST['person'])||!isset($_POST['amount'])){
		//echo "<script>document.location='404.php'</script>"
		//echo "<script>document.location='404.php'</script>";
	//}
	//else{
		$person = $_POST['person'];
		$amount = $_POST['amount'];
		//$amount = implode('', array_splice(explode(' ', $_POST['amount']),0, 1));

		$total = $person * $amount

		
	//}
?>
<input id="amount" type="text" class="form-control" name="amount" value="<?php echo $total.' '.'&#2547;'; ?>" disabled>
<?php  session_start(); ?>
<?php include('includes/config.php'); ?>

<?php
	if(!isset($_SESSION['login'])){
		echo "<script>document.location='404.php'</script>";
	}

?>
<?php
if(!isset($_GET['booking_id'])||!isset($_GET['package_id'])){
	echo "<script>document.location='ticket.php'</script>";
}
?>	
<!DOCTYPE html>
<html>
<head>
<title>Welcome | trip.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- bootstrap-css -->
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/font-awesome.css" rel="stylesheet"> 

</head>
<body>
	<div class="container">
	<table class="table">
		<tr>
			<td colspan="3"><button class="btn btn-danger" id="print" style="font-size: 20px;"><span class="fa fa-print" autofocus></span></button></td>
		</tr>
		<tr>
			<td>
				<i><h2>Trip.com</h2></i>
				<i><p>121, Motijheel</p></i>
				<i><p>Uttara Tower(4th floor)</p></i>
				<i><p>Karwanbazar Dhaka-1209</p></i>
				<i><p>Phone : 3215215, 254125</p></i>
				<i><p>email : mail@trip.com</p></i>
			</td>
			<td>
				<img src="images/trip.png" height="100" width="100">
			</td>
			<td>
				<img src="images/images.png" height="100" width="100"><br><br>
				<p><b><i>Date : <?php echo date('d-M-Y'); ?></i></b></p><br>
				<p><b><i>Ticket ID : B23254555</i></b></p>
			</td>
		</tr>
		
	</table>
		<?php
		$booking_id = $_GET['booking_id'];
		$client_name = $_SESSION['name'];
		$client_email = $_SESSION['login'];
		$sql = "SELECT tb_booking.BookingId, tb_booking.transaction_id, tb_packages.from_date, tb_packages.PackageId, tb_packages.to_date, tb_booking.Comment, tb_booking.RegDate, tb_booking.status, tb_booking.UpdationDate, tb_packages.PackageName FROM tb_booking, tb_packages Where tb_booking.BookingId='$booking_id' AND tb_booking.PackageId=tb_packages.PackageId";
		$run_sql = $db_config->query($sql);
		$result = $run_sql->fetch_object();
		//print_r($result);
		?>

				<table class="table tablestriped">
					<tr>
						<th>
							Booking ID :
						</th>
						<td>
							<?php echo $result->BookingId; ?>
						</td>
						<th>
							Transaction ID :
						</th>
						<td>
							<?php echo $result->transaction_id; ?>
						</td>
					</tr>
					<tr>
						<th>
							Package Name :
						</th>
						<td>
							<?php echo $result->PackageName; ?>
						</td>
						<th>
							Booking Date :
						</th>
						<td>
							<?php echo $result->RegDate; ?>
						</td>
					</tr>
					<tr>
						<th>
							From Date :
						</th>
						<td>
							<?php echo date('d-M-Y', $result->from_date); ?>
						</td>
						<th>
							To Date :
						</th>
						<td>
							<?php echo date('d-M-Y', $result->to_date); ?>
						</td>
					</tr>
					<tr>
						<th>
							Payment :
						</th>
						<td>
							paid
						</td>
						<th>
							Booking Date
						</th>
						<td>
							<?php echo $result->RegDate; ?>
						</td>
					</tr>
				</table><br>
				<table class="table">
					<tr>
						<th>
							Pickup point :
						</th>
						<td>
							Dhaka International Airport
						</td>
					</tr>
					<tr>
						<th>
							Reporting Time :
						</th>
						<td>
							<?php echo date('d-M-Y', $result->from_date)." at 10:00pm"; ?>
						</td>
					</tr>
					<tr>
						<th>
							Travel Agent :
						</th>
						<td>
							Mr. Rakib Ahmed
						</td>
					</tr>
					<tr>
						<th>
							Contact No. :
						</th>
						<td>
							01254121541
						</td>
					</tr>
				</table>
				<p align="right"><b><i>THANK YOU FOR BEING WITH US</i></b></p><br><br><br><br>
				<p>&copy; All rights reserved by Trip.com</p>
</div>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#print').click(function(){
				window.print();
			});
		});
	</script>
</body>	
</html>

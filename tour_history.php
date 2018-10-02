<?php include "includes/header.php"; ?>
<?php include('includes/config.php'); ?>
<?php
	if(!isset($_SESSION['login'])){
		echo "<script>document.location='404.php'</script>";
	}

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql = "SELECT from_date FROM tb_packages WHERE PackageId='$id'";
		$run_sql = $db_config->query($sql);
		$result = $run_sql->fetch_object();
		$today = date('Y-m-d');
		$fromday = date('Y-m-d', $result->from_date);
		$todate = date_create("$today");
		$fromdate = date_create("$fromday");
		$diff = date_diff($todate, $fromdate);
		if($diff->format("%a")>3){
		$sql = "UPDATE tb_booking SET status=2, cncl_cnfrm_by='user' WHERE BookingId=$id";
		$run_sql = $db_config->query($sql);
		if($run_sql===TRUE){
			echo "<script>document.location='tour_history.php'</script>";
		}
		}
		else{
			echo "<script>alert('You can cancel trip only before 72 hours')</script>";
		}

	}

?>		
		<div class="blog">
			<!-- container -->
			<div class="container">
				<div class="blog-heading">
					<h2 class="wow fadeInDown animated" data-wow-delay=".5s">My Tour History</h2>
				</div>
				<div class="blog-top-grids">
					<div class="col-md-12 blog-top-left-grid">
						<table class="table table-stripped table-hover">
							<thead>
								<tr>
								<th>Booking ID</th>
								<th>Transaction ID</th>
								<th>Package Name</th>
								<th>From</th>
								<th>To</th>
								<th>Comment</th>
								<th>Status</th>
								<th>Booking Date</th>
								<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
								<th>Booking ID</th>
								<th>Transaction ID</th>
								<th>Package Name</th>
								<th>From</th>
								<th>To</th>
								<th>Comment</th>
								<th>Status</th>
								<th>Booking Date</th>
								<th>Action</th>
							</tr>
							</tfoot>
							<tbody>
								<?php

									$id = $_SESSION['user_id'];
									$sql = "SELECT tb_booking.BookingId, tb_booking.transaction_id, tb_packages.from_date, tb_packages.PackageId, tb_packages.to_date, tb_booking.Comment, tb_booking.RegDate, tb_booking.status, tb_booking.UpdationDate, tb_packages.PackageName FROM tb_booking, tb_packages Where tb_booking.client_id='$id' AND tb_booking.PackageId=tb_packages.PackageId ORDER BY tb_booking.BookingId DESC";
									$run_sql = $db_config->query($sql);
									while($result = $run_sql->fetch_object()){
								?>
								<tr>
									<td><?php echo $result->BookingId; ?></td>
									<td><?php echo $result->transaction_id; ?></td>
									<td><?php echo $result->PackageName; ?></td>
									<td><?php echo date('d M Y', $result->from_date); ?></td>
									<td><?php echo date('d M Y', $result->to_date); ?></td>
									<td><?php echo $result->Comment; ?></td>
									<td>
										<?php

											if($result->status==2){
												echo "<span style='color:red'>CANCELLED</span>";
											}

											if($result->status==1){
												echo "<span style='color:green'>CONFIRMED</span>";
											}

											if($result->status==0 && $result->from_date>strtotime(date('Y-m-d')) && $result->to_date>strtotime(date('Y-m-d'))){
												echo "<span style='color:skyblue'>PENDING</span>";
											}

											if($result->status==0 && ($result->to_date<strtotime(date('Y-m-d'))||$result->from_date<strtotime(date('Y-m-d')))){
												echo "<span style='color:red'>EXPIRED</span>";
											}
										?>
									</td>
									<td><?php echo $result->RegDate; ?></td>
									<td>
										<?php

										if($result->status==0 && $result->from_date>strtotime(date('Y-m-d')) && $result->to_date>strtotime(date('Y-m-d'))){?>
											<a href="tour_history.php?id=<?php echo $result->BookingId; ?>" class="btn btn-danger" onclick="return confirm('Do you really want to cancel your trip')">Cancel</a>
										<?php
										}

										if($result->status==2 && $result->cncl_cnfrm_by="user"){
												echo "<span>Cancelled by You on ".$result->UpdationDate."</span>";
										
										}

										?>
										
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
	<!-- //blog -->
	
	<!-- footer -->
	<?php include('includes/footer.php'); ?>
	<!-- //footer -->
</body>	
</html>
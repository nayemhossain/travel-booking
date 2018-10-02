<?php include "includes/header.php"; ?>
<?php include('includes/config.php'); ?>
<?php
	if(!isset($_SESSION['login'])){
		echo "<script>document.location='404.php'</script>";
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
						<table class="table table-stripped table-hover wow fadeInUp animated" data-wow-delay=".5s"">
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
								<th>Ticket</th>
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
								<th>Ticket</th>
							</tr>
							</tfoot>
							<tbody>
								<?php

									$today = strtotime(date('d-m-Y'));
									$id = $_SESSION['user_id'];
									$sql = "SELECT tb_booking.BookingId, tb_booking.transaction_id, tb_packages.from_date, tb_packages.PackageId, tb_packages.to_date, tb_booking.Comment, tb_booking.RegDate, tb_booking.status, tb_booking.UpdationDate, tb_packages.PackageName FROM tb_booking, tb_packages Where tb_booking.client_id='$id' AND tb_booking.PackageId=tb_packages.PackageId AND tb_packages.from_date>'$today' AND tb_booking.status=1 ORDER BY tb_booking.BookingId DESC";
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
										
											<a href="collect_ticket.php?booking_id=<?php echo $result->BookingId; ?>&package_id=<?php echo $result->PackageId; ?>" class="btn btn-big btn-info" target="_blank">Collect ticket</a>
										
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
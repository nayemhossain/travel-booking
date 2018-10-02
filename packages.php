	<?php include('includes/config.php'); ?>
	<?php include "includes/header.php"; ?>

	<div class="banner-inner wow fadeInDown animated" style="margin-bottom: -100px;">
		<div class="banner-inner-dott wow fadeInDown animated" data-wow-delay=".5s">       
		    <!--banner-info-->
			<div class="">
			  <h1 class="wow fadeInLeft animated" data-wow-delay="1.1s" style="margin-top: 0px; color: white; padding-top: 10px; font-weight: bold; font-size: 50px;">Choose yours</h1>
			    <h2 class="wow fadeInRight animated" data-wow-delay="1.1s" style="margin-top: 0px; color: white; padding-top: 10px;">from a huge collection!</h2>			     
			</div>
		<!--//banner-info-->	
		</div>
	 </div>

	<!-- gallery -->
		<div class="gallery" >
			<div class="container-fluid" >
							
				<div class="gallery-grids col-md-8">
				<?php
				if(isset($_POST['submit'])){
					if(isset($_SESSION['login'])){
						$client_id = $_SESSION['user_id'];
						$review = $_POST['review'];
						$sql = "INSERT INTO tb_review (client_id, review) VALUES ('$client_id', '$review')";
						$run_sql = $db_config->query($sql);
						if($run_sql===TRUE){
							echo "<script>alert('Thanq you for your review')</script>";
						}
					}
					else{
						echo "<script>document.location='login.php'</script>";
					}
				}
				?>
				<?php
					$today = strtotime(date('d-M-Y'));
					$package_per_page = 9;
					$sql_tmp = "SELECT * FROM tb_packages WHERE from_date>'$today'";
					$query_tmp = $db_config->query($sql_tmp);
					 $number_of_data = $query_tmp->num_rows;
					$number_of_pages = ceil($number_of_data/$package_per_page);
					if(!isset($_GET['page'])){
						$page = 1;
					}
					else{
						if($_GET['page']>$number_of_pages){
						$page = $number_of_pages;
						}
					else if($_GET['page']<1){
						$page = 1;
						}
					else{
						$page = $_GET['page'];
						}
					}
					
					$first_page_offset = ($page-1)*$package_per_page;

				?>
				
				<?php 
						
						$sql = "SELECT * from tb_packages WHERE from_date>'$today' ORDER BY PackageId DESC LIMIT $first_page_offset, $package_per_page";
						$run_sql = $db_config->query($sql);
						
						while($row = $run_sql->fetch_object()){
				?>	

					<div class="col-md-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
						<div class="grid">
							<figure class="effect-apollo">
								<a class="example-image-link" href="package_book.php?id=<?php echo $row->PackageId; ?>" style="text-decoration: none; color: #999999;">
									<div class="row" style="font-weight: normal; color: white; background-color: #9575CD; padding-left: 20px; padding-right: 20px;">
										<div class="pull-left">
											<h4><?php echo $row->PackageName; ?></h4>								
											<h4 style="margin: 10px;"><span class="fa fa-map-marker"></span>&nbsp;&nbsp;&nbsp;<?php echo $row->PackageLocation; ?></h4>
											
										</div>
										<div class="pull-right">
											<?php
											$date_from = date_create(date('d-m-Y', $row->from_date));
											$date_to = date_create(date('d-m-Y', $row->to_date));
											$duration = date_diff($date_from, $date_to)->format('%a');
										?>									
											<h4 style="margin: 10px;"><span class="fa fa-clock-o"></span>&nbsp;&nbsp;&nbsp;<?php echo $duration; ?> days</h4>
										</div>
									</div>
									<img src="images/packages/<?php echo $row->PackageImage; ?>" alt="image" height="150" />
									<figcaption>
										<h4></h4>
									</figcaption>
									<div class="row" style="font-weight: normal; color: white; background-color: #9575CD; padding-left: 20px; padding-right: 20px;">
										<div class="pull-left">
											<h4><?php echo date('d M', $row->from_date)." to ".date('d M', $row->to_date); ?></h4>
										</div>
										<div class="pull-right">
											<h4>starts from</h4>
											<h3>&#2547;&nbsp;&nbsp;&nbsp;<?php echo $row->PackagePrice; ?></h3>
										</div>
									</div>

								</a>
							</figure>
						</div>
					</div>

					<?php } ?>
					<div align="center">
						<nav aria-label="Page navigation example">
						  <ul class="pagination">
						  	<li class="page-item"><a class="page-link" href="packages.php?page=<?php echo $page-1; ?>">Previous</a></li>

						  	<?php for($i=1; $i<=$number_of_pages; $i++){ ?>	

						    <li class="page-item"><a class="page-link" href="packages.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>	

						    <?php } ?>

						    <li class="page-item"><a class="page-link" href="packages.php?page=<?php echo $page+1; ?>">Next</a></li>
						  </ul>
						</nav>
					</div>
					<div class="clearfix"> </div>
					<script src="js/lightbox-plus-jquery.min.js"> </script>
				</div>
				<div class="col-md-4 blog-top-right-grid">

						<div class="comments">
							<h3 class="wow fadeInUp animated" data-wow-delay=".5s">Upcomming tours</h3>
							<?php
							$today = strtotime(date('d-m-Y'));
							$sql = "SELECT * from tb_packages where from_date>'$today' ORDER BY RAND() LIMIT 3";
							$run_sql = $db_config->query($sql);
							while($row = $run_sql->fetch_object()){
							?>
							<a href="package_book.php?id=<?php echo $row->PackageId; ?>">
							<div class="comments-text wow fadeInUp animated" data-wow-delay=".5s">
								<div class="col-md-3 comments-left">
									<img src="images/packages/<?php echo $row->PackageImage; ?>" alt="" />
								</div>
								<div class="col-md-9 comments-right">
									<h5><?php echo $row->PackageName; ?></h5>
									<a href="package_book.php?id=<?php echo $row->PackageId; ?>"><?php echo $row->PackageName; ?></a> 
									<p><?php echo date('d-M-Y', $row->from_date)." to ".date('d-M-Y', $row->to_date); ?></p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</a>

							<?php } ?>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="Categories wow fadeInUp animated" data-wow-delay=".5s">
									<h3>Archive</h3>
									<ul class="marked-list offs1">
										<?php $sql = "SELECT * FROM tb_packages WHERE month=1";
											$run_sql_1 = $db_config->query($sql);
											
										 ?>
										<li><a href="monthly_packages.php?id=1">Jan 2018 (<?php echo $run_sql_1->num_rows; ?>)</a></li>
										<?php $sql = "SELECT * FROM tb_packages WHERE month=2";
											$run_sql_2 = $db_config->query($sql);
											
										 ?>
										<li><a href="monthly_packages.php?id=2">Feb 2018 (<?php echo $run_sql_2->num_rows; ?>)</a></li>
										<?php $sql = "SELECT * FROM tb_packages WHERE month=3";
											$run_sql_3 = $db_config->query($sql);
											
										 ?>
										<li><a href="monthly_packages.php?id=3">Mar 2018 (<?php echo $run_sql_3->num_rows; ?>)</a> </li>
										<?php $sql = "SELECT * FROM tb_packages WHERE month=4";
											$run_sql_4 = $db_config->query($sql);
											
										 ?>
										<li><a href="monthly_packages.php?id=4">Apr 2018 (<?php echo $run_sql_4->num_rows; ?>)</a></li>
										<?php $sql = "SELECT * FROM tb_packages WHERE month=5";
											$run_sql_5 = $db_config->query($sql);
											
										 ?>
										<li><a href="monthly_packages.php?id=5">May 2018 (<?php echo $run_sql_5->num_rows; ?>)</a></li>
										<?php $sql = "SELECT * FROM tb_packages WHERE month=6";
											$run_sql_6 = $db_config->query($sql);
											
										 ?>
										<li><a href="monthly_packages.php?id=6">Jun 2018 (<?php echo $run_sql_6->num_rows; ?>)</a></li> 
										<?php $sql = "SELECT * FROM tb_packages WHERE month=7";
											$run_sql_7 = $db_config->query($sql);
											
										 ?>
										<li><a href="monthly_packages.php?id=7">Jul 2018 (<?php echo $run_sql_7->num_rows; ?>)</a> </li> 
										<?php $sql = "SELECT * FROM tb_packages WHERE month=8";
											$run_sql_8 = $db_config->query($sql);
											
										 ?>
										<li><a href="monthly_packages.php?id=8">Aug 2018 (<?php echo $run_sql_8->num_rows; ?>)</a></li>
										<?php $sql = "SELECT * FROM tb_packages WHERE month=9";
											$run_sql_9 = $db_config->query($sql);
											
										 ?>
										<li><a href="monthly_packages.php?id=9">Sep 2018 (<?php echo $run_sql_9->num_rows; ?>)</a></li> 
										<?php $sql = "SELECT * FROM tb_packages WHERE month=10";
											$run_sql_10 = $db_config->query($sql);
											
										 ?> 
										<li><a href="monthly_packages.php?id=10">Oct 2018 (<?php echo $run_sql_10->num_rows; ?>)</a></li>
										<?php $sql = "SELECT * FROM tb_packages WHERE month=11";
											$run_sql_11 = $db_config->query($sql);
											
										 ?>								
										<li><a href="monthly_packages.php?id=11">Nov 2018 (<?php echo $run_sql_11->num_rows; ?>)</a></li>
										<?php $sql = "SELECT * FROM tb_packages WHERE month=12";
											$run_sql_12 = $db_config->query($sql);
											
										 ?>
										<li><a href="monthly_packages.php?id=12">Dec 2018 (<?php echo $run_sql_12->num_rows; ?>)</a></li>                         
									</ul>
								</div>
							</div>
							<div class="col-md-8">
								<div class="comments">
									<h3 class="wow fadeInUp animated" data-wow-delay=".5s">What peaple say</h3>
									<?php
									$today = strtotime(date('d-m-Y'));
									$sql = "SELECT tb_review.id, tb_review.review, tb_review.posting_date, tb_clients.FullName, tb_clients.image from tb_review, tb_clients where tb_review.client_id=tb_clients.id ORDER BY RAND() LIMIT 3";
									$run_sql = $db_config->query($sql);
									while($row = $run_sql->fetch_object()){
									?>
									<div class="comments-text wow fadeInUp animated" data-wow-delay=".5s">								
										<div class="col-md-9 comments-right">
											<h5><?php echo $row->FullName; ?></h5>
											<a href="peoples_review.php?id=<?php echo $row->id; ?>"><?php echo implode(' ',array_splice(explode(' ', $row->review), 0, 15)); ?>...</a> 
											<p><?php echo $row->posting_date; ?></p>
										</div>
										<div class="col-md-3 comments-left">
											<img src="images/clients/<?php echo $row->image; ?>" alt="image" />
										</div>
										<div class="clearfix"> </div>
									</div>

									<?php } ?>
									<div class="clearfix"></div>
									<div class="comments-text wow fadeInUp animated" data-wow-delay=".5s">
										
										<div class="col-md-9 comments-right">
											<h5>Give your review</h5>
											<form method="post">
												<textarea class="form-control" name="review" required></textarea><br>
												<input type="submit" name="submit" value="submit" class="btn btn-info" pull-right>
											</form>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>

						</div>						
					</div>
			</div>
		</div>
	<!-- //gallery -->
	
	<?php include "includes/footer.php"; ?>
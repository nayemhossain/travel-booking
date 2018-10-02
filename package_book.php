	<?php include('includes/config.php'); ?>
	<?php include('includes/header.php'); ?>


	<?php
	if(!isset($_GET['id'])){
		echo "<script>document.location='packages.php'</script>";
	}

		$id = $_GET['id'];
		$sql = "SELECT * from tb_packages where PackageId='$id'";
		$run_sql = $db_config->query($sql);
						
		$row = $run_sql->fetch_object();
	 ?>
	
	<div class="banner-inner wow fadeInDown animated">
		<img src="images/packages/<?php echo $row->PackageImage; ?>" height="300" width=100% style="">
	 </div>

	<!-- gallery -->
		<div class="gallery">
			<div class="container">				
				<div class="gallery-grids">
					<div class="col-md-6 gallery-grid wow fadeInUp animated" data-wow-delay=".5s" style="margin-top: -250px; border: 1px solid #BFBFBF; background-color: white;
   						 box-shadow: 0px 1px 1px #aaaaaa;">
						<div class="grid">
							<figure class="">
								<div class="example-image-link" href="" style="text-decoration: none; color: #999999">
									<img src="images/packages/<?php echo $row->PackageImage; ?>" alt="" height="200" />
									<div class="row" style="font-weight: normal; color: white; background-color: #9575CD; padding-left: 20px; padding-right: 20px;">
										<div class="pull-left">
										<?php
											$date_from = date_create(date('d-m-Y', $row->from_date));
											$date_to = date_create(date('d-m-Y', $row->to_date));
											$duration = date_diff($date_from, $date_to)->format('%a');
										?>										
											<h4 style="margin: 10px;"><span class="fa fa-clock-o"></span>&nbsp;&nbsp;&nbsp;<?php echo $duration; ?> days</h4>
											<h4><?php echo date('d M', $row->from_date)." to ".date('d M', $row->to_date); ?></h4>
										</div>
										<div class="pull-right">
											<h4>starts from</h4>
											<h3>&#2547;&nbsp;&nbsp;&nbsp;<?php echo $row->PackagePrice; ?></h3>
										</div>
									</div>
										<h4 align="left"><span class="fa fa-map-marker"></span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->PackageLocation; ?></h4><hr>
										<h5 align="left"><?php echo $row->PackageType; ?></h5><hr>
										<h4 align="left">Package Fetures</h4>
										<h5 align="left"><?php echo $row->PackageFetures; ?></h5><hr>
										<h4 align="left">Package Details</h4>
										<h5 align="left"><?php echo $row->PackageDetails; ?></h5><hr>

								</div>
							</figure>
						</div>
					</div>
					<?php if(isset($_POST['submit'])){
						if(isset($_SESSION['login'])){
							$package_id = $id;
							$package = $row->PackageName;
							$from_date = date('d M Y', $row-> from_date);
							$to_date = date('d M Y', $row-> to_date);
							$client_id = $_SESSION['user_id'];
							$user_email = $_SESSION['login'];
							$client_name = $_SESSION['name'];
							$person = $_POST['person'];
							$comment = $_POST['comment'];
							$amount_ini = $row->PackagePrice;
							$amount = $person * $amount_ini;
							$card_no = $_POST['card_no'];
							$status = 0;
							//$amount = implode(array_splice(explode(' ', $amount_ini), 0, 1));

							$sql_2 = "INSERT INTO tb_transaction (client_id, package_id, amount, card_no) VALUES('$client_id', '$package_id', '$amount', '$card_no')";
							$query_2 = $db_config->query($sql_2);
							$transaction_id = mysqli_insert_id($db_config);

							$sql = "INSERT INTO tb_booking (PackageId, client_id, transaction_id, Comment, status) VALUES('$package_id', '$client_id', '$transaction_id', '$comment', '$status')";
							$query = $db_config->query($sql);
							
							if($query===TRUE && $query_2===TRUE){
								echo "<script>document.location='flashMessage.php?message=booking1'</script>";
								 $to = $user_email. ','. 'paponbd2016@gmail.com'; // note the comma

					            // Subject
					            $subject = 'Booking request conformation';

					            // Message
					            $message = '
					            <!doctype html>
					            <html>
					              <head>
					                <meta name="viewport" content="width=device-width" />
					                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
					                <title>Travel Booking BD</title>
					                <style>
					                  /* -------------------------------------
					                      GLOBAL RESETS
					                  ------------------------------------- */
					                  img {
					                    border: none;
					                    -ms-interpolation-mode: bicubic;
					                    max-width: 100%; }

					                  body {
					                    background-color: #f6f6f6;
					                    font-family: sans-serif;
					                    -webkit-font-smoothing: antialiased;
					                    font-size: 14px;
					                    line-height: 1.4;
					                    margin: 0;
					                    padding: 0;
					                    -ms-text-size-adjust: 100%;
					                    -webkit-text-size-adjust: 100%; }

					                  table {
					                    border-collapse: separate;
					                    mso-table-lspace: 0pt;
					                    mso-table-rspace: 0pt;
					                    width: 100%; }
					                    table td {
					                      font-family: sans-serif;
					                      font-size: 14px;
					                      vertical-align: top; }

					                  /* -------------------------------------
					                      BODY & CONTAINER
					                  ------------------------------------- */

					                  .body {
					                    background-color: #f6f6f6;
					                    width: 100%; }

					                  /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
					                  .container {
					                    display: block;
					                    Margin: 0 auto !important;
					                    /* makes it centered */
					                    max-width: 580px;
					                    padding: 10px;
					                    width: 580px; }

					                  /* This should also be a block element, so that it will fill 100% of the .container */
					                  .content {
					                    box-sizing: border-box;
					                    display: block;
					                    Margin: 0 auto;
					                    max-width: 580px;
					                    padding: 10px; }

					                  /* -------------------------------------
					                      HEADER, FOOTER, MAIN
					                  ------------------------------------- */
					                  .main {
					                    background: #ffffff;
					                    border-radius: 3px;
					                    width: 100%; }

					                  .wrapper {
					                    box-sizing: border-box;
					                    padding: 20px; }

					                  .content-block {
					                    padding-bottom: 10px;
					                    padding-top: 10px;
					                  }

					                  .footer {
					                    clear: both;
					                    Margin-top: 10px;
					                    text-align: center;
					                    width: 100%; }
					                    .footer td,
					                    .footer p,
					                    .footer span,
					                    .footer a {
					                      color: #999999;
					                      font-size: 12px;
					                      text-align: center; }

					                  /* -------------------------------------
					                      TYPOGRAPHY
					                  ------------------------------------- */
					                  h1,
					                  h2,
					                  h3,
					                  h4 {
					                    color: #000000;
					                    font-family: sans-serif;
					                    font-weight: 400;
					                    line-height: 1.4;
					                    margin: 0;
					                    Margin-bottom: 30px; }

					                  h1 {
					                    font-size: 35px;
					                    font-weight: 300;
					                    text-align: center;
					                    text-transform: capitalize; }

					                  p,
					                  ul,
					                  ol {
					                    font-family: sans-serif;
					                    font-size: 14px;
					                    font-weight: normal;
					                    margin: 0;
					                    Margin-bottom: 15px; }
					                    p li,
					                    ul li,
					                    ol li {
					                      list-style-position: inside;
					                      margin-left: 5px; }

					                  a {
					                    color: #3498db;
					                    text-decoration: underline; }

					                  /* -------------------------------------
					                      BUTTONS
					                  ------------------------------------- */
					                  .btn {
					                    box-sizing: border-box;
					                    width: 100%; }
					                    .btn > tbody > tr > td {
					                      padding-bottom: 15px; }
					                    .btn table {
					                      width: auto; }
					                    .btn table td {
					                      background-color: #ffffff;
					                      border-radius: 5px;
					                      text-align: center; }
					                    .btn a {
					                      background-color: #ffffff;
					                      border: solid 1px #3498db;
					                      border-radius: 5px;
					                      box-sizing: border-box;
					                      color: #3498db;
					                      cursor: pointer;
					                      display: inline-block;
					                      font-size: 14px;
					                      font-weight: bold;
					                      margin: 0;
					                      padding: 12px 25px;
					                      text-decoration: none;
					                      text-transform: capitalize; }

					                  .btn-primary table td {
					                    background-color: #3498db; }

					                  .btn-primary a {
					                    background-color: #3498db;
					                    border-color: #3498db;
					                    color: #ffffff; }

					                  /* -------------------------------------
					                      OTHER STYLES THAT MIGHT BE USEFUL
					                  ------------------------------------- */
					                  .last {
					                    margin-bottom: 0; }

					                  .first {
					                    margin-top: 0; }

					                  .align-center {
					                    text-align: center; }

					                  .align-right {
					                    text-align: right; }

					                  .align-left {
					                    text-align: left; }

					                  .clear {
					                    clear: both; }

					                  .mt0 {
					                    margin-top: 0; }

					                  .mb0 {
					                    margin-bottom: 0; }

					                  .preheader {
					                    color: transparent;
					                    display: none;
					                    height: 0;
					                    max-height: 0;
					                    max-width: 0;
					                    opacity: 0;
					                    overflow: hidden;
					                    mso-hide: all;
					                    visibility: hidden;
					                    width: 0; }

					                  .powered-by a {
					                    text-decoration: none; }

					                  hr {
					                    border: 0;
					                    border-bottom: 1px solid #f6f6f6;
					                    Margin: 20px 0; }

					                  /* -------------------------------------
					                      RESPONSIVE AND MOBILE FRIENDLY STYLES
					                  ------------------------------------- */
					                  @media only screen and (max-width: 620px) {
					                    table[class=body] h1 {
					                      font-size: 28px !important;
					                      margin-bottom: 10px !important; }
					                    table[class=body] p,
					                    table[class=body] ul,
					                    table[class=body] ol,
					                    table[class=body] td,
					                    table[class=body] span,
					                    table[class=body] a {
					                      font-size: 16px !important; }
					                    table[class=body] .wrapper,
					                    table[class=body] .article {
					                      padding: 10px !important; }
					                    table[class=body] .content {
					                      padding: 0 !important; }
					                    table[class=body] .container {
					                      padding: 0 !important;
					                      width: 100% !important; }
					                    table[class=body] .main {
					                      border-left-width: 0 !important;
					                      border-radius: 0 !important;
					                      border-right-width: 0 !important; }
					                    table[class=body] .btn table {
					                      width: 100% !important; }
					                    table[class=body] .btn a {
					                      width: 100% !important; }
					                    table[class=body] .img-responsive {
					                      height: auto !important;
					                      max-width: 100% !important;
					                      width: auto !important; }}

					                  /* -------------------------------------
					                      PRESERVE THESE STYLES IN THE HEAD
					                  ------------------------------------- */
					                  @media all {
					                    .ExternalClass {
					                      width: 100%; }
					                    .ExternalClass,
					                    .ExternalClass p,
					                    .ExternalClass span,
					                    .ExternalClass font,
					                    .ExternalClass td,
					                    .ExternalClass div {
					                      line-height: 100%; }
					                    .apple-link a {
					                      color: inherit !important;
					                      font-family: inherit !important;
					                      font-size: inherit !important;
					                      font-weight: inherit !important;
					                      line-height: inherit !important;
					                      text-decoration: none !important; }
					                    .btn-primary table td:hover {
					                      background-color: #34495e !important; }
					                    .btn-primary a:hover {
					                      background-color: #34495e !important;
					                      border-color: #34495e !important; } }

					                </style>
					              </head>
					              <body class="">
					                <table border="0" cellpadding="0" cellspacing="0" class="body">
					                  <tr>
					                    <td>&nbsp;</td>
					                    <td class="container">
					                      <div class="content">

					                        <!-- START CENTERED WHITE CONTAINER -->
					                        <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span>
					                        <table class="main">

					                          <!-- START MAIN CONTENT AREA -->
					                          <tr>
					                            <td class="wrapper">
					                              <table border="0" cellpadding="0" cellspacing="0">
					                                <tr>
					                                  <td>
					                                    <p>Hi '.$client_name.',</p>
					                                    <p>Your booking request has been received.Please check for more details pressing the button bellow.</p>
					                                    <p>Here is your booking details</p>
					                                    <ul>
					                                        <li>Package Name : '.$package.'</li>
					                                        <li>Tour start : '.$from_date.'</li>
					                                        <li>Tour end : '.$to_date.'</li>
					                                        <li>Transaction ID : '.$transaction_id.'</li>
					                                    </ul>
					                                    <p>
					                                    You will be informed as soon as your booking is confirmed.
					                                    </p>
					                                    <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
					                                      <tbody>
					                                        <tr>
					                                          <td align="left">
					                                            <table border="0" cellpadding="0" cellspacing="0">
					                                              <tbody>
					                                                <tr>
					                                                  <td> <a href="http://paponbd.000webhostapp.com/travel_booking/login.php" target="_blank">For any query !!!</a> </td>
					                                                </tr>
					                                              </tbody>
					                                            </table>
					                                          </td>
					                                        </tr>
					                                      </tbody>
					                                    </table>
					                                    <p>Thank you for being with us.</p>
					                                    <p>Yours faithfully.</p>
					                                    <p>Mr.Papon</p>
					                                    <p>Package Dept.</p>
					                                    <p>Trip.com ltd.</p>
					                                  </td>
					                                </tr>
					                              </table>
					                            </td>
					                          </tr>

					                        <!-- END MAIN CONTENT AREA -->
					                        </table>

					                        <!-- START FOOTER -->
					                        <div class="footer">
					                          <table border="0" cellpadding="0" cellspacing="0">
					                            <tr>
					                              <td class="content-block">
					                                <span class="apple-link">Travel Booking BD ltd, IDB Bhaban, Agargaon, Dhaka, 1207</span>
					                              </td>
					                            </tr>
					                            <tr>
					                              <td class="content-block powered-by">
					                                Powered by <a href="http://paponbd.000webhostapp.com/">Travel Booking BD</a>.
					                              </td>
					                            </tr>
					                          </table>
					                        </div>
					                        <!-- END FOOTER -->

					                      <!-- END CENTERED WHITE CONTAINER -->
					                      </div>
					                    </td>
					                    <td>&nbsp;</td>
					                  </tr>
					                </table>
					              </body>
					            </html>

					            ';

					            // To send HTML mail, the Content-type header must be set
					            $headers[] = 'MIME-Version: 1.0';
					            $headers[] = 'Content-type: text/html; charset=iso-8859-1';

					            // Additional headers
					            $headers[] = 'From: Travel Booking BD ltd <travelbookingbd@gmail.com>';
					            $headers[] = 'Cc: birthdayarchive@example.com';
					            $headers[] = 'Bcc: birthdaycheck@example.com';

					            // Mail it
					            mail($to, $subject, $message, implode("\r\n", $headers));
        

							}
							else{echo "<script>document.location='flashMessage.php?message=booking0'</script>";}
							
						}
						else {echo "<script type='text/javascript'>document.location='login.php'</script>";}
						
					} ?>
					<div class="col-md-1"></div>
					<div class="col-md-5 gallery-grid wow fadeInUp animated" data-wow-delay=".5s" style="margin-top: -70px; border: 1px solid #BFBFBF; background-color: #9575CD;
   						 box-shadow: 0px 1px 1px #aaaaaa; color: white;">
						<div class="grid" >
							<form class="form-horizontal" method="post">
								<caption><h3 align="center">Booking details</h3></caption>
							    <div class="form-group">
							      <label class="control-label col-sm-2" for="email">Number of person:</label>
							      <div class="col-sm-10">
							        <select id="person" class="form-control" name="person" required onchange="check_amount()">
							        	<option value="" hidden="">--select--</option>
							        	<option value="1">1</option>
							        	<option value="2">2</option>
							        	<option value="3">3</option>
							        	<option value="4">4</option>
							        	<option value="5">5</option>
							        	<option value="6">6</option>
							        	<option value="7">7</option>
							        	<option value="8">8</option>
							        	<option value="9">9</option>
							        	<option value="10">10</option>
							        </select>
							      </div>
							    </div>
							    <script type="text/javascript">
									jQuery(function() {
									jQuery( "#datepicker,#datepicker1, #datepicker2" ).datepicker();
									});
								</script>
							    <div class="form-group">
							      <label class="control-label col-sm-2" for="email">From:</label>
							      <div class="col-sm-10">
							        <input type="text" class="form-control date" id="datepicker" value="<?php echo date('d-M-Y', $row->from_date); ?>" name="from" disabled>
							      </div>
							    </div>

							    <div class="form-group">
							      <label class="control-label col-sm-2" for="email">To:</label>
							      <div class="col-sm-10" >
							        <input type="text" class="form-control date" id="datepicker1" value="<?php echo date('d-M-Y', $row->to_date); ?>" name="to" disabled>
							      </div>
							    </div>

							    <div class="form-group">
							      <label class="control-label col-sm-2" for="email">Comment:</label>
							      <div class="col-sm-10" >
							        <textarea class="form-control" placeholder="type your comment" name="comment" required></textarea>
							      </div>
							    </div>
							    <script type="text/javascript">
							    	function check_amount(){
							    		var person = $("#person").val();
							    		var amount = "<?php echo $row->PackagePrice; ?>";
							    		jQuery.ajax({
							    			url:"check_amount.php",
							    			data:{person:person, amount:amount},
							    			method:"POST",
							    			success:function(data){
							    				$("#amount_show").html(data);
							    			}
							    		});
							    	}
							    </script>
							    <div class="form-group">
							      <label class="control-label col-sm-2" for="email">Amount:</label>
							      <div class="col-sm-10" id="amount_show">
							        <input type="text" class="form-control" name="amount" value="<?php echo $row->PackagePrice.' '.'&#2547;'; ?>" disabled>
							      </div>
							    </div>
							    <script type="text/javascript">
							    	function check_availability(){
							    		jQuery.ajax({
							    			url:"card_availability.php",
							    			data:"card_no="+$("#card_no").val(),
							    			method:"POST",
							    			success:function(data){
							    				$("#card_availability").html(data);
							    			}
							    		});
							    	}
							    </script>
							    <div class="form-group">
							    	PAYMENT
							      <label class="control-label col-sm-2"></label>
							      <div class="col-sm-offset-2 col-sm-10">
							        <input type="text" class="form-control" id="card_no" placeholder="Enter your 12 digits card number" name="card_no" required onblur="check_availability()">
							        <span id="card_availability"></span>
							      </div>
							    </div>

							    <div class="form-group">
							      DATE OF EXPIRATION
							      <label class="control-label col-sm-2"></label>
							      <div class="col-sm-offset-2 col-sm-10">
							        <input type="text" class="form-control date" placeholder="Enter card expiration date" name="name" required id="datepicker2">
							      </div>
							    </div>
							    <div class="form-group">        
							      <div class="col-sm-offset-2 col-sm-10">
							        <input type="submit" id="submit" name=submit value="Book Now" class="btn btn-info">
							      </div>
							    </div>
							 </form>
						</div>
					</div>
				</div>
			</div>
	<!-- //gallery -->	
	<?php include "includes/footer.php"; ?>
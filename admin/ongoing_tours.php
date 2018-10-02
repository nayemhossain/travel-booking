<?php session_start(); ?>
<?php if(!isset($_SESSION['type'])){
    echo "<script>document.location='admin_login.php'</script>";
} ?>

<?php include('../includes/config.php'); ?>
<?php include('includes/topbar.php'); ?>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <?php include('includes/leftsidebar.php'); ?>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h5><a href="index.php">home</a> / <a href="manage_booking.php">bookings</a></h5>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                          <a href="upcomming_tours.php" class="btn btn-info">Upcomming</a>

                          <a href="ongoing_tours.php" class="btn btn-info">Ongoing</a>

                          <a href="cancelled_tours.php" class="btn btn-info">Cancelled</a>

                          <a href="expired_tours.php" class="btn btn-info">Expired</a>

                          <a href="pending_tours.php" class="btn btn-info">Pending</a>
                            
                        </div>
                        <div class="body">
                            <table id="example" class="" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Booking Id</th>
                                        <th>Package Name</th>
                                        <th>Date of tour</th>
                                        <th>Duration</th>
                                        <th>Tour Status</th>
                                        <th>Booking Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $today = strtotime(date('m/d/Y'));
                                        $sql = "SELECT tb_booking.BookingId, tb_booking.transaction_id , tb_packages.from_date, tb_packages.to_date, tb_booking.UpdationDate, tb_packages.PackageName, tb_clients.FullName, tb_clients.EmailId, tb_booking.status, tb_booking.cncl_cnfrm_by FROM  tb_booking, tb_packages, tb_clients WHERE tb_booking.PackageId=tb_packages.PackageId AND tb_booking.client_id=tb_clients.id AND tb_packages.from_date<'$today' AND tb_packages.to_date>'$today' ORDER BY tb_booking.BookingId DESC";
                                        $query = $db_config->query($sql);
                                        while($result = $query->fetch_object()){
                                    ?>
                                <tr>
                                    <td><?php echo $result->BookingId  ; ?></td>
                                    <td><?php echo $result->PackageName; ?></td>
                                    <td><?php echo date('d M', $result->from_date)." to ".date('d M', $result->to_date); ?></td>
                                    <?php
                                    $date_from = date_create(date('d-m-Y', $result->from_date));
                                    $date_to = date_create(date('d-m-Y', $result->to_date));
                                    $duration = date_diff($date_from, $date_to)->format('%a');
                                    ?>
                                    <td><?php echo $duration; ?> Days</td>
                                    <td><?php if($result->from_date>strtotime(date('m/d/Y'))){echo '<span style="color:skyblue">Upcomming</span>';}else if($result->to_date<strtotime(date('m/d/Y'))){echo '<span style="color:red">Expired</span>';}else{echo '<span style="color:green">Ongoing</span>';} ?></td>
                                    <td><?php if($result->status == 0){echo "<span style='color:skyblue'>PENDING</span>";}
                                                if($result->status == 1){echo "<span style='color:green'>CONFIRMED<br>by ".$result->cncl_cnfrm_by." at ".$result->UpdationDate."</span>";}
                                                if($result->status == 2){echo "<span style='color:red'>CANCELLED<br>by ".$result->cncl_cnfrm_by." at ".$result->UpdationDate."</span>";}
                                        ?>    
                                    </td>
                                    <td><a href="booking_details.php?id=<?php echo $result->BookingId; ?>"><button class="btn btn-info">VIEW DETAILS</button></a>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Booking Id</th>
                                        <th>Package Name</th>
                                        <th>Date of tour</th>
                                        <th>Duration</th>
                                        <th>Tour Status</th>
                                        <th>Booking Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                
            
            <div class="row clearfix">
            </div>
        </div>
    </section>
    
    <?php include('includes/footer.php'); ?>
    
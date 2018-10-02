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
                <h5><a href="index.php">home</a> / <a href="manage_client.php">manage client</a></h5>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <table id="example" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Client Id</th>
                                        <th>Client Name</th>
                                        <th>Client Email</th>
                                        <th>Client Mobile</th>
                                        <th>User Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql = "SELECT * FROM  tb_clients ORDER BY id DESC";
                                        $query = $db_config->query($sql);
                                        while($result = $query->fetch_object()){
                                    ?>
                                <tr>
                                    <td><?php echo $result->id; ?></td>
                                    <td><?php echo $result->FullName; ?></td>
                                    <td><?php echo $result->EmailId; ?></td>
                                    <td><?php echo $result->MobileNumber; ?></td>
                                    <td><a href="client_details.php?id=<?php echo $result->id; ?>"><button class="btn btn-info">VIEW DETAILS</button></a></td>
                                </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Client Id</th>
                                        <th>Client Name</th>
                                        <th>Client Email</th>
                                        <th>Client Mobile</th>
                                        <th>User Action</th>
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
    
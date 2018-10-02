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
                <h5><a href="index.php">home</a> / <a href="transaction.php">transaction</a>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                All Transactions
                            </h2>
                            
                        </div>
                        <div class="body">
                            <table id="example" class="" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Transaction Id</th>
                                        <th>Client ID</th>
                                        <th>Client Name</th>
                                        <th>Client Email</th>
                                        <th>Amount</th>
                                        <th>Card No.</th>
                                        <th>Package_id</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql = "SELECT tb_transaction.transaction_id, tb_transaction.client_id, tb_clients.FullName, tb_clients.EmailId, tb_transaction.amount, tb_transaction.card_no, tb_transaction.package_id FROM tb_transaction, tb_clients where tb_transaction.client_id=tb_clients.id";
                                        $query = $db_config->query($sql);
                                        while($result = $query->fetch_object()){
                                    ?>
                                <tr>
                                    <td><?php echo $result->transaction_id; ?></td>
                                    <td><?php echo $result->client_id; ?></td>
                                    <td><?php echo $result->FullName; ?></td>
                                    <td><?php echo $result->EmailId; ?></td>
                                    <td><?php echo $result->amount; ?> &#2547;</td>
                                    <td><?php echo $result->card_no; ?></td>
                                    <td><?php echo $result->package_id; ?></td>
                                </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Transaction Id</th>
                                        <th>Client ID</th>
                                        <th>Client Name</th>
                                        <th>Client Email</th>
                                        <th>Amount</th>
                                        <th>Card No.</th>
                                        <th>Package_id</th>
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
    
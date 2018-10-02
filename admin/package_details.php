<?php session_start(); ?>
<?php if(!isset($_SESSION['type'])){
    echo "<script>document.location='admin_login.php'</script>";
} ?>

<?php include('../includes/config.php'); ?>
<?php include('includes/topbar.php'); ?>
<?php
    
    if(!isset($_GET['id'])){
        echo "<script>document.location='manage_package.php'</script>";
    }
  
 
    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $location = $_POST['location'];
        $from_date = strtotime($_POST['from_date']);
        $to_date = strtotime($_POST['to_date']);
        $price = $_POST['price'];
        $fetures = $_POST['fetures'];
        $details = $_POST['details'];
        $sql = "UPDATE tb_packages SET PackageName='$name', PackageLocation='$location', from_date='$from_date', to_date='$to_date', PackagePrice='$price', PackageFetures='$fetures', PackageDetails='$details' WHERE PackageId='$id'";
        $query = $db_config->query($sql);
        if($query==true){
            echo "<script>alert('successful')</script>";
        }
        else{
            echo "<script>alert('failed')</script>";
            }

    
  }

?>

    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <?php include('includes/leftsidebar.php'); ?>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h5><a href="index.php">home</a> / <a href="manage_package.php">manage package</a> / <a href="package_details.php?id=<?php echo $_GET['id']; ?>">package details</a></h5>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PACKAGE DETAILS
                            </h2>   
                        </div>
                        <div class="body">
                            <?php 
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM tb_packages WHERE PackageId = '$id'";
                            $query = $db_config->query($sql);
                            $result = $query->fetch_object();
                             ?>
                            <form method="post" enctype="multipart/form-data">
                                <label>Package Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control" placeholder="Enter package name" value="<?php echo $result->PackageName; ?>">
                                    </div>
                                </div>

                                <label>Package Type</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="type" class="form-control">
                                            <option value="" hidden>select package type</option>
                                            <option value="family">Family</option>
                                            <option value="couple">Couple</option>
                                            <option value="group">Group</option>
                                        </select>
                                    </div>
                                </div>

                                <label>Package Location</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="location" class="form-control" placeholder="Enter package location" value="<?php echo $result->PackageLocation; ?>">
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    jQuery(function() {
                                    jQuery( "#datepicker3,#datepicker4, #datepicker5" ).datepicker();
                                    });
                                </script>
                                
                                <label>From Date</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="datepicker" type="text" name="from_date" class="form-control" value="<?php echo date('d-M-Y', $result->from_date); ?>">
                                    </div>
                                </div>
                                

                                <label>To Date</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="to_date" class="form-control" value="<?php echo date('d-M-Y', $result->to_date); ?>">
                                    </div>
                                </div>
                                <?php

                                    $date_from_4 = date_create(date('d-m-Y', $result->from_date));
                                    $date_to_4 = date_create(date('d-m-Y', $result->to_date));
                                    $duration = date_diff($date_from_4, $date_to_4);
                                ?>

                                <label>Package Duration</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="duration" class="form-control" value="<?php echo $duration->format('%a'); ?> Days">
                                    </div>
                                </div>

                                <label>Package Price</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="price" class="form-control" placeholder="Enter package price" value="<?php echo $result->PackagePrice; ?>">
                                    </div>
                                </div>

                                <label>Package Fetures</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea id="editor1" name="fetures" class="form-control" placeholder="Enter package fetures"><?php echo $result->PackageFetures; ?></textarea>
                                    </div>
                                </div>

                                <label>Package Details</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea id="editor2" name="details" class="form-control" placeholder="Enter package details"><?php echo $result->PackageDetails; ?></textarea>
                                    </div>
                                </div>

                                <label>Package Image</label>
                                <div class="form-group">
                                    <img src="../images/packages/<?php echo $result->PackageImage; ?>" width='300' alt="image">
                                    <a href="change_package_image.php?id=<?php echo $result->PackageId; ?>"><button class="btn btn-danger m-t-15 waves-effect">CHANGE IMAGE</button></a>
                                </div>
                               
                                <br>
                                <button type="submit" name="update" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <div class="row clearfix">
            </div>
        </div>
    </section>
    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
    <script>
            CKEDITOR.replace( 'editor1' );
            CKEDITOR.replace( 'editor2' );
        </script>
    <?php include('includes/footer.php'); ?>

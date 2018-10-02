<?php session_start(); ?>
<?php if(!isset($_SESSION['type'])){
    echo "<script>document.location='admin_login.php'</script>";
} ?>

<?php include('../includes/config.php'); ?>
<?php
    
    if(!isset($_GET['id'])){
        echo "<script>document.location='manage_package.php'</script>";
    }
 
    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], '../images/'.$_FILES['image']['name']);
        $sql = "UPDATE tb_packages SET PackageImage='$image' WHERE PackageId='$id'";
        $query = $db_config->query($sql);
        if($query==true){
            echo "<script>alert('successful')</script>";
        }
        else{
            echo "<script>alert('failed')</script>";
            }

    
  }

?>
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
                <h5><a href="index.php">home</a> / <a href="manage_package.php">manage package</a> / <a href="package_details.php?id=<?php echo $_GET['id']; ?>">package details</a> / <a href="change_package_image.php?id=<?php echo $_GET['id']; ?>">change image</a></h5>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CHANGE IMAGE
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
                                
                                <label>Package Image</label>
                                <div class="form-group">
                                    <img src="../images/packages/<?php echo $result->PackageImage; ?>" width='300' alt="package image">
                                </div>

                                <label>New Image</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="image" class="form-control" required><br>
                                    </div>
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
    
    <?php include('includes/footer.php'); ?>

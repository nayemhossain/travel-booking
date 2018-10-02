<?php session_start(); ?>
<?php if(!isset($_SESSION['type'])){
    echo "<script>document.location='admin_login.php'</script>";
} ?>

<?php include('../includes/config.php'); ?>
<?php
  
 
    if(isset($_POST['create'])){
        $name = $_POST['name'];
        $type = $_POST['type'];
        $location = $_POST['location'];
        $from_date = strtotime($_POST['from_date']);
        $to_date = strtotime($_POST['to_date']);
        $price = $_POST['price'];
        $fetures = $_POST['fetures'];
        $details = $_POST['details'];
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], '../images/packages/'.$_FILES['image']['name']);
        $sql = "INSERT INTO tb_packages (PackageName, PackageType, PackageLocation, from_date, to_date, PackagePrice, PackageFetures, PackageDetails, PackageImage) VALUES('$name', '$type', '$location', '$from_date', '$to_date', '$price', '$fetures', '$details', '$image')";
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
                <h5><a href="index.php">home</a> / <a href="create_package.php">create package</a></h5>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CREATE PACKAGE
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form method="post" enctype="multipart/form-data">
                                <label>Package Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control" placeholder="Enter package name" required>
                                    </div>
                                </div>

                                <label>Package Type</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="type" class="form-control" required>
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
                                        <input type="text" name="location" class="form-control" placeholder="Enter package location" required>
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
                                        <input type="text" name="from_date" class="form-control" id="datepicker3" placeholder="Enter tour start date" required>
                                    </div>
                                </div>

                                <label>To Date</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="to_date" class="form-control" id="datepicker4" placeholder="Enter tour end date" required>
                                    </div>
                                </div>

                                <label>Package Price</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="price" class="form-control" placeholder="Enter package price" required>
                                    </div>
                                </div>

                                <label>Package Fetures</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea id="editor1" name="fetures" class="form-control" placeholder="Enter package fetures" required></textarea>
                                    </div>
                                </div>

                                <label>Package Details</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea id="editor2" name="details" class="form-control" placeholder="Enter package details" required></textarea>
                                    </div>
                                </div>

                                <label>Package Image</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="image" class="form-control" required><br>
                                    </div>
                                </div>

                                                               
                                <br>
                                <button type="submit" name="create" class="btn btn-primary m-t-15 waves-effect">CREATE</button>
                                <button type="reset" class="btn btn-danger m-t-15 waves-effect">RESET</button>
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

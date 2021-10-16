<?php

    include('authentication.php');
    include('includes/header.php');
    include('includes/navbar.php');
    include('includes/sidebar.php');
    include('config/webconfig.php');
?>

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Medical Database</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Edit - Medical Details</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
        <!-- /.content-header -->

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> Edit - Medical Details</h3>
                            <a href="hospital.php"  class="btn btn-danger btn-sm float-right"> Back </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="webcode.php" method="POST">
                                        <div class="modal-body">
                                            <?php
                                                if(isset($_GET['medical_id'])) {

                                                    $medical_id = $_GET['medical_id'];
                                                    $query = "SELECT * FROM medical_details WHERE ID='$medical_id' LIMIT 1";
                                                    $query_run= mysqli_query($con, $query);

                                                    if(mysqli_num_rows($query_run) > 0) {
                                                        foreach ($query_run as $row) {
                                                            ?>
                                                                <input type="hidden" name="medical_id" value="<?php echo $row['ID'] ?>">
                                                                <div class="form-group">
                                                                    <label for="">Medical Name</label>
                                                                    <input type="text" name="mname" value="<?php echo $row['m_name'] ?>" class="form-control" placeholder="Hospital Name">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Address</label>
                                                                    <input type="text" name="addr" value="<?php echo $row['address'] ?>" class="form-control" placeholder="Address">
                                                                </div>
                                                        
                                                                <div class="form-group">
                                                                    <label for="">Phone No.</label>
                                                                    <input type="text" name="phone" value="<?php echo $row['phone_no'] ?>" class="form-control" placeholder="Phone Number">
                                                                </div>
                                                            
                                                                <div class="form-group">
                                                                <button type="submit" name="updateMedical" class="btn btn-info">Update</button>
                                                                </div>

                                                            <?php
                                                        }
                                                    }   else {
                                                        echo " <h4>No Records Found.</h4> ";
                                                    }
                                                }
                                            ?>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





</div>

<?php
include('includes/footerscript.php');
?>

<?php
include('includes/footer.php');
?>
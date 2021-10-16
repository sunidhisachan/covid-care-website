<?php

include('authentication.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('config/webconfig.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Contact Response</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Database: Contact Response</li>
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
                            <h3 class="card-title">Contact Responses</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email ID</th>
                                        <th>Phone No.</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query = "SELECT * FROM feedback";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0) {
                                            foreach($query_run as $row) {
                                            ?>
                                                <tr>
                                                    <td> <?php echo $row['id']; ?></td>
                                                    <td> <?php echo $row['f_name']; ?></td>
                                                    <td> <?php echo $row['l_name']; ?></td>
                                                    <td> <?php echo $row['email']; ?></td>
                                                    <td> <?php echo $row['phone_no']; ?></td>
                                                    <td> <?php echo $row['message']; ?></td>
                                                </tr>
                                                <?php
                                            }

                                        } else {
                                    ?>
                                            <tr>
                                                <td>No Record Found</td>
                                            </tr>
                                        <?php
                                    }
                                        ?>
                                </tbody>
                            </table>
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
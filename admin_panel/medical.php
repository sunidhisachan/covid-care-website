<?php

include('authentication.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('config/webconfig.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- User Modal -->
    <div class="modal fade" id="AddMedicalModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Medical Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="webcode.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Medical Name</label>
                            <span class="medical_error text-danger ml-2">  </span>
                            <input type="text" name="mname" class="form-control m_name" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" name="addr" class="form-control" placeholder="Address">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Phone No.</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="addMedical" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete User Modal -->
    <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Medical</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="webcode.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="delete_id" class="delete_Medical_id">
                        <p>
                            Are you sure, you want to remove this Medical?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="DeleteMedicalbtn" class="btn btn-primary">Yes, Delete</button>
                    </div>
                </form>
            </div>       
        </div>
    </div>


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Medical Database</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Database: Medical</li>
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
                    <?php
                        if(isset($_SESSION['status'])) {
                            echo "<h4>".$_SESSION['status']."</h4>";
                            unset($_SESSION['status']);
                        }
                    ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Medical List</h3>
                            <a href="#" data-toggle="modal" data-target="#AddMedicalModal" class="btn btn-primary btn-sm float-right"> Add Medical </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Medical Name</th>
                                        <th>Address</th>
                                        <th>Phone No.</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query = "SELECT * FROM medical_details";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0) {
                                            foreach($query_run as $row) {
                                            ?>
                                                <tr>
                                                    <td> <?php echo $row['ID']; ?></td>
                                                    <td> <?php echo $row['m_name']; ?></td>
                                                    <td> <?php echo $row['address']; ?></td>
                                                    <td> <?php echo $row['phone_no']; ?></td>
                                                    <td>
                                                        <a href="medical-edit.php?medical_id=<?php echo $row['ID']; ?>" class="btn btn-info btn-sm">Edit</a>
                                                        <button type="button" value="<?php echo $row['ID']; ?>" class="btn btn-danger btn-sm deletebutton">Delete </button>
                                                    </td>
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

<script> 

    $(document).ready(function () {
        $('.m_name').keyup(function(e){
            var mname = $('.m_name').val();

            $.ajax({
                type: "POST",
                url: "webcode.php",
                data: {
                    'check_mname':1,
                    'mname':mname,
                },
                success: function (response) {
                    $('.medical_error').text(response)
                }
            });
        });
    });

</script>

<script>
    $(document).ready(function () {
        $('.deletebutton').click(function (e) {
            e.preventDefault();

            var medical_id = $(this).val();
            //console.log(medical_id);
            $('.delete_Medical_id').val(medical_id);
            $('#DeleteModal').modal('show');
        });
    });
</script>


<?php
    include('includes/footer.php');
?>
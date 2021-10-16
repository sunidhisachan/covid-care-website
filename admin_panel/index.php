<?php

include('authentication.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('config/config.php');

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-12">
            <?php
              include ('message.php');

              if(isset($_SESSION['role_status'])) {

                ?>
                
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Hey!</strong> <?php echo $_SESSION['role_status']; ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <?php
                unset($_SESSION['role_status']);
              }
            ?>
          </div>
          
          <div class="row" >

            <div class="col-md-12 pl-3" >
              <h1 class="text-primary text-left"> Hello,
                <?php
                if (isset($_SESSION['auth'])) {
                  ?>
                <u> <?php echo $_SESSION['auth_user']['user_name']."!"; ?> </u>
                  <?php
                }
                else {
                  echo "Not Logged In";
                }
                ?>
              </h1>
              <h4 class="text-success"><i>Welcome to your Admin Dashboard!</i></h4>
            </div>

          <!--  <div class="col-md-4" >
              <img src="assets/dist/img/logo.png" class="rounded mx-auto d-block pt-3 pb-3"  alt="" height="100%" width="100%">
            </div> -->

          </div>
          
          <hr>
          <!-- ./col -->
        </div>
        <h1 class="text-center"><i> Website Info </i> </h1> <br>
      
        <div class="container">         
          <table class="table table-hover">
            <tbody>
              <tr>
                <th>Website</th>
                <td>Covid Care</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <th>Website URL</th>
                <td> <a href="#" target="_blank"> www.example.com </a></td>
              </tr>
              <tr>
                <th>No. of Admin </th>
                <td>
                  <?php
                    $query = "SELECT * FROM users WHERE role = 1 ";
                    $query_run=mysqli_query($con, $query);
                    $no_of_admin = mysqli_num_rows($query_run);

                    echo $no_of_admin;
                  ?>
              </tr>
              <tr>
                <th>No. of Moderator </th>
                <td>
                  <?php
                    $query = "SELECT * FROM users WHERE role = 2 ";
                    $query_run=mysqli_query($con, $query);
                    $no_of_mod = mysqli_num_rows($query_run);

                    echo $no_of_mod;
                  ?>

                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <hr>

        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


</div>

<?php

include('includes/footerscript.php');

?>

<?php

include('includes/footer.php');

?>
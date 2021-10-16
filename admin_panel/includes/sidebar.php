<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="assets/dist/img/alogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Covid Care</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php
            if (isset($_SESSION['auth'])) {
                echo $_SESSION['auth_user']['user_name']; 
              }
              else {
                echo "Not Logged In";
              }
              ?>
          </a>
        </div>
      </div>
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
 <!--       
-->
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Database
                <i class="right fas fa-angle-left"></i>
              </p>
            </a> 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="hospital.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hospital </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="medical.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Medical</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="response.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact Responses</p>
                </a>
              </li>
            </ul>
          </li>
          <div>
            <li class="nav-item">
              <a href="register.php" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Registered User
                </p>
              </a>
            </li>
          </div>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link" style="text-align: center;">
      <img src="img/logo.png" alt="AdminLTE Logo" width="75" class="img-fluid">
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-flask"></i>
              <p>
                Chemicals
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-chemical.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="stock-chemical.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stock</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="consume-chemical.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consume</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="required-chemical.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Required</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-glass-martini-alt nav-icon"></i>
              <p>
                Glasswares
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-glassware.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="stock-glassware.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stock</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="consume-glassware.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consume</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="required-glassware.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Required</p>
                </a>
              </li>
            </ul>
          </li>
          
        <li class="nav-item">
            <a href="teachers.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Teachers
              </p>
            </a>
          </li>

          
         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
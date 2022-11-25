
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beauty Parlor Management System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-power-off"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>  
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="index.php" class="dropdown-item dropdown-footer">Logout</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Beauty Parlor System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Example User</a>
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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Information
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="product.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="customermanagement.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer Management</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="backup.php" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Backup Database
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Information</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
       

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Information Data table</h3> 
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add" style="margin-left: 71%"><i class="fa fa-plus">Add</i>
                </button>
                <div class="modal fade" id="add">
                        <div class="modal-dialog modal-sm">
                            <form action="">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Add Product</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="card card-primary">
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Barcode</label>
                                  <input type="text" class="form-control" id="" placeholder="Barcode...">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" class="form-control" id="" placeholder="Enter Product Name">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Information</label>
                                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                                <div class="col-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Amount</label>
                                  <input type="number" class="form-control" id="" placeholder="00.00">
                                </div>
                              </div>
                              </div>
                          </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                              <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                            </div>
                          </div>
                          </form>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Barcode</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th width="7%"></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><b style="color:blue"><i>8888888555547</i></b></td>
                    <td>Razor</td>
                    <td>A razor is a bladed tool primarily used in the removal of body hair through the act of shaving.</td>
                    <td>320</td>
                    <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-alt"></i></button> <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                   <tr>
                    <td><b style="color:blue"><i>8888888555547</i></b></td>
                    <td>Razor</td>
                    <td>A razor is a bladed tool primarily used in the removal of body hair through the act of shaving.</td>
                    <td>320</td>
                    <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-alt"></i></button> <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Barcode</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th></th>
                  </tr>
                  </tfoot>
                </table>
                      <div class="modal fade" id="edit">
                        <div class="modal-dialog modal-sm">
                           <form action="">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Edit Product</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="card card-primary">
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Barcode</label>
                                  <input type="text" class="form-control" id="" placeholder="Barcode...">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" class="form-control" id="" placeholder="Enter Product Name">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Information</label>
                                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                                <div class="col-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Amount</label>
                                  <input type="number" class="form-control" id="" placeholder="00.00">
                                </div>
                              </div>
                              </div>
                          </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                              <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                            </div>
                          </div>
                          </form>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Footer <a href="">Beauty Parlor System</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Footer</b>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<script src="js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="js/overlayScrollbars.min.js"></script>

<script src="js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
<!-- Page specific script -->

</body>
</html>

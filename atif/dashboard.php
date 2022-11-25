<?php include 'others/header.php'; ?>
<?php include 'others/dbconn.php'; ?>
  <?php include 'others/sidebar.php'; ?>

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
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php 
                  $sql = "SELECT count(c_name) as totalchemicals FROM chemicals";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
                  echo $row['totalchemicals'];
                  ?>
                </h3>

                <p>Total Chemicals</p>
              </div>
              <div class="icon">
                <i class="fa fa-flask"></i>
              </div>
              <a href="add-chemical.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                  <?php
                     $sql = "SELECT count(chemical_id) as totalasc FROM chemical_stock WHERE c_stock>'0'";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
                  echo $row['totalasc'];   
                  ?>
                </h3>

                <p>Available Stock Chemicals</p>
              </div>
              <div class="icon">
                <i class="fa fa-flask"></i>
              </div>
              <a href="stock-chemical.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                  <?php
                     $sql = "SELECT count(chemical_id) as totalasc FROM chemical_stock WHERE c_stock='0'";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
                  echo $row['totalasc'];   
                  ?>
                </h3>

                <p>Out Stock Chemicals</p>
              </div>
              <div class="icon">
                <i class="fa fa-flask"></i>
              </div>
              <a href="required-chemical.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php 
                  $sql = "SELECT count(name) as totalglassware FROM glassware";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
                  echo $row['totalglassware'];
                  ?>
                </h3>

                <p>Total Glasswares</p>
              </div>
              <div class="icon">
                <i class="fa fa-glass-martini-alt"></i>
              </div>
              <a href="add-glassware.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                  <?php
                     $sql = "SELECT count(g_id) as totalasc FROM glassware_stock WHERE stock>'0'";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
                  echo $row['totalasc'];   
                  ?>
                </h3>

                <p>Available Stock Chemicals</p>
              </div>
              <div class="icon">
                <i class="fa fa-glass-martini-alt"></i>
              </div>
              <a href="stock-glassware.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                  <?php
                     $sql = "SELECT count(g_id) as totalasc FROM glassware_stock WHERE stock='0'";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
                  echo $row['totalasc'];   
                  ?>
                </h3>

                <p>Out Stock Chemicals</p>
              </div>
              <div class="icon">
                <i class="fa fa-glass-martini-alt"></i>
              </div>
              <a href="required-glassware.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
     
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include 'others/footer.php'; ?>
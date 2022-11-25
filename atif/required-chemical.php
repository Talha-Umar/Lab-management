<?php
include 'others/dbconn.php';
 ?>
<?php include 'others/header.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/stock-chemical.js"></script>
  <!-- Main Sidebar Container -->
<?php include 'others/sidebar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chemicals Information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Information</a></li>
              <li class="breadcrumb-item active">Chemicals</li>
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
                <div class="row" style="padding: 10px 20px;">
                    <div class="col-md-6 col-sm-6 col-6">
                      <h3 class="card-title">Required Chemicals </h3> 
                    </div>
                    
                </div>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr#</th>
                    <th>Name</th>
                    <th>Unit</th>
                    
                    <th>Stock Out Date</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $k=0;
                   $sql1 = "SELECT * FROM chemical_stock WHERE c_stock='0'";
                    $result1 = $conn->query($sql1);
                   if ($result1->num_rows > 0) {
                       // output data of each row
                     while($row = $result1->fetch_assoc()) {
                    ?>
                  <tr id="<?php echo $row['id'];?>">
                    <td><?php echo ++$k; ?></td>
                    <td data-target="cname"><?php
                    $chid=$row['chemical_id'];
                    $sql2 = "SELECT * FROM chemicals WHERE c_id='$chid'";
                     $result2 = $conn->query($sql2);
                     $row2 = $result2->fetch_assoc();
                     echo $row2['c_name'];
                  ?></td>
                  <td data-target="cunit"><?php echo $row2['c_unit']; ?></td>
                    
                    <td>
                      <?php if ($row['UpdationDate']!='') {
                      echo $row['UpdationDate'];
                    } else {
                      echo "New Item";
                    }

                     ?>
                    </td>
                    
                    
                  </tr>
                   <?php } } else { ?>
                    <tr>
                      <th colspan="6">No Record Exists!!!!</th>
                    </tr>
                     <?php } ?>
                  </tbody>
                 
                </table>
               
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
  
  <?php include 'others/footer.php'; ?>
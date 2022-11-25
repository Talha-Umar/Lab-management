<?php
include 'others/dbconn.php';
if (isset($_POST['add'])) {
 $gid=$_POST['gid'];
 $tid=$_POST['tid'];
$gquantity=$_POST['gquantity'];
$adddate=date("Y-m-d H:i:s a");
$sql = "SELECT * FROM glassware_stock WHERE g_id='$gid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$stock=$row['stock'];
 
 if ($stock>=$gquantity) {
   $totalstock=$stock-$gquantity;
 
$sql = "INSERT INTO glassware_consume (g_id, t_id, quantity, cdate)
VALUES ('$gid', '$tid', '$gquantity', '$adddate')";
 
$sql1 = "UPDATE glassware_stock SET stock='$totalstock', UpdationDate='$adddate' WHERE g_id='$gid'";
if ($conn->query($sql1) === TRUE) {
}


if ($conn->query($sql) === TRUE) {
  echo "<script> alert('Record Added!');</script>";
  echo "<script> window.location.href = 'consume-glassware.php';</script>";
}
}
else {
  echo "<script> alert('This amount of stock is not available');</script>";
}
}
 ?>
<?php include 'others/header.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/consume-chemical.js"></script>
  <!-- Main Sidebar Container -->
<?php include 'others/sidebar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Glassswares Information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Information</a></li>
              <li class="breadcrumb-item active">Glassswares</li>
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
                      <h3 class="card-title">Glassswares Consume Information</h3> 
                    </div>
                    <div class="col-md-6 col-md-6 col-sm-6 col-6" style="text-align: right;">
                      <button type="button" class="btn btn-success " data-toggle="modal" data-target="#add"><i class="fa fa-plus-circle"> Add Consume</i>
                      </button>
                  </div>
                </div>
                <div class="modal fade" id="add">
                        <div class="modal-dialog modal-sm">
                            <form action="" method="post">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Add Consume Record</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="card card-primary">
                              <div class="card-body">
                                
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Glasssware Name</label>
                                  <select class="form-control" name="gid" id="gname" required>
                                    <option value="">Select Chemical</option>
                                    <?php
                                        $sql = "SELECT * FROM glassware";
                                         $result = $conn->query($sql);
                                              // output data of each row
                                         while($row = $result->fetch_assoc()) { ?>
                                          <option value="<?php echo $row['id'];?>"><?php echo $row['name']." (".$row['size'].")";?></option>
                                        <?php } ?>
                                  </select>
                                </div>
                                
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Consumed By</label>
                                  <select class="form-control" name="tid">
                                    <option value="">Select Teacher</option>
                                    <?php
                                        $sql = "SELECT * FROM teachers";
                                         $result = $conn->query($sql);
                                              // output data of each row
                                         while($row = $result->fetch_assoc()) { ?>
                                          <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                        <?php } ?>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Quantity</label>
                                  
                                    <input type="number" class="form-control" name="gquantity" placeholder="Enter Cosumed Quantity">
                                  
                                </div>
                               
                              </div>
                          </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                              <button type="submit" name="add" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
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
                    <th>Sr#</th>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Consumed By</th>
                    <th>Consumed Date</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $k=0;
                   $sql1 = "SELECT * FROM glassware_consume";
                    $result1 = $conn->query($sql1);
                   if ($result1->num_rows > 0) {
                       // output data of each row
                     while($row = $result1->fetch_assoc()) {
                    ?>
                  <tr id="<?php echo $row['id'];?>">
                    <td><?php echo ++$k; ?></td>
                    <td data-target="cname"><?php
                    $chid=$row['g_id'];
                    $sql2 = "SELECT * FROM glassware WHERE id='$chid'";
                     $result2 = $conn->query($sql2);
                     $row2 = $result2->fetch_assoc();
                     echo $row2['name'];
                  ?></td>
                  <td data-target="cunit"><?php echo $row2['size']; ?></td>
                    <td data-target="cstock"><?php echo $row['quantity']; ?></td>
                    <td><?php 
                    $ttid=$row['t_id']; 
                    $sql3 = "SELECT * FROM teachers WHERE id='$ttid'";
                     $result3 = $conn->query($sql3);
                     $row3 = $result3->fetch_assoc();
                     echo $row3['name'];
                  ?></td>
                    <td><?php echo $row['cdate']; ?></td>
                    <!--
                    <td><a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit" data-role="edit" data-id="<?php echo $row["id"];?>" title="Edit"><i class="fa fa-pencil-alt"></i></a> <a  class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete" data-role="delete" data-id="<?php echo $row["id"];?>" title="Delete" ><i class="fa fa-trash"></i></a>
                    </td> -->
                  </tr>
                   <?php } } else { ?>
                    <tr>
                      <th colspan="6">No Record Exists!!!!</th>
                    </tr>
                     <?php } ?>
                  </tbody>
                 
                </table>
                <?php
                    if (isset($_POST['update'])) {
                      $Cstock=$_POST['Cstock'];
                      $uid=$_POST['uid'];
                      $udate=date("Y-m-d H:i:s");
                      $sql = "UPDATE chemical_stock SET c_stock='$Cstock', UpdationDate='$udate' WHERE id='$uid'";

                       if ($conn->query($sql) === TRUE) {
                       echo "<script> alert('Record Updated!');</script>";
                    echo "<script> window.location.href = 'stock-chemical.php';</script>";
                         } else {
                       echo "Error updating record: " . $conn->error;
                             }
                    }
                 ?>
                      <div class="modal fade" id="edit">
                        <div class="modal-dialog modal-sm">
                           <form action="" method="post">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Edit Stock</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="card card-primary">
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" class="form-control" id="Cname" readonly>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Unit</label>
                                  <input type="text" class="form-control" id="Cunit" readonly>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Stock</label>
                                  <input type="number" class="form-control" name="Cstock" id="cstock">
                                </div>
                                <input type="hidden" name="uid" id="Uid">
                                
                              </div>
                          </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button> 
                              <button type="submit" name="update" class="btn btn-primary"><i class="fa fa-check"></i> Update</button>
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
            <?php 
              if (isset($_POST['delete'])) {
                $did=$_POST['did'];
                $sql = "DELETE FROM chemical_stock WHERE id='$did'";

if ($conn->query($sql) === TRUE) {
  echo "<script> alert('Record Deleted!');</script>";
  echo "<script> window.location.href = 'add-chemical.php';</script>";
} else {
  echo "Error deleting record: " . $conn->error;
}
              }
            ?>
             <div class="modal fade" id="delete">
                        <div class="modal-dialog modal-sm">
                          <form action="" method="post">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Delete Service</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="card card-primary">
                              <div class="card-body">
                                <input type="hidden" name="did" id="Did">
                                <p>Are you sure want to delete?</p>
                          </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                              <button type="submit" name="delete" class="btn btn-primary"><i class="fa fa-check"></i> Delete</button>
                            </div>
                          </div>
                          </form>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>

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
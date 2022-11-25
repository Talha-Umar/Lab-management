<?php 

include "dbconn.php";

$cid = $_POST['cid'];   // department id

$sql = "SELECT * FROM chemicals WHERE c_id='$cid'";

$result = mysqli_query($conn,$sql);

$users_arr = array();

while( $row = mysqli_fetch_array($result) ){
    $userid = $row['c_id'];
    $name = $row['c_unit'];

    $users_arr[] = array("id" => $userid, "name" => $name);
}

// encoding array to json format
echo json_encode($users_arr);
<?php
session_start()
?>
<?php
include 'controller/connection.php';
$name = $_SESSION["name"];
$reg_id= $_POST["reg_id"];
$busname= $_POST["Bus_name"];
$txpayer = $_POST["TAX_name"];
$type = $_POST["bus_type"];
$addrs = $_POST["address"];
$brgy = $_POST["brgy"];
$busline = $_POST["bus_line"];
$actv = $_POST["activity"];
$regdate = $_POST["reg_date"];


$sql = "UPDATE businessdt_tbl SET BUSINESS_NAME = '$busname', TAXPAYER = '$txpayer', TYPE = '$type', 
ADDRESS = '$addrs', BARANGAY ='$brgy', BUSINESS_LINE ='$busline', ACTIVITY ='$actv', REG_DATE='$regdate'
WHERE REG_ID = '$reg_id';";

if (mysqli_query($conn, $sql)) {
  // $action = "Updated data (".$reg_id.")";
	// $sql1="INSERT INTO act_history_tbl (user_name,user_action) VALUES ('$name','$action')";
	// $result2 = mysqli_query($conn, $sql1);
  // mysqli_close($conn);
  // header('Refresh: 1; URL=table-page.php');
  echo'<script>alert("Record successfully updated.");</script>';
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  $action = "Updated data (".$reg_id.")";
	$sql1="INSERT INTO act_history_tbl (user_name,user_action) VALUES ('$name','$action')";
	$result2 = mysqli_query($conn, $sql1);
mysqli_close($conn);
header('Refresh: 1; URL=table-page.php');
?>
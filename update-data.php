<?php
session_start()
?>
<?php
include 'controller/connection.php';
$name = $_SESSION["name"];
$reg_id= $_POST["reg_id"];
$year= $_POST["year"];
$comp_name = $_POST["comp_name"];
$date_reg = $_POST["date_reg"];
$stat = $_POST["stat"];
$address = $_POST["address"];
$reg_code = $_POST["reg_code"];
$categ_list = $_POST["categ_list"];



$sql = "UPDATE businessdt_tbl SET YEAR = '$year', COMPANY_NAME = '$comp_name', DATE_REGISTERED = '$date_reg', 
STATUS = '$stat', ADDRESS ='$address', REGISTRATION_CODE ='$reg_code', CATEGORY_LIST ='$categ_list'
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
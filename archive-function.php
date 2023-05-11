<?php
session_start()
?>

<?php
include 'controller/connection.php';
$name = $_SESSION["name"];
$ed_key = $_GET['ed_id'];

$sql="INSERT INTO archv_businessdt_tbl SELECT * FROM businessdt_tbl WHERE REG_ID='$ed_key' ";
$result = mysqli_query($conn, $sql);
if (!$result){
	echo'<script>alert("Record Unsuccessfully Archived!")</script>';
} 
else {
	$action = "Archived data (".$ed_key.")";
	$sql1="INSERT INTO act_history_tbl (user_name,user_action) VALUES ('$name','$action')";
	$result2 = mysqli_query($conn, $sql1);
	echo'<script>alert("Record successfully Archived!")</script>';
	header('Refresh: 1; URL=table-page.php');
}

?>


<?php
include 'controller/connection.php';
$ed_key = $_GET['ed_id'];

$sql= "DELETE FROM businessdt_tbl WHERE REG_ID='$ed_key'";
$result3 = mysqli_query($conn, $sql);
mysqli_close($conn);

?>
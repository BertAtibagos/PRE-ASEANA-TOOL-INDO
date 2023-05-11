<?php
session_start()
?>
<?php
include 'controller/connection.php';
$name = $_SESSION["name"];
$business_name = $_POST["Bus_name"];
$TAXpayer_name = $_POST["TAX_name"];
$business_type = $_POST["bus_type"];
$business_line = $_POST["bus_line"];
$activity = $_POST["activity"];
$reg_date = $_POST["reg_date"];
$address = $_POST["address"];
$barangay = $_POST["brgy"];
$insert_stat = false;
$insert_ctr = 1;


while($insert_stat == false){
	$sql_count = "SELECT * FROM businessdt_tbl WHERE REG_ID LIKE '%REG%'";
	$curr_num =mysqli_num_rows(mysqli_query($conn, $sql_count));
	$gen_code ="REG".rand(10,100).($curr_num + $insert_ctr);
	$sql_check_dupes = "SELECT * FROM businessdt_tbl WHERE reg_id = '$gen_code'";
	$sql_dupe_rows = mysqli_num_rows(mysqli_query($conn, $sql_check_dupes));
	
	if($sql_dupe_rows > 0){
		$insert_ctr++;
	}else{
		$insert_stat = true;
	}
}

$sql = "INSERT INTO businessdt_tbl (REG_ID, BUSINESS_NAME, TAXPAYER, TYPE, ADDRESS, BARANGAY, BUSINESS_LINE, ACTIVITY, REG_DATE) 
VALUES('$gen_code','$business_name', '$TAXpayer_name', '$business_type', '$address', '$barangay', 
'$business_line', '$activity', '$reg_date')";
$result = mysqli_query($conn,$sql);

if(!$sql){
    print("Failed to insert data!");
}else{
	$action = "Added data (".$gen_code.")";
	$sql1="INSERT INTO act_history_tbl (user_name,user_action) VALUES ('$name','$action')";
	$result2 = mysqli_query($conn, $sql1);
	echo'<script>alert("Record added succesfully.");</script>';
	header('Refresh: 1; URL= table-page.php');
}
?>
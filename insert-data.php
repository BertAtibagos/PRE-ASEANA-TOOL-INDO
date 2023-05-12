<?php
session_start()
?>
<?php
include 'controller/connection.php';
$name = $_SESSION["name"];
$year = $_POST["year"];
$comp_name = $_POST["comp_name"];
$date_reg = $_POST["date_reg"];
$stat = $_POST["stat"];
$address = $_POST["address"];
$reg_code = $_POST["reg_code"];
$categ_list = $_POST["categ_list"];
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

$sql = "INSERT INTO businessdt_tbl (REG_ID, YEAR, COMPANY_NAME, DATE_REGISTERED, STATUS, ADDRESS, REGISTRATION_CODE, CATEGORY_LIST) 
VALUES('$gen_code','$year', '$comp_name', '$date_reg', '$stat', '$address', '$reg_code', '$categ_list')";
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
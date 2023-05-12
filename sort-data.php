<?php
session_start()
?>

<?php
include "controller/connection.php";
$name = $_SESSION["name"];
$filename = $_POST['filename'].'.csv';
$export_data = unserialize($_POST['export_data']);


$file = fopen($filename,"w");
$fields = array('REG_ID', 'YEAR', 'COMPANY_NAME', 'DATE_REGISTERED', 'STATUS','ADDRESS','REGISTRATION_CODE','CATEGORY_LIST');
fputcsv($file,$fields);

foreach ($export_data as $line){
    fputcsv($file,$line);
}

fclose($file);
$action = "Exported data. File name:".$filename;
$sql1="INSERT INTO act_history_tbl (user_name,user_action) VALUES ('$name','$action')";
$result2 = mysqli_query($conn, $sql1);


header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=".$filename);
header("Content-Type: application/csv; "); 

readfile($filename);


unlink($filename);
exit();
?>

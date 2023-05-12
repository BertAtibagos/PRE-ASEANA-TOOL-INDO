<?php
include("database.php");

if(isset($_POST['checkedId']) && isset($_POST['deleteAll'])){
  $checkedId = $_POST['checkedId'];
  $deleteMsg=deleteMultipleData($conn, $checkedId);

}
$fetchData = fetch_data($conn);

function fetch_data($conn){
  $query = "SELECT REG_ID, YEAR, COMPANY_NAME, DATE_REGISTERED, STATUS, ADDRESS, REGISTRATION_CODE, CATEGORY_LIST FROM businessdt_tbl";
  $result = $conn->query($query);

   if ($result->num_rows > 0) {
      $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
      $data= $row;
   } else {
      $data= [];
   }
     return $data;
}

function deleteMultipleData($conn, $checkedId){
  
$checkedIdGroup = implode("' ,'", $checkedId);
$query = "INSERT INTO archv_businessdt_tbl SELECT * FROM businessdt_tbl WHERE REG_ID IN ('$checkedIdGroup')";
$query1 = "DELETE FROM businessdt_tbl WHERE REG_ID IN ('$checkedIdGroup')";
$result = $conn->query($query);
$result1 = $conn->query($query1);
if($result && $result1 ==true){
  return "Selected data was archived successfully";
}

}
?>
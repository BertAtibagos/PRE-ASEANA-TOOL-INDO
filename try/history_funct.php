<?php
include("database.php");

if(isset($_POST['checkedId']) && isset($_POST['deleteAll'])){
  $checkedId = $_POST['checkedId'];
  $deleteMsg=deleteMultipleData($conn, $checkedId);

}
$fetchData = fetch_data($conn);

function fetch_data($conn){
  $query = "SELECT * FROM act_history_tbl ORDER BY time_inserted DESC LIMIT 8";
  $result = $conn->query($query);

   if ($result->num_rows > 0) {
      $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
      $data= $row;
   } else {
      $data= []; 
   }
     return $data;
}
?>
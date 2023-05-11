<?php
session_start()
?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/display-script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script type="text/javascript" src="try/archv-custom.js"></script>
  <script type="text/javascript" src="TAE/archive-&-check-all-func.js"></script>


  <link rel="stylesheet" href="css/path-name-stylesheet.css">
<link rel="stylesheet" href="css/table-design-stylesheet.css">
<link rel="stylesheet" href="css/font-body.css">
</head>

<style>
  .archive-all-btn{    
  position:relative;
  padding:4px;
  background-color:#27292C;
  font-size:10px;
  font-weight:bold;
  margin-top:6px;
  color:#ccc;
  cursor: pointer;
  transition: color 0.2s ease-in-out, background 0.2s ease-in-out;
  margin-left:-12px;
  border-radius:3px;

  border: solid 1px #404040;
}
.archive-all-btn:hover{
  background-color:#f0284a;
  color:#fff;
}

</style>

<?php
include("try/database.php");

if(isset($_POST['checkedId']) && isset($_POST['deleteAll'])){
  $checkedId = $_POST['checkedId'];
  $deleteMsg=deleteMultipleData($conn, $checkedId);

}
$fetchData = fetch_data($conn);



function fetch_data($conn){
if(isset($_POST['srch_entry']) && isset($_POST['srch_fld'])){
    $srch_entry = $_POST['srch_entry'];
    $srch_fld = $_POST['srch_fld'];
}


  $query = "SELECT * FROM archv_businessdt_tbl WHERE $srch_fld LIKE '%$srch_entry%'";
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
$name = $_SESSION["name"];
$checkedIdGroup = implode("' ,'", $checkedId);
$query = "INSERT INTO businessdt_tbl SELECT * FROM archv_businessdt_tbl WHERE REG_ID IN ('$checkedIdGroup')";
$query1 = "DELETE FROM archv_businessdt_tbl WHERE REG_ID IN ('$checkedIdGroup')";
$result = $conn->query($query);
$result1 = $conn->query($query1);
if($result && $result1==true){
  $action = "Restored multiple data";
	$sql1="INSERT INTO act_history_tbl (user_name,user_action) VALUES ('$name','$action')";
	mysqli_query($conn, $sql1);
  echo'<script>alert("Selected data was archived successfully")</script>';
  header('location:archive-page.php');
  

}
}
?>


<body class="unselectable">

<p class="path-name-height">Archive | 
        <span style="font-weight:bold">
          <i class="fas fa-search"></i>&nbspSearch
        </span>
    </p>
    <div>    <br>
    <?php
        include 'archive-navigation-bar.php';
        ?>
    </div>
    <br>

    <p style="margin-top:4px; margin-bottom:3px;"> 
        <span style="font-weight:bold">
            <i class="fas fa-search"></i>&nbspSearch Results
        </span>
    </p>
    

<p><?php echo $deleteMsg??'';?></p>
    <div class="">
   <form  method="post" id="deleteForm">
      <table class="action-btn ">
       <thead>
       <?php 
    if(count($fetchData)>0){  
    ?>
     
    
<style>
/* width */
::-webkit-scrollbar {
  width: 8px;

}

/* Track */
::-webkit-scrollbar-track {
  background: #eee; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
  border-radius:3px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #27292C; 
}
</style>

<?php
include('table-button-up.php')
?>
      
     <?php } ?> 
       <tr>
       <th width="70px"><input type="checkbox" id="singleCheckbox" onclick="DoCheckUncheckDisplay(this,'checkbox-checked','checkbox-unchecked')">
        <!-- <button class="archive-all-btn" type="submit" name="deleteAll" value="Archive All" title='Archive all Data' data-toggle=tooltip style="display:none; float:right; margin-top:4px" id="checkbox-checked">
          <i class="fas fa-cogs" style=""></i> -->
          <button class="archive-all-btn" type="submit" name="deleteAll" value="Archive All" title='Restore all Data' data-toggle=tooltip style="display:none; text-align:center;" id="checkbox-checked">
        RESTORE<span><br><i class="	fa fa-repeat" style="margin-top:2px;"></i></span></button>
        </button>
      </th>
         <th width="80px" >REG_ID</th>
         <th>BUSINESS_NAME</th>
         <th>TAXPAYER</th>
         <th width="90px">TYPE</th>
         <th>ADDRESS</th>
         <th  width="100px">BARANGAY</th>
         <th>BUSINESS_LINE</th>
         <th>ACTIVITY</th>
         <th width="90px">REG_DATE</th>
         <th width="80px">ACTION</th>
         
    </thead>
    <tbody class="checkbox-group">
  <?php

      if(count($fetchData)>0){      
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><input type="checkbox" name="checkedId[]" value="<?php echo $data['REG_ID']??''?>" onclick="DoCheckUncheckDisplay(this,'checkbox-checked','checkbox-unchecked')"></td>
      <td><?php echo $data['REG_ID']??''; ?></td>
      <td><?php echo $data['BUSINESS_NAME']??''; ?></td>
      <td><?php echo $data['TAXPAYER']??''; ?></td>
      <td><?php echo $data['TYPE']??''; ?></td>
      <td><?php echo $data['ADDRESS']??''; ?></td>
      <td><?php echo $data['BARANGAY']??''; ?></td>
      <td><?php echo $data['BUSINESS_LINE']??''; ?></td>
      <td><?php echo $data['ACTIVITY']??''; ?></td>
      <td><?php echo $data['REG_DATE']??''; ?></td>
      <TD><?php echo"<div >


        <a href=restore-confirm.php?ed_id=" .$data["REG_ID"] . " class=archive title='Restore data' data-toggle=tooltip><i class=fa fa-repeat style=font-size:15px;>&#xf01e;</i></a>  
      
        </div></TD>"?>
      
     </tr>
     <?php
      }}else{ ?>
      <tr>
      <td colspan="11" style="padding:30px; background-color:#ffc150">
        <?php echo "<p style='font-size:20px; font-weight:bold;'><span class='fas fa-box-open'></span>&nbsp Data NOT found!</p>"; ?>
        </td>
      <tr>
    <?php }?>
     </tbody>
    
     </table>
   </div>



</body>

</html>

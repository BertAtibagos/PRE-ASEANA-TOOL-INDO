<?php
session_start();

if(!isset($_SESSION["name"])){
    header("Location:logout.php");
}
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
}</style>

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
include('table-button-up.php')
?>

<?php
include("try/arch-backend.php");
?>

<body class="unselectable">


  <p class="path-name-height">Menu |  
    <span style="font-weight:bold">
      <i class="fas fa-archive"></i>&nbspArchive
    </span>
</p><br>

<div class="sticky-div">
        <?php
        include 'archive-navigation-bar.php';
        ?>
    </div>
    <br>

<p style="color: #90d190;
    font-weight: bold;"><?php echo $deleteMsg??'';?></p>
    <div class="">
   <form  method="post" id="deleteForm">
      <table class="action-btn ">
       <thead>
       <?php 
    if(count($fetchData)>0){  
    ?>
     
    
      
      
     <?php } ?> 
       <tr>
        <!-- <th>S.N</th> -->
        <th width="70px"><input type="checkbox" id="singleCheckbox" onclick="DoCheckUncheckDisplay(this,'checkbox-checked','checkbox-unchecked')">
        <!-- <button class="archive-all-btn" type="submit" name="deleteAll" value="Archive All" title='Archive all Data' data-toggle=tooltip style="display:none; float:right; margin-top:4px" id="checkbox-checked">
          <i class="fas fa-cogs" style=""></i> -->
          <button class="archive-all-btn" type="submit" name="deleteAll" value="Archive All" title='Restore all Data' data-toggle=tooltip style="display:none; text-align:center;" id="checkbox-checked">
        RESTORE<span><br><i class="	fa fa-repeat" style="margin-top:2px;"></i></span></button>
        </button>
      </th>
         <th width="80px" >REGISTRATION ID</th>
         <th>YEAR</th>
         <th>COMPANY NAME</th>
         <th width="90px">DATE REGISTERED</th>
         <th>STATUS</th>
         <th  width="100px">ADDRESS</th>
         <th>REGISTRATION CODE</th>
         <th>LIST OF CATEGORIES</th>
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
      <td><?php echo $data['YEAR']??''; ?></td>
      <td><?php echo $data['COMPANY_NAME']??''; ?></td>
      <td><?php echo $data['DATE_REGISTERED']??''; ?></td>
      <td><?php echo $data['STATUS']??''; ?></td>
      <td><?php echo $data['ADDRESS']??''; ?></td>
      <td><?php echo $data['REGISTRATION_CODE']??''; ?></td>
      <td><?php echo $data['CATEGORY_LIST']??''; ?></td>
      <TD><?php echo"<div>


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

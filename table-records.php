<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/display-script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script type="text/javascript" src="try/custom.js"></script>
  <script type="text/javascript" src="TAE/archive-&-check-all-func.js"></script>



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
  margin-left:-10px;
  border-radius:3px;

  border: solid 1px #404040;
}
.archive-all-btn:hover{
  background-color:#f0284a;
  color:#fff;
}
</style>
<?php
include("try/backend.php");

?>

<body class="unselectable">



<p style="color: #90d190;
    font-weight: bold;"><?php echo $deleteMsg??'';?></p>
    <div class="">
   <form  method="post" id="deleteForm">
      <table  class="action-btn ">
       <thead>
       <?php 
    if(count($fetchData)>0){  
    ?>
     
    
      
      
     <?php } ?> 
       <tr>
        <!-- <th>S.N</th> -->
        <th width="70px"><input type="checkbox" id="singleCheckbox" onclick="DoCheckUncheckDisplay(this,'checkbox-checked','checkbox-unchecked')"><br>
        <button class="archive-all-btn" type="submit" name="deleteAll" value="Archive All" title='Archive all Data' data-toggle=tooltip style="display:none; text-align:center;" id="checkbox-checked">
        ARCHIVE<span><br><i class="fas fa-cog" style="margin-top:2px;"></i></span></button>
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

        <a href=edit_page.php?ed_id=" .$data["REG_ID"] . " class=edit title=Edit data-toggle=tooltip><i class=fas fa-edit>&#xf044;</i></a>

        <a href=archive-confirm.php?ed_id=" .$data["REG_ID"] . " class=archive title='Move to Archive' data-toggle=tooltip><i class=fa fa-gear style=font-size:15px;>&#xf013;</i></a> 
      
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

<?php
include("backend.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script type="text/javascript" src="custom.js"></script>
</head>
<body>
<div class="">
 <div class="row" style="width:100%;">
   <div class="col-sm-12">
    <h3 class="text-danger text-center">Delete Multiple Records with Checkbox in PHP</h3>
    <p><?php echo $deleteMsg??'';?></p>
    <div class="table-responsive">
   <form method="post" id="deleteForm">
      <table class="table table-bordered table-striped ">
       <thead><tr><th>S.N</th>

         <th>REGISTRATION ID</th>
         <th>YEAR</th>
         <th>COMPANY NAME</th>
         <th>DATE REGISTERED</th>
         <th>STATUS</th>
         <th>ADDRESS</th>
         <th>REGISTRATION CODE</th>
         <th>LIST OF CATEGORIES</th>
         <th>ACTION</th>
         
    </thead>
    <tbody class="checkbox-group">
  <?php

      if(count($fetchData)>0){      
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><input type="checkbox" name="checkedId[]" value="<?php echo $data['REG_ID']??''?>"></td>
      <td><?php echo $data['REG_ID']??''; ?></td>
      <td><?php echo $data['YEAR']??''; ?></td>
      <td><?php echo $data['COMPANY_NAME']??''; ?></td>
      <td><?php echo $data['DATE_REGISTERED']??''; ?></td>
      <td><?php echo $data['STATUS']??''; ?></td>
      <td><?php echo $data['ADDRESS']??''; ?></td>
      <td><?php echo $data['REGISTRATION_CODE']??''; ?></td>
      <td><?php echo $data['CATEGORY_LIST']??''; ?></td>
      <TD><?php echo"<div >

        <a href=edit_page.php?ed_id=" .$data["REG_ID"] . " class=edit title=Edit data-toggle=tooltip><i class=fas fa-edit>&#xf044;</i></a>

        <a href=archive-confirm.php?ed_id=" .$data["REG_ID"] . " class=archive title='Move to Archive' data-toggle=tooltip><i class=fa fa-gear style=font-size:15px;>&#xf013;</i></a> 
      
        </div></TD>"?>
      
     </tr>
     <?php
      }}else{ ?>
      <tr>
        <td colspan="8">
        <?php echo "No Data Found"; ?>
        </td>
      <tr>
    <?php }?>
     </tbody>
    <?php 
    if(count($fetchData)>0){  
    ?>
     <tfoot>
    <tr>
      <td><input type="checkbox" id="singleCheckbox" ></td>
      <td class="text-danger">Check All</td>
      <td colspan="7"><input type="submit" name="deleteAll" value="Delete All" class="bg-danger text-light"></td>
    </tr>
     <tfoot>
     <?php } ?>
     </table>
   </tfoot>
   </div>
</div>
</div>
</div>
</body>
</html>

<head>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="css/dashboard-stylesheet.css">
<link rel="stylesheet" href="css/font-body.css">
<link rel="stylesheet" href="css/path-name-stylesheet.css">
<link rel="stylesheet" href="css/dashboard-table-design-stylesheet.css">
</head>

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


<html>
    <body>
    <br>
    <h2 class=""> 
      <span style="font-weight:bold">
        <i class="fa fa-th-large"></i>&nbspDashboard
      </span>
</h2>
    <br>
    <!-- <h1 class="dashboard-title">
<i class='fas fa-poll'></i><label> Dashboard</label></h1><br><br> -->

<div class="row"> 
  <div class="ag-format-container" >
  <div class="ag-courses_box" >
    <div class="ag-courses_item" style="margin-right:6px ;">
      <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
        <?php
          include 'controller/connection.php';
            $sql = "SELECT (SELECT COUNT(*)FROM businessdt_tbl) + (SELECT COUNT(*)FROM archv_businessdt_tbl) AS no_records;";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                echo"<h2>".$row['no_records']."</h2>"; 
            }
            
       ?>
        </div>

        <div class="ag-courses-item_date-box">
        <i class='fas fa-globe'></i>
          <span class="ag-courses-item_date">
          &nbspOverall Data
          </span>
        </div>
      </a>
    </div>

    <div class="ag-courses_item" style="margin-right:6px;">
      <a href="table-page.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
        <?php
            
                
                $sql = "SELECT COUNT(*) AS no_records FROM businessdt_tbl";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
                    echo"<h2>".$row['no_records']."</h2>"; 
                } 

            ?>
        </div>

        <div class="ag-courses-item_date-box">
        <i class='fas fa-folder'></i>
          <span class="ag-courses-item_date">
          &nbspAccessible Records
          </span>
        </div>
      </a>
    </div>



    <div class="ag-courses_item">
      <a href="archive-page.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
        <?php 
                
                $sql = "SELECT COUNT(*) AS no_records FROM archv_businessdt_tbl";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
                    echo"<h2>".$row['no_records']."</h2>"; 
                }

          ?>
        </div>

        <div class="ag-courses-item_date-box">
        <i class='fas fa-archive'></i>
          <span class="ag-courses-item_date">
          &nbspArchived Records
          </span>
        </div>
      </a>
    </div>
  </div>
</div>

</div><br>
<div class="column" style="border:solid 1px #bbb">

    <h3 class=""> 
        <span style="font-weight:bold">
          <i class="fas fa-user-clock"></i>&nbspData History
        </span>
    </h3>

<?php include("try/history_funct.php");?>
  <p><?php echo $deleteMsg??'';?></p>
    <div class="">
   <form  method="post" id="deleteForm">
      <table class="action-btn " style="">
       <thead>
       <?php 
    if(count($fetchData)>0){  
    ?>
     
    
      
      
     <?php } ?> 
       <tr  >
         <th><i class="	far fa-clock"></i>&nbsp&nbspTIMESTAMP</th> 	
         <th><i class="	fas fa-user-alt"></i>&nbsp&nbspUSER</th>	
         <th><i class="	fas fa-tasks"></i>&nbsp&nbspACTIVITY</th>
        </tr>
    </thead>
    <tbody class="checkbox-group">
  <?php

      if(count($fetchData)>0){      
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $data['time_inserted']??''; ?></td>
      <td style="font-weight:bold"><?php echo $data['user_name']??''; ?></td>
      <td><?php echo $data['user_action']??''; ?></td>
     </tr>
     <?php
      }}else{ ?>
      <tr>
        <td colspan="11">
        <?php echo "No Data Found"; ?>
        </td>
      <tr>
    <?php }?>
     </tbody>
    
     </table>
   </div>
</div>




<div class="column" style="border:solid 1px #bbb; overflow-y: scroll;
        overflow-x: hidden;" >

    <h3 style="font-weight:bold"> 
        <span >
          <i class="fas fa-columns"></i>&nbspData Analysis Table
        </span>
    </h3>

    <?php
    include 'masterpage-analytics.php'
    ?>

</div>
</div>
</body>
</html>


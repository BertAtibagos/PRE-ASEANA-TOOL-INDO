<!DOCTYPE html>
<html>
<head>
  
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
   overflow-y:scroll;
   height:300px;


}

tr {
  width:80px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color:none;
}

.bold-td{
  font-family:arial black;
  font-weight:bold;
  font-size:16px;
  text-align: center;
}
</style>
</head>
<body>
<?php
include 'controller/connection.php';
?>
<table>	
  <tr>
    <th  width="90px" style="text-align:center"><i class="	far fa-calendar"></i>&nbspYEAR</th>
    <th>
      <p style="text-align:center">NO. OF RECORDS FROM PAST 9 YEARS TO PRESENT</b>
      <span style ="margin:0"title='total number of business records from the past 9 years up to the present time' data-toggle="tooltip" >&nbsp<i class="	fa fa-info-circle" style="color:#687078"></i></span>
    </th>
  </tr>
  
  <tr>
    <td  class="bold-td">2013</td>
    <td>
      <?php 
       $sql = "SELECT COUNT(*) AS 2013_data FROM businessdt_tbl  WHERE REG_DATE LIKE '%2013%'";
       $result = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_array($result)){
           echo"<p>".$row['2013_data']."</p>"; 
       }
    ?>
    </td>
  </tr>

  <tr>
    <td class="bold-td">2014</td>
    <td>
    <?php 
       $sql = "SELECT COUNT(*) AS 2014_data FROM businessdt_tbl  WHERE REG_DATE LIKE '%2014%'";
       $result = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_array($result)){
           echo"<p>".$row['2014_data']."</p>"; 
       }
    ?>
    </td>
  </tr>

  <tr>
    <td class="bold-td">2015</td>
    <td>
    <?php 
       $sql = "SELECT COUNT(*) AS 2015_data FROM businessdt_tbl  WHERE REG_DATE LIKE '%2015%'";
       $result = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_array($result)){
           echo"<p>".$row['2015_data']."</p>"; 
       }
    ?>
    </td>
  </tr>

  <tr>
    <td class="bold-td">2016</td>
    <td>
    <?php 
       $sql = "SELECT COUNT(*) AS 2016_data FROM businessdt_tbl  WHERE REG_DATE LIKE '%2016%'";
       $result = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_array($result)){
           echo"<p>".$row['2016_data']."</p>"; 
       }
    ?>
    </td>
  </tr>

  <tr>
    <td class="bold-td">2017</td>
    <td>
    <?php 
       $sql = "SELECT COUNT(*) AS 2017_data FROM businessdt_tbl  WHERE REG_DATE LIKE '%2017%'";
       $result = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_array($result)){
           echo"<p>".$row['2017_data']."</p>"; 
       }
    ?>
    </td>
  </tr>

  <tr>
    <td class="bold-td">2018</td>
    <td>
    <?php 
       $sql = "SELECT COUNT(*) AS 2018_data FROM businessdt_tbl  WHERE REG_DATE LIKE '%2018%'";
       $result = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_array($result)){
           echo"<p>".$row['2018_data']."</p>"; 
       }
    ?>
    </td>
  </tr>

  <tr>
    <td class="bold-td">2019</td>
    <td>
    <?php 
       $sql = "SELECT COUNT(*) AS 2019_data FROM businessdt_tbl  WHERE REG_DATE LIKE '%2019%'";
       $result = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_array($result)){
           echo"<p>".$row['2019_data']."</p>"; 
       }
    ?>
    </td>
  </tr>

  <tr>
    <td class="bold-td">2020</td>
    <td>
    <?php 
       $sql = "SELECT COUNT(*) AS 2020_data FROM businessdt_tbl  WHERE REG_DATE LIKE '%2020%'";
       $result = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_array($result)){
           echo"<p>".$row['2020_data']."</p>"; 
       }
    ?>
    </td>
  </tr>

  <tr>
    <td class="bold-td">2021</td>
    <td>
    <?php 
       $sql = "SELECT COUNT(*) AS 2021_data FROM businessdt_tbl  WHERE REG_DATE LIKE '%2021%'";
       $result = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_array($result)){
           echo"<p>".$row['2021_data']."</p>"; 
       }
    ?>
    </td>
  </tr>

  <tr>
    <td class="bold-td">2022</td>
    <td>
    <?php 
       $sql = "SELECT COUNT(*) AS 2022_data FROM businessdt_tbl  WHERE REG_DATE LIKE '%2022%'";
       $result = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_array($result)){
           echo"<p>".$row['2022_data']."</p>"; 
       }
    ?>
    </td>
  </tr>

  <tr>
    <td class="bold-td">2023</td>
    <td>
    <?php 
       $sql = "SELECT COUNT(*) AS 2023_data FROM businessdt_tbl  WHERE REG_DATE LIKE '%2023%'";
       $result = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_array($result)){
           echo"<p>".$row['2023_data']."</p>"; 
       }
    ?>
    </td>
  </tr>

</table>

</body>
</html>


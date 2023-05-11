<?php
session_start();

if(!isset($_SESSION["name"])){
    header("Location:logout.php");
}
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--submit icon-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="css/font-body.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="css/path-name-stylesheet.css">
<style>



/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
  background-color:none;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* table */

.customers {
font-family: Helvetica;
table-layout:fixed;
text-align:center;
border-collapse: collapse;
font-size:70%;
width: 100%;
}
.customers td, #customers th {
border: 1px solid #27292C;
padding: 8px;
}
.customers tr:nth-child(even){
background-color: #FFC150;
}
.customers th {
padding:12px;
text-align:center;
background-color: #27292C;
color: #fff;
border: 1px solid #949494;
}
.edit-data-title {
    position: relative;
    top:15px;
    font-size: 25px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight:bold;
    margin-bottom:20px;
    text-align: center;
}
.edit-preview-title {
    position: relative;
    top:15px;
    font-size: 25px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight:bold;
    margin-bottom:20px;
}
.save-changes-cancel-button-design{
  width:49.3%;
  display: inline; 
  background-color: #393F45;
  color:#fff;
  margin: 0;
  border-radius: 5px;
  border:none;
  padding:3px;
  transition: color 0.2s ease-in-out, background 0.2s ease-in-out;
  font-size:15px;
 
}
.change-button-hover:hover {
  background-color: #1877f2;  
}
.cancel-button-hover:hover {
  background-color:  #F0284A;  
}
.select-position{
  position:relative; 
  margin-top:-15px; 
  padding:10px;
}
</style>
</head>
<body>

    <?php
      $ed_key = $_GET["ed_id"];

      include 'controller/connection.php';
      
      $sql = "SELECT * FROM businessdt_tbl WHERE REG_ID = '$ed_key'";
      $result1 = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result1);
      mysqli_close($conn);

    ?>

<p class="path-name-height">Menu | Table | 
    <span style="font-weight:bold; font-family: Arial, Helvetica;">
    <i class="fas fa-edit"></i>&nbspEdit Data
    </span>
</p>
<br><br>

    
<div class="row" style="top:50px; background-color:none; border:1px solid #bbb; border-radius:3px;">
  <form class="" style="" method=POST action="update-data.php" >
  
      
      <div class="column" >
          
              <p>
              <i class="fas fa-folder-open"></i><label for="Bus_name">&nbsp Registration ID</label>
              <INPUT class="w3-input no-outline" type="text" size=25 name="reg_id" id="regid" value=<?php echo $row["REG_ID"]; ?> readonly>
              </p>
              <p>
                <i class="fa fa-suitcase"></i><label for="Bus_name">&nbsp Business Name</label>
                <input class="w3-input no-outline" type="text" id="Bus_name" name="Bus_name" value="<?php echo $row["BUSINESS_NAME"];?>">
              </p>

             
              <p>
                <i class="fas fa-building"></i><label for="business_Type">&nbsp Type of Business</label>
              </p>
                <select class="w3-input no-outline select-position"  style=""id="business_Type" name="bus_type" value="<?php echo $row["TYPE"];?>">
                  <option>Corporation</option>
                  <option>Partnership</option>
                  <option>One Person Corporation</option>
                </select>

              
      </div>
      <div class="column">
              <p>
                <i class="fas fa-user-circle"></i><label for="TX_name">&nbsp Name of Taxpayer</label>
                <input class="w3-input no-outline" type="text" id="TX_name" name="TAX_name" value="<?php echo $row["TAXPAYER"];?>">
              </p>
              <p>
                <i class="fas fa-hammer"></i><label for="business_line">&nbsp Business Line</label>
                    <input class="w3-input no-outline" type="text" id="business_line" name="bus_line" value="<?php echo $row["BUSINESS_LINE"];?>">
              </p>

              <p>
                <i class="fas fa-dice"></i><label for="act">&nbsp Business Activity</label>
                    <input class="w3-input no-outline" type="text" id="act" name="activity" value="<?php echo $row["ACTIVITY"];?>">
              </p>
      </div>
      <div class="column" >
      
              <p>
                <i class="fas fa-calendar-alt"></i><label for="reg_date">&nbsp Date of Registration</label>
                    <input class="w3-input no-outline" type="date" id="reg_date" name="reg_date" value="<?php echo $row["REG_DATE"];?>">
              </p>

              <p>
                <i class="fa fa-home"></i><label for="address">&nbsp Street Address</label>
                    <input class="w3-input no-outline" type="text" id="address" name="address" value="<?php echo $row["ADDRESS"];?>">
                </p>
          
              <p>
                <i class="fa fa-map-marker"></i><label for="brgy">&nbsp Barangay Address</label>
                    <input class="w3-input no-outline" placeholder="Muzon" type="text" id="brgy" name="brgy" value="<?php echo $row["BARANGAY"];?>">
              </p>

              <button class="save-changes-cancel-button-design change-button-hover" value="submit" > Save Changes</button>
              <a href="table-page.php"><input type="button" class="save-changes-cancel-button-design cancel-button-hover" value="Cancel"></a>


      </div>
    </form>
</div>

    </div>

    <div style="">
  
<h2 class="edit-preview-title">
<i class="fas fa-tv"></i><label>&nbsp Edit Preview</label></h2>
            
            <?php
            $ed_key = $_GET["ed_id"];
            
            include 'controller/connection.php';
            
            $sql = "SELECT * FROM businessdt_tbl WHERE REG_ID = '$ed_key'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)> 0){
                echo"<TABLE class=customers style=margin-top:10px><TR><TH>Registration ID</TH><TH>BUSINESS NAME</TH><TH>TAXPAYER</TH><TH>TYPE</TH><TH>ADDRESS</TH><TH>BARANGAY</TH>
                <TH>BUSINESS LINE</TH><TH>ACTIVITY</TH><TH>REG DATE</TH>";
                while($row1 = mysqli_fetch_assoc($result)){
                    echo"<TR><TD>". $row1["REG_ID"]. "</TD><TD>". $row1["BUSINESS_NAME"]. "</TD><TD>" . $row1["TAXPAYER"]. "</TD><TD>" .$row1["TYPE"]. "</TD><TD>" .$row1["ADDRESS"]. "</TD>
                    <TD>" .$row1["BARANGAY"]. "</TD><TD>" .$row1["BUSINESS_LINE"]. "</TD><TD>" .$row1["ACTIVITY"]. "</TD><TD>" .$row1["REG_DATE"]. "</TD></TR>";
                }
                echo"</TABLES>";
            }else {
                echo"No records found!";
            }
            mysqli_close($conn);
            
            ?>         
</div> <!---->  
</body>
</html>

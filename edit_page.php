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
                <i class="fa fa-suitcase"></i><label for="Bus_name">&nbsp YEAR</label>
                <input class="w3-input no-outline" type="text" id="Bus_name" name="year" value="<?php echo $row["YEAR"];?>">
              </p>

             
              <p>
                <i class="fas fa-building"></i><label for="business_Type">&nbsp COMPANY NAME</label>
              </p>
                <input class="w3-input no-outline select-position" type="text" style=""id="business_Type" name="comp_name" value="<?php echo $row["COMPANY_NAME"];?>">

              
      </div>
      <div class="column">
              <p>
                <i class="fas fa-user-circle"></i><label for="TX_name">&nbsp DATE REGISTERED</label>
                <input class="w3-input no-outline" type="text" id="TX_name" name="date_reg" value="<?php echo $row["DATE_REGISTERED"];?>">
              </p>
              <p>
                <i class="fas fa-hammer"></i><label for="business_line">&nbsp STATUS</label>
                    <input class="w3-input no-outline" type="text" id="business_line" name="stat" value="<?php echo $row["STATUS"];?>">
              </p>

              <p>
                <i class="fas fa-dice"></i><label for="act">&nbsp ADDRESS</label>
                    <input class="w3-input no-outline" type="text" id="act" name="address" value="<?php echo $row["ADDRESS"];?>">
              </p>
      </div>
      <div class="column" >
      
              <p>
                <i class="fas fa-calendar-alt"></i><label for="reg_date">&nbsp REGISTRATION CODE</label>
                    <input class="w3-input no-outline" type="date" id="reg_date" name="reg_code" value="<?php echo $row["REGISTRATION_CODE"];?>">
              </p>

              <p>
                <i class="fa fa-home"></i><label for="address">&nbsp LIST OF CATEGORIES</label>
                    <input class="w3-input no-outline" type="text" id="address" name="categ_list" value="<?php echo $row["CATEGORY_LIST"];?>">
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
                echo"<TABLE class=customers style=margin-top:10px>
                <TR><TH>REGISTRATION ID</TH>
                <TH>YEAR</TH>
                <TH>COMPANY NAME</TH>
                <TH>DATE REGISTERED</TH>
                <TH>STATUS</TH>
                <TH>ADDRESS</TH>
                <TH>REGISTRATION CODE</TH>
                <TH>LIST OF CATEGORIES</TH>";
                while($row1 = mysqli_fetch_assoc($result)){
                    echo"<TR>
                    <TD>". $row1["REG_ID"]. "</TD>
                    <TD>". $row1["YEAR"]. "</TD>
                    <TD>" . $row1["COMPANY_NAME"]. "</TD>
                    <TD>" .$row1["DATE_REGISTERED"]. "</TD>
                    <TD>" .$row1["STATUS"]. "</TD>
                    <TD>" .$row1["ADDRESS"]. "</TD>
                    <TD>" .$row1["REGISTRATION_CODE"]. "</TD>
                    <TD>" .$row1["CATEGORY_LIST"]. "</TD>
                    </TR>";
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

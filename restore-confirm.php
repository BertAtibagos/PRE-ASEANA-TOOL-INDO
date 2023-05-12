<?php
session_start();

if(!isset($_SESSION["name"])){
    header("Location:logout.php");
}
?>

<HTML>
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/font-body.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  </head>
<BODY>
<style>

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
  background-color:  #FFC150;
}
.customers th {
padding:12px;
text-align:center;
background-color: #27292C;
color: #fff;
border: 1px solid #27292C;
}

/*Action Buttons*/

.edit_dlt{
  text-decoration: none;
}
.archive-confirm-btn{
  width:47.5%;
  height:40px;
  display: inline; 
  background-color: #393F45;
  color:#fff;
  margin: 1%;
  border-radius: 5px;
  border:none;
  padding-top:7px;
  padding-bottom:10px;
  font-size:15px;
  transition: color 0.2s ease-in-out, background 0.2s ease-in-out;
}

.yes-to-archive-btn:hover{
  background-color: #1877f2;  
}

.cancel-btn:hover{
  background-color: #F0284A;  
}

.archive-confirm-question {
    position: relative;
    top:15px;
    font-size: 25px;
    text-align:center;
}
.archive-confirm-preview {
    position: relative;
    top:15px;
    font-size: 25px;
}
</style>

<h1 class="archive-confirm-question">
<label>&nbsp Restore this record?</label></h1>
<hr></hr>
<?php
$ed_key = $_GET["ed_id"];

include 'controller/connection.php';

$sql = "SELECT * FROM archv_businessdt_tbl WHERE REG_ID = '$ed_key'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)> 0){
	echo"<TABLE class=customers>
  <TR>
  <TH>REGISTRATION ID</TH>
  <TH>YEAR</TH>
  <TH>COMPANY NAME</TH>
  <TH>DATE REGISTERED</TH>
  <TH>STATUS</TH>
  <TH>ADDRESS</TH>
  <TH>REGISTRATION CODE</TH>
  <TH>LIST OF CATEGORIES</TH>
  </TR>";
	while($row1 = mysqli_fetch_assoc($result)){
		echo"<TR><TD>". $row1["REG_ID"]. "</TD>
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

?>
<?php
$ed_key = $_GET["ed_id"];



$sql = "SELECT * FROM archv_businessdt_tbl WHERE REG_ID = '$ed_key'";
$result1 = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result1);
mysqli_close($conn);


echo "<a style='text-decoration:none;' href=restore-function.php?ed_id=".$row['REG_ID']."><button class='archive-confirm-btn yes-to-archive-btn' active>Yes, restore this record.</button></a>";
echo "<a href='archive-page.php'><button class='archive-confirm-btn cancel-btn'>Cancel</button></a>";

?>

<h1 class="archive-confirm-preview">
<i class='fas fa-tv'></i><label>&nbsp Archiving Data Preview</label></h1><br>
</BODY>
</HTML>
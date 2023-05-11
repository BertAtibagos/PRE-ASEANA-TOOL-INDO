<?php
session_start();

if(!isset($_SESSION["name"])){
    header("Location:logout.php");
}
?>

<head>
    <link rel="stylesheet" href="css/sort-results-stylesheet.css">
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
    <head>
        <link rel="stylesheet" href="css/table-design-stylesheet.css">
        <link rel="stylesheet" href="css/font-body.css">
        <link rel="stylesheet" href="css/path-name-stylesheet.css">
    </head>
    <!--EXPORT ONE YEAR -->
<body>

<p class="path-name-height">Export | 
        <span style="font-weight:bold">
            <i class="fas fa-file-download"></i>&nbspExport by Year
        </span>
    </p><br>

<?php
include('table-button-up.php')
?>

<?php
$year=$_POST['year'];
$alpha_srt=$_POST['alphasrt'];


include 'controller/connection.php';
echo"<BR>";

if($alpha_srt=="true"){
$sql = "SELECT * FROM businessdt_tbl WHERE REG_DATE LIKE '%$year%' ORDER BY BUSINESS_NAME ASC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)> 0){
    echo"<TABLE border=2 cellpadding=5><TR><TH>REGISTRATION ID</TH><TH>BUSINESS_NAME</TH><TH>TAXPAYER</TH><TH>TYPE</TH><TH>ADDRESS</TH><TH>BARANGAY</TH>
    <TH>BUSINESS_LINE</TH><TH>ACTIVITY</TH><TH>REG_DATE</TH>";
    while($row = mysqli_fetch_assoc($result)){
        echo"<TR><TD>". $row["REG_ID"]. "</TD><TD>". $row["BUSINESS_NAME"]. "</TD><TD>" . $row["TAXPAYER"]. "</TD><TD>" .$row["TYPE"]. "</TD><TD>" .$row["ADDRESS"]. "</TD>
        <TD>" .$row["BARANGAY"]. "</TD><TD>" .$row["BUSINESS_LINE"]. "</TD><TD>" .$row["ACTIVITY"]. "</TD><TD>" .$row["REG_DATE"]. "</TD></TR>";
    }
    echo"</TABLES>";
}else {
    echo"No records found!";
}
    
$query = "SELECT * FROM businessdt_tbl WHERE REG_DATE LIKE '%$year%' ORDER BY BUSINESS_NAME ASC";
$result1 = mysqli_query($conn,$query);
$user_arr = array();
while($row = mysqli_fetch_array($result1)){
    $reg_id = $row['REG_ID'];
    $bs_name = $row['BUSINESS_NAME'];
    $txpyr = $row['TAXPAYER'];
    $type = $row['TYPE'];
    $add = $row['ADDRESS'];
    $brgy = $row['BARANGAY'];
    $bs_line = $row['BUSINESS_LINE'];
    $actv = $row['ACTIVITY'];
    $reg_date = $row['REG_DATE'];
    $user_arr[] = array($reg_id,$bs_name,$txpyr,$type,$add,$brgy,$bs_line,$actv,$reg_date);
}
}else if($alpha_srt=="false"){
        $sql = "SELECT * FROM businessdt_tbl WHERE REG_DATE LIKE '%$year%'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result)> 0){
            echo"<TABLE border=2 cellpadding=5><TR><TH>Registration ID</TH><TH>BUSINESS_NAME</TH><TH>TAXPAYER</TH><TH>TYPE</TH><TH>ADDRESS</TH><TH>BARANGAY</TH>
            <TH>BUSINESS_LINE</TH><TH>ACTIVITY</TH><TH>REG_DATE</TH>";
            while($row = mysqli_fetch_assoc($result)){
                echo"<TR><TD>". $row["REG_ID"]. "</TD><TD>". $row["BUSINESS_NAME"]. "</TD><TD>" . $row["TAXPAYER"]. "</TD><TD>" .$row["TYPE"]. "</TD><TD>" .$row["ADDRESS"]. "</TD>
                <TD>" .$row["BARANGAY"]. "</TD><TD>" .$row["BUSINESS_LINE"]. "</TD><TD>" .$row["ACTIVITY"]. "</TD><TD>" .$row["REG_DATE"]. "</TD></TR>";
            }
            echo"</TABLES>";
        }else {
            echo"No records found!";
        }
            
        $query = "SELECT * FROM businessdt_tbl WHERE REG_DATE LIKE '%$year%'";
        $result1 = mysqli_query($conn,$query);
        $user_arr = array();
        while($row = mysqli_fetch_array($result1)){
            $reg_id = $row['REG_ID'];
            $bs_name = $row['BUSINESS_NAME'];
            $txpyr = $row['TAXPAYER'];
            $type = $row['TYPE'];
            $add = $row['ADDRESS'];
            $brgy = $row['BARANGAY'];
            $bs_line = $row['BUSINESS_LINE'];
            $actv = $row['ACTIVITY'];
            $reg_date = $row['REG_DATE'];
            $user_arr[] = array($reg_id,$bs_name,$txpyr,$type,$add,$brgy,$bs_line,$actv,$reg_date);
        }
}
mysqli_close($conn);
?>

<form action="sort-page.php" >
    <input class="sort-button red" type="submit" value="Return">
</form>
<form method=POST action='sort-data.php'>&nbsp
      <input  class="sort-button green" type='submit' value='Export' name='Export'>
      File name:
      <input class="input-width" type="text" placeholder="File name" name="filename"required>
 
      <?php 
      $serialize_user_arr = serialize($user_arr);
      ?>
      <textarea name='export_data' style='display: none;'><?php echo $serialize_user_arr; ?></textarea>
  </form>
  <br><br>
</body>
</html>
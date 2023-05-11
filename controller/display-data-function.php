<?php
include 'connection.php';
echo"";

$sql = "SELECT * FROM businessdt_tbl";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)> 0){
	echo'<TABLE class=action-btn>
    <TR>
      <TH class="h2th"><input type="checkbox">CHECK ALL</TH>
      <TH class="h2th">REGISTERED ID</TH>
      <TH class="h2th">BUSINESS NAME</TH>
      <TH class="h2th">TAXPAYER</TH>
      <TH class="h2th">TYPE</TH>
      <TH class="h2th">ADDRESS</TH>
      <TH class="h2th">BARANGAY</TH>
      <TH class="h2th">BUSINESS LINE</TH>
      <TH class="h2th">ACTIVITY</TH>
      <TH class="h2th">REGISTERED DATE</TH>
      <TH class="h2th">ACTION</TH>
      ';
	while($row = mysqli_fetch_assoc($result)){
		echo"<TR><TD><input type='checkbox' value=''></TD><TD>". $row["REG_ID"]. "</TD><TD>". $row["BUSINESS_NAME"]. "</TD><TD>" . $row["TAXPAYER"]. "</TD><TD>" .$row["TYPE"]. "</TD><TD>" .$row["ADDRESS"]. "</TD>
        <TD>" .$row["BARANGAY"]. "</TD><TD>" .$row["BUSINESS_LINE"]. "</TD><TD>" .$row["ACTIVITY"]. "</TD><TD>" .$row["REG_DATE"]. "</TD>
		    <TD><div >

        <a href=edit_page.php?ed_id=" .$row["REG_ID"] . " class=edit title=Edit data-toggle=tooltip><i class=fas fa-edit>&#xf044;</i></a>

        <a href=archive-confirm.php?ed_id=" .$row["REG_ID"] . " class=archive title='Move to Archive' data-toggle=tooltip><i class=fa fa-gear style=font-size:15px;>&#xf013;</i></a> 
      
        </div></TD></TR>";
	}
	echo"</TABLES>";
}else {
	echo"No records found!";
}
mysqli_close($conn);
?>

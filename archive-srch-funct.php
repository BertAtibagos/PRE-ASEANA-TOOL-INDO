<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<link rel="stylesheet" href="css/navigation-bar-stylesheet.css">
<link rel="stylesheet" href="css/table-design-stylesheet.css">
<link rel="stylesheet" href="css/font-body.css">
</head>
<body class="unselectable">

    <div class="sticky-div">
        <?php
        include 'archive-navigation-bar.php';
        ?>
    </div>
<div class="disp-table">

</div>


</body>
<?php
include 'controller/connection.php';

$srch_entry = $_POST['srch_entry'];
$srch_fld = $_POST['srch_fld'];


$sql = "SELECT * FROM archv_businessdt_tbl WHERE $srch_fld LIKE '%$srch_entry%'";
		$result = mysqli_query($conn, $sql);
	
		if (mysqli_num_rows($result)> 0){
			echo"<TABLE class=action-btn>
			<TR>
			  <TH>REGISTERED ID</TH>
			  <TH>BUSINESS NAME</TH>
			  <TH>TAXPAYER</TH>
			  <TH>TYPE</TH>
			  <TH>ADDRESS</TH>
			  <TH>BARANGAY</TH>
			  <TH>BUSINESS LINE</TH>
			  <TH>ACTIVITY</TH>
			  <TH>REGISTERED DATE</TH>
			  <TH>ACTION</TH>
			  ";
			while($row = mysqli_fetch_assoc($result)){
				echo"<TR><TD>". $row["REG_ID"]. "</TD><TD>". $row["BUSINESS_NAME"]. "</TD><TD>" . $row["TAXPAYER"]. "</TD><TD>" .$row["TYPE"]. "</TD><TD>" .$row["ADDRESS"]. "</TD>
				<TD>" .$row["BARANGAY"]. "</TD><TD>" .$row["BUSINESS_LINE"]. "</TD><TD>" .$row["ACTIVITY"]. "</TD><TD>" .$row["REG_DATE"]. "</TD>
					<TD><div >
		
					<a href=restore-confirm.php?ed_id=" .$data["REG_ID"] . " class=archive title='Restore data' data-toggle=tooltip><i class=fa fa-repeat style=font-size:15px;>&#xf01e;</i></a> 
				</div></TD></TR>";
			}
			echo"</TABLES>";
		}else {
			echo"No records found!";
		}
		mysqli_close($conn);
	


?>
</html>
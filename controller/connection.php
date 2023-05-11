
<?php
$srvr = "localhost";
$user = "root";
$pass = "";
$db = "businessdt_db";
$conn = new mysqli($srvr,$user, $pass, $db);

if (!$conn){
	die("Connection failed: ". mysqli_connect_error());
}
?>
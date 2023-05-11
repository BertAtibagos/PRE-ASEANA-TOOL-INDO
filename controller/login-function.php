<?php
include 'connection.php';
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

$username=$_POST['username'];
$password=$_POST['passwrd'];


// $username = stripslashes($username);
// $password = stripslashes($password);
// $username = mysqli_real_escape_string($username);
// $password = mysqli_real_escape_string($password);

$sql= "SELECT * FROM user_account_tbl WHERE user_name= '$username' AND user_passwrd='$password'";
$result=mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);
if ($row) {
$_SESSION['id']= $row['user_id'];
$_SESSION['username']=$username; // Initializing Session
include 'dashboard_page.php';
}else{
echo $row['user_name'];
}
mysqli_close($conn); // Closing Connection

?>
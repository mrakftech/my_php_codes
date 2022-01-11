<?php

include("connection.php");

if (isset ($_POST['submit1'])) {

//Take username and password from FORM-1
$myusername = $_POST['my_user'];
$mypassword = $_POST['my_pass'];

//To Protect MySQL Injection Attack
$myusername=stripslashes($myusername);
$mypassword=stripslashes($mypassword);
$myusername=mysqli_real_escape_string($conn, $myusername);
$mypassword=mysqli_real_escape_string($conn, $mypassword);

//Create Query to Search for username and pasword and return result
$myquery = "SELECT * FROM members WHERE username = '$myusername' AND passcode ='$mypassword' ";
$myresult = mysqli_query($conn, $myquery);

//Counting Rows in database table to find username and password
$count = mysqli_num_rows($myresult);
////
//if username and password matched then row is always 1
if ($count == 1) {
	
	session_start();
    $_SESSION["myusername"] = $myusername;
    $_SESSION["mypassword"] = $mypassword;
	header ("location:login_success.php"); }
    
	else { echo "Entered Wrong Username and Password"; }
}

?>







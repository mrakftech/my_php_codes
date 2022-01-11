<?php

//Parameters to connect to MySQL database named club
$hostname = 'localhost';
$uname = 'admin';
$upass = 'nasras786';
$dbname = 'club';
$conn = mysqli_connect($hostname, $uname, $upass);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error($conn));
}
echo 'Connected successfully<br />';

$retval = mysqli_select_db( $conn, 'club' );
if(! $retval ) {
   die('Could not select database: ' . mysqli_error($conn));
}
echo "Database CLUB selected successfully<br />";

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







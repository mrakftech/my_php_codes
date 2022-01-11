<?php
if (isset($_POST['$blogout'])) {
	session_destroy(); }

echo "<html><body> You are Logged Out Now </body></html>";
echo "<br/>";
echo "<br/>";
echo "<a href='http://localhost/club/loginpage.html'>Go to Login Page</a>";


//session_start();
//$_SESSION["user_id"] = "";
//session_destroy();
//header("Location: index.php");

?>
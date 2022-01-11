<?php
session_start();
echo "Welcome " . $_SESSION['myusername'] . " - You are logged In successfully";
echo "<br/>";
echo "<br/>";
echo "<html>";
echo "<body>";
echo "<form method='post' action='logout.php'>";
echo "<input name='blogout' type='submit' value='Logout'/>";
echo "</form>";
echo "</body>";
echo "</html>";
?>

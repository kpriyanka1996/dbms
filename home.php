<?php
session_start();
$username=$_SESSION['name'];
if(!empty($username)){
	echo 'welocme '.$username;
	echo '<p style="float:right"><a href="logout.php">LOGOUT</p>';
}
?>
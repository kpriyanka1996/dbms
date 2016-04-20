<?php
@session_start();
include 'connect.inc.php';
if((isset($_POST['name']))&&(isset($_POST['password']))){
	$username=$_POST['name'];
	$password=$_POST['password'];
	if(!empty($username)&&!empty($password)){
		$query="SELECT `username`,`password` FROM `customer_info` WHERE `username`='$username' AND `password`='$password'";
		$query_run=mysql_query($query);
		$number=mysql_num_rows($query_run);
         if($number==0)
		 {
			 echo 'no results found';
		 }
		 elseif($number==1)
		 {   
			 $_SESSION['name']=$username;
			 header("Location:home.php");
			 }
	}
	
}
?>
<form action='login.php' method='POST'>
Username :<input id=input type="text" name="name" placeholder="Username"><br><br>
Password :<input type="password" name="password" placeholder="Password">
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
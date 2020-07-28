<?php

if(isset($_POST['submit']))
{
	$name= $_POST['name'];
	$mail= $_POST['email'];
	$username= $_POST['uuserName'];
	$password= $_POST['password'];
	$confirmPassword= $_POST['confirmPassword'];
	$_SESSION[flag]='1';
	$gender= $_POST['gender'];
	$dob= $_POST['DOB'];
	
	if($username == "")
	{
		header ('location: reg.php? error= name not found');
	}
	
	
	else if($usermail == "")
	{
		header ('location: reg.php? error= mail not found');
	}
	
	else if($gender == "")
	{
		header ('location: reg.php? error= gender not found');
	}
	else if($DoB == "")
	{
		header ('location: reg.php? error= DoB not found');
	}
	else if($Bgroup == "")
	{
		header ('location: reg.php? error= Blood group not found');
	}
	
}
else 
	
		echo 'Registraion complete';
		header('locationa: login.html');



?>
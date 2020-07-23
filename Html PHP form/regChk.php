<?php

if(isset($_POST['submit']))
{
	$username= $_POST['username'];
	$usermail= $_POST['usermail'];
	$gender= $_POST['gender'];
	$DoB= $_POST['DoB'];
	$Bgroup = $_POST['Bgroup'];
	if($username == "")
	{
		header ('location: reg.php? error= name not found');
	}
	else if(str_word_count($username)!= 2)
	{
		header ('location: reg.php? error= name is short');
	}
	else if($usermail == "")
	{
		header ('location: reg.php? error= mail not found');
	}
	else if(filter_var($usermail, FILTER_VALIDATE_EMAIL)!= true)
	{
		header ('location: reg.php? error= mail not valid');
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
	else 
		echo 'Registraion complete';
}

?>
<?php

if(isset($_POST['submit']))
{
	$username= $_POST['name'];
	$usermail= $_POST['email'];
	$password= $_POST['password'];
	/*$gender= $_POST['gender'];
	$DoB= $_POST['DoB'];
	$Bgroup = $_POST['Bgroup'];*/
	
	echo '$username';
	echo $usermail;
	
			echo 'Registraion complete';
}
else
{
	echo 'wrong syntax';
	
}
	
		?>
	<!DOCTYPE html>
<html>
<body>
<h1>its ok<h1>
</body>
</html>	
<?php


?>


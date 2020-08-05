<?php
	
	if(isset($_POST['submit']))
	{
		$firstName = $_POST['firstName'];
		$secondName = $_POST['secondName'];
		$exp_date = "2016/12/31";
		$dob = $_POST['dob'];
		$exp = strtotime($exp_date);
		$today = strtotime($dob);
		$gender = $_POST['gender'];
	
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$repass = $_POST['repass'];
		if($firstName == "" || $secondName == "")
		{
			header('location: registrationForm.php?error=First or Second name can not be empty');
		}
		   else if  (!preg_match("/^[a-zA-Z ]*$/",$firstName) || !preg_match("/^[a-zA-Z ]*$/",$secondName) )
		{
			header('location: registrationForm.php?error=First or Second name can not start with number or must have minimum 2 letter');
		}  
		
		 else if ($gender == "")
		{
			header('location: registrationForm.php?error=Gender can not be empty');
		}
		 
		else if ($today == "")
		{
			header('location: registrationForm.php?error=Input date ');
		}
		else if ($today > $exp)
		{
			header('location: registrationForm.php?error=Invalid date ');
		}
		else if ($email == "")
		{
			header('location: registrationForm.php?error=Please give email address');
		}
		else if (filter_var($email, FILTER_VALIDATE_EMAIL)!= true)
		{
			header('location: registrationForm.php?error=Please give valid email address that contains "@gmail.com"');
		}
		else  if($pass == "" || $repass == "")
		{
			header('location: registrationForm.php?error=PassWord or Confirm PassWord can not be empty');
		}
		else  if($pass != $repass)
		{
			header('location: registrationForm.php?error=PassWord did not match please recheck');
		}

		else 
			echo 'Registration Succesfull :)' ;	
	}
?>
<?php
	include('db.php');	
	if(isset($_POST['submit']))
	{
			
		$userName = $_POST['userName'];
		
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		
		
		if($userName == "")
		{	
			header('location: registrationForm.php?error=user name can not be empty');
		}	
		 
		else if ($email == "")
		{	
			header('location: registrationForm.php?error=Please give email address');
		}
		
		else  if($pass == "" )
		{
			header('location: registrationForm.php?error=PassWord can not be empty');
		}
		
		else {
			
			
			
			$sql= "INSERT INTO test ('',name,email,pass) VALUES ('','$userName','$email','$pass');";
			$result = mysqli_query($con, $sql);
			
			$user 	= mysqli_fetch_assoc($results);
			
			if (!empty($user)) {
				
					header('location:login.php?error = Registration Successful...please log in now');
			}
				else{
					header('location:registrationForm.php?error = Registration failed');
					}
			}
			
	}
	else{echo 'submission failed';  }
	
?>
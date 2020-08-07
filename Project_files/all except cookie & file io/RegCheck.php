<?php
	
	if(isset($_POST['submit']))
	{
				
		$userName = $_POST['userName'];
		$fullName = $_POST['fullName'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$repass = $_POST['repass'];
		
		if($userName == "" || $fullName == "")
		{	
			header('location: registrationForm.php?error=user name or full name can not be empty');
		}	
		 else if ($gender == "")
		{	
			header('location: registrationForm.php?error=Gender can not be empty');
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
		else {
			
			$con =mysqli_connect('localhost', 'root', '', 'userinfo');
			
			$sql= "INSERT INTO userinfo (userName,fullName,gender,email,pass) VALUES ('$userName','$fullName','$gender','$email','$pass');";
			$result = mysqli_query($con, $sql);
			$sqls = "SELECT * FROM userinfo WHERE userName = ".$userName." AND email = ".$email."";
			$results = mysqli_query($con, $sqls);
			$user 	= mysqli_fetch_assoc($results);
			
			if ($result) {
				
				if($user['userName'] = $userName || $user['email'] = $email ){
				
					header('location:login.php?error=Already registered');
				}
				else{
					header('location:Login.php');
					}
			}
			else if(!mysql_query($con, $sql)) {
					echo "Data can't insert successfully!";
					header('location:registrationForm.php?error=error2');
					}
			else{
					header('location: registrationForm.php?error=registration success');
				}
	}
	}
?>
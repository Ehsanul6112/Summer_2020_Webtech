<?php
	session_start();
	if(isset($_POST['submit']))
	{
				
		$userName = $_POST['userName'];
		$fullName = $_POST['fullName'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$repass = $_POST['repass'];
		$exploded = explode('@',$email);
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
		else if (is_numeric($exploded[0]))
		{
			header('location: registrationForm.php?error=Please give valid email address that contains "username@mail.com"');
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
			
			
			$_SESSION[reguserName]= $userName;
			
			
			
			$sqls = "SELECT * FROM userinfo WHERE userName = '$userName' AND email = '$email'";
			$results = mysqli_query($con, $sqls);
			$user 	= mysqli_fetch_assoc($results);
			
			if (!empty($user)) {
				
				
				
				
					header('location:login2.php?error=Already registered. Login please');
				}
				else if(empty($user)){
					
					$con =mysqli_connect('localhost', 'root', '', 'userinfo');
			
					$sql= "INSERT INTO userinfo (userName,fullName,gender,email,pass) VALUES ('$userName','$fullName','$gender','$email','$pass');";
					$result = mysqli_query($con, $sql);
					header('location:Login.php?error= Registration successfull');
					}
			
			else if(!mysql_query($con, $sqls)) {
					echo "Data can't insert successfully!";
					header('location:registrationForm.php?error=db error');
					}
			else{
					header('location: Publichome.html');
				}
	}
	}
?>
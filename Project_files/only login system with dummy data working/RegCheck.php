<?php
	echo 'wrong0';
	if(isset($_POST['submit']))
	{
		echo 'wrong';
		/*include_once('db.php');*/
		$userName = $_POST['userName'];
		$fullName = $_POST['fullName'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$repass = $_POST['repass'];
		
		if($userName == "" || $fullName == "")
		{
			echo 'wrong1';
			header('location: registrationForm.php?error=user name or full name can not be empty');
		}
		  
		
		 else if ($gender == "")
		{
			echo 'wrong2';
			header('location: registrationForm.php?error=Gender can not be empty');
		}
		 
		
		else if ($email == "")
		{
			echo 'wrong5';
			header('location: registrationForm.php?error=Please give email address');
		}
		else if (filter_var($email, FILTER_VALIDATE_EMAIL)!= true)
		{
			echo 'wrong6';
			header('location: registrationForm.php?error=Please give valid email address that contains "@gmail.com"');
		}
		else  if($pass == "" || $repass == "")
		{
			echo 'wrong7';
			header('location: registrationForm.php?error=PassWord or Confirm PassWord can not be empty');
		}
		else  if($pass != $repass)
		{
			echo 'wrong8';
			header('location: registrationForm.php?error=PassWord did not match please recheck');
		}

		else {
			echo 'wrong9';
				
			$dbhostname = 'localhost';
			$dbusername = 'root';
			$dbpassword = '';
			$dbtablename = 'userinfo';

			$con = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbtablename);
			if (mysqli_connect_error()) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
					echo 'wrong10';
			}
			$sql= "INSERT INTO userinfo(userName,fullName,gender,email,pass) VALUES('$userName','$fullName','$email',$gender,'$email','$password')";
			$result = mysqli_query($con, $sql);
							echo 'wrong11';
			if ($result) {
				echo 'wrong12';
				header('location:Login.php?error=success');
			}else{
				echo 'wrong13';
					echo "Data can't insert successfully!";
					header('location:registrationForm.php?error=error2');
					}
			
			echo 'wrong14';
			header('location: login.php');
	}
	}
?>
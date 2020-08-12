<?php
	session_start();
	if(isset($_POST['submit']))
	{
				
		$userName = $_POST['userName'];
		$fullName = $_POST['fullName'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		
		$matchname= $_SESSION['uname'];
		echo $_SESSION['uname'];
		if(empty($_SESSION['uname'])){
			header('location: updateanyuser.php?error=session did not start');
		}
		else if($userName == "" || $fullName == "")
		{	
			header('location: updateanyuser.php?error=user name or full name can not be empty');
		}	
		 else if ($gender == "")
		{	
			header('location: updateanyuser.php?error=Gender can not be empty');
		}
		else if ($email == "")
		{	
			header('location: updateanyuser.php?error=Please give email address');
		}
		else if (filter_var($email, FILTER_VALIDATE_EMAIL)!= true)
		{
			header('location: updateanyuser.php?error=Please give valid email address that contains "@gmail.com"');
		}
		else  if($pass == "")
		{
			header('location: updateanyuser.php?error=PassWord can not be empty');
		}
		
		else {
			
			$con =mysqli_connect('localhost', 'root', '', 'userinfo');
			
			$firstsql= "SELECT * FROM userinfo WHERE userName = '$matchname'";
			$firstresult = mysqli_query($con, $firstsql);
			$firstuser 	= mysqli_fetch_assoc($firstresult);
			
			$newid = $firstuser['Id'];
			$sql = "UPDATE userinfo SET userName = '$userName', fullName = '$fullName' , gender = '$gender' , email = '$email' , pass = '$pass' WHERE Id = '$newid'";
			$result = mysqli_query($con, $sql);
			
				
			if (!empty($result)) {
				header('location: viewResearcherchk.php');
				
				}
				else{
					header('location:updateanyuser.php?error= users error');
					}
			
		}
	}	

	
?>
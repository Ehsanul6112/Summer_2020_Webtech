<?php
	include('db.php');
	session_start();
	if(isset($_POST['submit'])){

		$uname 		= $_POST['uName'];
		$pass 	= $_POST['pass'];
		
		
		if(empty($uname) || empty($pass)){
			echo "null submission";

		}else{

			$_SESSION['savedname'] = $uname;
			
			
			$sql = "SELECT * FROM test WHERE userName = '$uname' and Pass = '$pass'";

			$result = mysqli_query($con, $sql);
			$user 	= mysqli_fetch_assoc($result);
			
			
			if(!empty($user)){
				
				header('location: home.php');
			}else{
				header('location: login.php?error = Invalid username/password');
				
				
			}
		}

	}else{
		header("location: login.php");
	}

?> 
	
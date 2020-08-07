<?php
	session_start();
	if(isset($_POST['submit'])){

		$uname 		= $_POST['uName'];
		$pass 	= $_POST['pass'];
		
		
		if(empty($uname) || empty($pass)){
			echo "null submission";

		}else{

			$_SESSION['savedname'] = $uname;
			$con =mysqli_connect('localhost', 'root', '', 'userinfo');
			
			$sql = "SELECT * FROM userinfo WHERE userName = '$uname' and Pass = '$pass'";

			$result = mysqli_query($con, $sql);
			$user 	= mysqli_fetch_assoc($result);
			
			
			if(!empty($user)){
				
				header('location: home.php');
			}else{
				echo "Invalid username/password".$user;;
				
			}
		}

	}else{
		header("location: login.php");
	}

?> 
	
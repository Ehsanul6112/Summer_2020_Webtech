<?php

	if(isset($_POST['submit'])){

		$uname 		= $_POST['uName'];
		$pass 	= $_POST['pass'];
		
		echo $pass;
		if(empty($uname) || empty($pass)){
			echo "null submission";

		}else{

			$conn =mysqli_connect('localhost', 'root', '', 'userinfo');
			
			$sql = "select * from userinfo where userName = '".$uname."' and Pass = '".$pass."'";

			$result = mysqli_query($conn, $sql);
			$user 	= mysqli_fetch_assoc($result);

			if(count($user) > 0 ){
				$_SESSION['status']  = "Ok";
				header('location: home.php');
			}else{
				echo "Invalid username/password";
			}
		}

	}else{
		header("location: login.html");
	}

?> 
		}

	}else{
		header("location: login.php");
	}


?>
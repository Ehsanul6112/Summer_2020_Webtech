<?php

	if(isset($_POST['submit'])){

		$uname 		= $_POST['uName'];
		$pass 	= $_POST['pass'];
		
		echo $pass;
		if(empty($uname) || empty($pass)){
			echo "null submission";

		}else{

			$conn =mysqli_connect('localhost', 'root', '', 'userinfo');
			
			$sql1 = "select * from userinfo where pass = '".$pass."' ";
			$result1 = mysqli_query($conn, $sql1);
			
			if($result1!=0){
				
				$sql = "DELETE FROM userinfo WHERE userName = '".$uname."' ";
				$result = mysqli_query($conn, $sql);
				
				header('location: viewResearcherchk.php');
			}else{
				echo "Invalid username/password";
			}
		}

	}else{
		header("location: login.php");
	}

?> 
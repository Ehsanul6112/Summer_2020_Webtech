<?php
	session_start();
	if(isset($_POST['submit'])){

		$uname 		= $_POST['uName'];
		$pass 	= $_POST['pass'];
		
		
		if(empty($uname) || empty($pass)){
			echo "null submission";

		}else if($pass==2020){
			$_SESSION['uname']=$uname;
			$_SESSION['pass']=$pass;
				header("location: updateanyuser.php");
		}else{
			header("location: editUserprofile.php?error=Wrong password");
		}

	}else{
		header("location: editUserprofile.php?error=Something Wrong");
	}

?> 
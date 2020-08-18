<?php 
	session_start();
	require_once('db.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if(empty($username) || empty($password) || empty($email)){
			header('location:register.php?error=null_value');
		}else{

			$conn = dbConnection();
			if(!$conn){
				echo "DB connection error";
			}

			$sql = "insert into users values('', '{$username}','{$email}', '{$password}','admin')";

			if(mysqli_query($conn, $sql)){
				header('location:login.php?success=registration_done');
			}else{
				header('location:register.php?error=db_error');
			}
		}
	}



?>
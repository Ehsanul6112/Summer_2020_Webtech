<?php 
	session_start();
	require_once('dbnew.php');

	if(isset($_POST['submit'])){

		$cname 	= $_POST['cname'];
		$description 	= $_POST['description'];
		$industry 		= $_POST['industry'];
		$website 		= $_POST['website'];
		$logo 		= $_POST['logo'];
		$userid 		= $_POST['userid'];

		if(empty($cname) || empty($description) || empty($industry) || empty($website) || empty($logo) || empty($userid)){
			header('location:register.php?error=null_value');
		}else{

			$conn = dbConnection();
			if(!$conn){
				echo "DB connection error";
			}

			$sql = "insert into company values('', '{$cname}','{$description}', '{$industry}','{$website}','{$logo}','{$userid}')";

			if(mysqli_query($conn, $sql)){
				header('location:allc.php?success=company_add_done');
			}else{
				header('location:createc.php?error=db_error');
			}
		}
	}



?>
<?php

if(isset($_POST['submit']))
	{
				
		$userName = $_POST['userName'];
		$fullName = $_POST['fullName'];
		$email = $_POST['email'];
		$conn =mysqli_connect('localhost', 'root', '', 'userinfo');
			
			$sql = "UPDATE userinfo SET userName = '".$userName."', fullName = '".$fullName."' WHERE pass='2020'";

			$result = mysqli_query($conn, $sql);
			header("location: profile.php");

	}	
?>
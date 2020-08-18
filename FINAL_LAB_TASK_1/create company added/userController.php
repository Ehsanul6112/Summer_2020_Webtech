<?php 
	
	require_once('session_header.php');
	require_once('userService.php');


	//add user
	if(isset($_POST['create'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if(empty($username) || empty($password) || empty($email)){
			header('location:register.php?error=null_value');
		}else{

			$user = [
				'username'=> $username,
				'email'=> $email,
				'password'=> $password
			];

			$status = insert($user);

			if($status){
				header('location:all_users.php?success=done');
			}else{
				header('location:create.php?error=db_error');
			}
		}
	}

	//update user
	if(isset($_POST['edit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$ID 		= $_POST['ID'];

		if(empty($username) || empty($password) || empty($email)){
			header('location:edit.php?id={$id}');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'ID'=> $ID
			];

			$status = update($user);

			if($status){
				header('location:all_users.php?success=done');
			}else{
				header('location:edit.php?id={$id}');
			}
		}
	}
	if(isset($_POST['delete'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$ID 		= $_POST['ID'];

		if(empty($username) || empty($password) || empty($email)){
			header('location:edit.php?id={$id}');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'ID'=> $ID
			];
			

			$status = del($user);

			if($status){
				header('location:all_users.php?success=done');
			}else{
				header('location:edit.php?id={$id}');
			}
		}
	}

?>
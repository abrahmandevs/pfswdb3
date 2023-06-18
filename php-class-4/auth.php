<?php
		
	function userLogin(){
		
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$errors = [];
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $email !='user@gmail.com'){
			$errors['email']= 'Invalid email'.'<br>';
		}
		
		if (empty($password) || $password != 121212){
			$errors['password']=  'Invalid password'.'<br>';
		}
		
		if (count($errors) > 0 ){
			$action=[
				'modal_open'=>'error',
				'status'=>'error',
				'message'=>$errors,
			];
			return $action;
		}else{
			$_SESSION['user'] = 1;
			header('location:dashboard/index.php');
			echo 'login successfull';
		}
	}
	
	function userLogout(){
		session_destroy();
		session_unset();
		header('location:../index.php');
	}
	
	
	
	
	// //$name = $_GET['name'];
	// $name = $_POST['name'];
	// echo $name;
	
	

	




?>
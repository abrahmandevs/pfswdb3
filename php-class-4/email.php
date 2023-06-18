<?php
	/* echo '<pre>';
	echo 'get method';
	print_r($_GET);
	echo '</pre>';
	echo '<pre>';
	echo 'post method';
	print_r($_POST);
	echo '</pre>';
	 */
	
	function contactInfo(){
		
		$name = $_GET['name'];
		$email = $_GET['email'];
		$phone = $_GET['phone'];
		$message = $_GET['message'];
		
		$errors = [];
		
		if (strlen($name) < 2 || strlen($name) > 50 || str_word_count($name) < 1 ){
			$errors['name']= 'Invalid name'.'<br>';
		}
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL) ){
			$errors['email']= 'Invalid email'.'<br>';
		}
		
		if (strlen($phone) != 11 || preg_match('/\D/', $phone ) ){
			$errors['phone']= 'Invalid phone'.'<br>';
		}
		
		if (strlen($message) < 2 || strlen($message) > 5000 ){
			$errors['message']=  'Invalid message'.'<br>';
		}
		
		if (count($errors) > 0 ){
			$action=[
				'status'=>'error',
				'message'=>$errors,
			];
			return $action;
		}else{
			
			$to = 'arr47009@gmail.com';
			$sub = 'from my portfolio web site';
			$message = $message."\n";
			$message .= $name."\n";
			$message .= $phone."\n";
			$sender = $email."\n";
			mail($to, $sub, $message, 'From:'.$sender);
			
			echo 'mail aisa from naznul and maeaz thake';
			
		}
	}
	
	
	
	
	// //$name = $_GET['name'];
	// $name = $_POST['name'];
	// echo $name;
	
	

	




?>
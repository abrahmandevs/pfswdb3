<?php
	session_start();
	/* echo '<pre>';
	echo 'get method';
	print_r($_GET);
	echo '</pre>'; */
	
	if(isset($_POST['user_log_in'])){
		require('auth.php');
		$old = $_POST;
		$userlogin = userLogin();
		
		if (isset($userlogin['status']) && $userlogin['status'] == 'error'){
			$errors= $userlogin['message'];			
			$modal= $userlogin['modal_open'];			
		}
		print_r($userlogin);
	}
	if(isset($_GET['subContact'])){
		$old = $_GET;
		require('email.php');		
		$contact = contactInfo();
		
		if (isset($contact['status']) && $contact['status'] == 'error'){
			$errors= $contact['message'];			
		}
	}
	

?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta Tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no" />
		<!-- Company Title -->
		<title>Tailwind CSS</title>
		<!-- Company Icon -->
		<link rel="icon" href="images/demo/tailwindcss-mark.svg" />

		<!-- Font Awesome -->
		<link rel="stylesheet" href="css/all.css" />

		<!-- Tailwind CSS -->
		<link rel="stylesheet" href="css/tailwind.min.css"/>
		
	</head>
	<body >

		<header>
			<?php include("homeNav.php")?>
		</header>

		<main>
			<?php include("home.php")?>
			<?php include("homeAbout.php")?>
			<?php include("homeServices.php") ?>
			<?php include("homeProject.php") ?>
			<?php include("homeReviews.php") ?>
			<?php include("homeContact.php") ?>			
		</main>

		<footer>
			<?php include("footer.php") ?>
		</footer>

		<script src="tailwind.config.js"></script>
		<script src="js/alpine.min.js"></script>
	</body>
</html>

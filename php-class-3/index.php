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

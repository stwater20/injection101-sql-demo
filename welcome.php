<?php
   include('session.php');
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Injection 101</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
            <h1>Welcome <?php echo  $_SESSION['login_user']; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
			</header>

		<!-- Scripts -->
			<script src="assets/js/main.js"></script>

	</body>
</html>
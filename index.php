<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      // username and password sent from form , more safe 
      //$myusername = mysqli_real_escape_string($db,$_POST['username']);
     // $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      $sql = "SELECT id FROM admin WHERE `username` = '$myusername' and `password` = '$mypassword'";
      $result = mysqli_query($db,$sql);  
      $count = mysqli_num_rows($result);
      $error = "";
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
       
		 echo "<script>alert('Your Login Name or Password is invalid');</script>";
      }
   }
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
				<h1>Injection 101</h1>
				<p>SQL Injections ... everywhere</p>
			
			</header>

		<!-- Form -->
			<form id="form" method="post" action="">
				<input type="text" name="username" id="username" placeholder="Username" />
				<input type="password" name="password" id="password" placeholder="Password" />
				<input type="submit" id="login" value="Login" />
			</form>

		<!-- Footer -->
			<footer id="footer">
				
			</footer>

		<!-- Scripts -->
			<script src="assets/js/main.js"></script>

	</body>
</html>
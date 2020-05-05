<?php

session_start();

if (isset($_SESSION["username"])) {
	$username = $_SESSION["username"];
} else {
	header("Location: /login-php/login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
  <link rel="stylesheet" href="./styles/mystyle.css"> 
  <title>Sign up !</title>
</head>
<body>
	<main class="container">
		<section class="card card--welcome">
		<h1>Welcome, <?= $username ?>!</h1>
			<a href="logout.php">Logout</a>
		</section>
	</main>	
  <div class="original">
    Inspired by <a href="https://w3layouts.com/" target="_blank">w3layouts.com</a>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>


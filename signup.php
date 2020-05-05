<?php

require "connection.php";

if (isset($_POST["register"])) {
	$username = $_POST["username"];
	$sql = "SELECT username FROM users WHERE username=:username";
	$records = $conn->prepare($sql);
	$records->bindParam(":username", $username);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	if (count($results["username"]) > 0) {
					echo $results["username"];
					$style = "message--error";
					$message = "Sorry, an account with that username already exists";
	} else {

		$sql = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";
		$stmt = $conn->prepare($sql);
		$password = password_hash($_POST["password"], PASSWORD_BCRYPT);
		$email = $_POST["email"];	
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":password", $password);
		$stmt->bindParam(":email", $email);

		if ($stmt->execute()) {
			$style = "message--info";
			$message = "Account created successfully";
		} else {
			$style = "message--error";
			$message = "Oops! There was an error";
		}
	}
	
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
  <section class="card">
    <div class="card__header">
      <div class="icon">
        <i class="fas fa-file-signature" aria-hidden="true"></i>
      </div>
      <h1 class="card__title">Register</h1>
    </div>
		<div class="form">
    <?php if ($message != ''): ?>
			<p class="<?= $style; ?>"> <?= $message; ?></p>
    <?php endif; ?>

      <form action="signup.php" method="POST">
        <div class="input">
          <span class="input__icon" aria-hidden="true"><i class="fas fa-user"></i></span>
          <input type="text" name="username" id="username" class="input--text" placeholder=" " required>
          <label class="input__label" for="username">Username</label>
        </div>
        <div class="input">
          <span class="input__icon" aria-hidden="true"><i class="fas fa-lock"></i></span>
          <input type="password" name="password" id="password" class="input--text" placeholder=" " required>
          <label class="input__label" for="password">Password</label>
        </div>
        <div class="input">

          <span class="input__icon" aria-hidden="true"><i class="fas fa-envelope"></i></span>
          <input type="text" name="email" id="email" class="input--text" placeholder=" " required>
          <label class="input__label" for="email">Email</label>
        </div>
        <div class="input">
          <input type="checkbox" name="checkbox" value="marked" class="input--checkbox" id="checkbox">
          <label for="checkbox" class="input__label--checkbox">
            I agree to the <a href="#">Terms of Service</a>
          </label>
        </div>
        <input type="submit" name="register" value="sign up" class="form__submit">
      </form>
    </div>
    
    </div>
    <div class="card__footer">
      <p>
        Already a member?
        <a href="login.php">Login here</a>
      </p>
    </div>

  </section>
	</main>
	<div class="original">
  	Inspired by <a href="https://w3layouts.com/" target="_blank">w3layouts.com</a>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>

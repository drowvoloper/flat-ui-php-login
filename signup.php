<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
	<link rel="stylesheet" href="./styles/style.css"> 
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
      <form action="signup.php" method="POST">
        <div class="input">
          <span class="input__icon" aria-hidden="true"><i class="fas fa-user"></i></span>
          <input type="text" name="username" id="username" class="input--text" placeholder="username">
          <label class="input__label" for="username">Username</label>
        </div>
        <div class="input">
          <span class="input__icon" aria-hidden="true"><i class="fas fa-lock"></i></span>
          <input type="password" name="password" id="password" class="input--text" placeholder="password">
          <label class="input__label" for="password">Password</label>
        </div>
        <div class="input">

          <span class="input__icon" aria-hidden="true"><i class="fas fa-envelope"></i></span>
          <input type="text" name="email" id="email" class="input--text" placeholder="email">
          <label class="input__label" for="email">Email</label>
        </div>
        <div class="input">
          <input type="checkbox" name="checkbox" value="marked" class="input--checkbox" id="checkbox">
          <label for="checkbox" class="input__label--checkbox">
            I agree to the <a href="#">Terms of Service</a>
          </label>
        </div>
      </form>
        <input type="submit" name="register" value="sign up" class="form__submit">
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

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
	<link rel="stylesheet" href="./styles/style.css">    
  <title>Login !</title>
</head>
<body>
	<main class="container">
  <section class="card">
    <div class="card__header">
      <div class="icon" aria-hidden="true">
        <i class="fas fa-user-check"></i>
      </div>
      <h1 class="card__title">Login</h1>
    </div>
    <div class="form">
      <form action="login.php" method="POST">
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
        
        <div class="input input--remember">
          <input type="checkbox" name="checkbox" value="marked" class="input--checkbox" id="checkbox">
          <label for="checkbox" class="input__label--checkbox">
            Remember Me
          </label>
          <a href="#" class="input__link">Forgot password?</a>
        </div>
        <input type="submit" name="register" value="sign in" class="form__submit">
        <span class="break"></span>
      </form>
    </div>
    </div>
    <div class="card__footer">
      <p>Or you can login with one of the following</p>
      <div class="social">
        <a href="#" class="social__link">
          <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.-LlzlCP0Xxs6JtG_R5KLlwAAAA%26pid%3DApi&f=1" class="social__img" alt="facebook logo">
        </a>
        <a href="#" class="social__link">
          <img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Twitter4_colored_svg-512.png" class="social__img" alt="twitter logo">
        </a>
        <a href="#" class="social__link">
          <img src="https://image.flaticon.com/icons/svg/124/124015.svg" class="social__img" alt="youtube icon">
        </a>
      </div>
      <p>
        Don't have an account?
        <a href="signup.php">Sign Up</a>
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

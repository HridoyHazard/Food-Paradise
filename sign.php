<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Sign-in Sign-up Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/sign.css">

</head>

<body>
  <div class="container">
    <div id="signInSignUpBox">
      <div id="overlay">
        <div id="overlayInner">
          <div id="signUp">
            <h1>Welcome Back!</h1>
            <p>To keep connected with us pelase login with your personal info.</p>
            <button onClick='moveSliderRight()'>Sign In</button>
          </div>
          <div id="signIn">
            <h1>Hello, Friend!</h1>
            <p>Enter your personal details and start your journey with us.</p>
            <button onClick='moveSliderLeft()'>Sign Up</button>
          </div>
        </div>
      </div>
      <div id="forms">
        <div id="signInForm" class='shiftRight'>
          <div class="holder">
            <form action="login.php" method="POST">
              <h1>Sign in</h1>
              <a href="#" class='social-media-button'><i class="fa fa-facebook"></i></a>
              <a href="#" class='social-media-button'><i class="fa fa-twitter"></i></a>
              <a href="#" class='social-media-button'><i class="fa fa-linkedin"></i></a>
              <p>or use your account</p>
              <input type="text" placeholder="UserName" name="username" class="form-control" required><br>
              <input type="password" placeholder='Password' name="password" class="form-control" required>
              <a href="#" class="forget">Forgot your password?</a>
              <input type="submit" name="submit" class="btn" value="Login">
            </form>
          </div>
        </div>
        <div id="signUpForm">
          <div class="holder">
            <form action="signup.php" method="POST">
              <h1>Create Account</h1>
              <a href="#" class='social-media-button'><i class="fa fa-facebook"></i></a>
              <a href="#" class='social-media-button'><i class="fa fa-twitter"></i></a>
              <a href="#" class='social-media-button'><i class="fa fa-linkedin"></i></a>
              <p>or use your email for registration</p>
              <input type="text" placeholder="UserName" name="username" class="form-control" required><br>
              <input type="email" placeholder="Email" name="email" class="form-control" required><br>
              <input type="password" placeholder="Password" name="password" class="form-control" required>
              <input type="submit" name="submit" class="btn" value="Signup">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src='js/sign.js'></script>
</body>

</html>
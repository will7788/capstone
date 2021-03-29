<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Portfolio | Register</title>
  <link rel="icon" href="images/icon.png">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Exo|Raleway" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
  <?php include('navbar.php')?>
    <div class="topcontainer">
    <h1>REGISTER</h1>
    </div>
<form class="resumecontainer" action="register.php" method="post">
  <div class="form-group">
    <label for="InputEmail">Email address</label>
    <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="InputPassword1">Password</label>
    <input type="password" name="password1" class="form-control" id="InputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="InputPassword2">Confirm Password</label>
    <input type="password" name="password2" class="form-control" id="InputPassword2" placeholder="Confirm Password">
  </div>
  <br>
  <button type="submit" class="btn btn-dark" name="register">Submit</button>
</form>
  </body>
</html>
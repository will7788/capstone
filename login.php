<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Portfolio | Login</title>
  <link rel="icon" href="images/icon.png">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Exo|Raleway" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
  <?php include('navbar.php')?>
    <div class="topcontainer">
    <h1>Login</h1>
    </div>
<form class="resumecontainer" action="resume.php" method="post">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="InputPassword1">Password</label>
    <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
  </div>
  <br>
  <button type="submit" class="btn btn-dark">Login</button>
  <a href="register.php" class="btn btn-info">Register</a>
</form>
  </body>
</html>
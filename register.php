<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/register_page.css" type="text/css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h2>Register</h2>
    </div>

    <!-- Login Form -->
    <form action="includes/register.inc.php" method="post">
      <input type="text" id="name" class="fadeIn third" name="name" placeholder="full name"> 
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
      <input type="email" id="email" class="fadeIn third" name="email" placeholder="email">
      <input type="text" id="phone" class="fadeIn third" name="phone" placeholder="phone number">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="password" id="repeatpassword" class="fadeIn third" name="repeatpassword" placeholder="repeat password">
      <input type="submit" class="fadeIn fourth" value="Register" name="submit">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="login.php">Have an account?</a>
    </div>

  </div>
</div>
<script type="text/javascript">

</script>
</body>
</html>

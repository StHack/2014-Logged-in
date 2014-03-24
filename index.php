<?php
include('mysql_config.php');

session_start();

if(isset($_SESSION['logged'])){
	header('Location: my_page.php');
	exit();
}

if(isset($_POST['submit'])){
	extract($_POST);
	$mysql = mysql_connect($mysql_host, $mysql_user, $mysql_password);
	$query = 'SELECT id, password FROM users WHERE login="'.mysql_real_escape_string($my_login).'"';
	$result = mysql_db_query('my_website', $query);
	$password = mysql_result($result, 0, 'users.password');
	$id = mysql_result($result, 0, 'users.id');
	if(hash('sha512', hash('sha512','my_salt'.$my_password)) === $password)
		$_SESSION['logged'] = $id;
	mysql_close($mysql);
	header('Location: my_page.php');
        exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Website login page</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="bootstrap/css/style.css" rel="stylesheet">

  </head>
  <body>
	<div class="container">

      <form class="form-signin" role="form" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="form-control" placeholder="Login" name="my_login" required autofocus>
        <input type="password" class="form-control" placeholder="Password" name="my_password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
      </form>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

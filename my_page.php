<?php
session_start();

if(!isset($_SESSION['logged'])){
        header('Location: index.php');
        exit();
}
$flag_file='/my_flag';

$f=fopen($flag_file,'r');
$flag = fread($f,filesize($flag_file));
fclose($f);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Website page</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="bootstrap/css/my_style.css" rel="stylesheet">

  </head>
  <body>
<span id="user_id" style="display:none"><?php echo $_SESSION['logged'];?></span>
<div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">


          <div class="inner cover">
            <h1 class="cover-heading">The flag</h1>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default"><?php echo $flag;?></a>
            </p>
	    <p class="lead">
	      <a href="#" class="btn btn-lg btn-default" id="logout">Logout</a>
            </p>
          </div>

          </div>

        </div>

      </div>

    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/my_script.js"></script>
</body>
</html>


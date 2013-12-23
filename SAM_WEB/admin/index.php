<?php
session_start();
error_reporting(0);
require 'functions/varfilter.php';

if(!empty($_SESSION['username']))
{
	header('location:home.php');
}


require 'condb.php';


if (isset($_POST['login']))
{
	$name=$_POST['username'];
	$pass=$_POST['psswd'];
	if (empty($name) && empty($pass))
	{
		$echo = "Please fill username and password";
	}
	else
	{
		$username=unhack($name);
		$password=unhack($pass);
		$finddoc=mysql_query("select username,password from admin where username='$username'  AND password='$password' ")or die(mysql_error());
		if (mysql_num_rows($finddoc)==1)
		{

			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			header('location:home.php');
		}
		else
		{

			$echo= "Wrong username and password";
		}
	}

}





?>
<!doctype html>

<head>

<!-- Basics -->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Login</title>

<!-- CSS -->

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/styles.css">

</head>

<!-- Main HTML -->

<body>

<!-- Begin Page Content -->

<div id="container">

<form method="post"><label for="name">Username:</label> <input
	type="name" name="username"> <label for="username">Password:</label> <!--		<p><a href="#">Forgot your password?</a>-->

<input type="password" name="psswd">

<div id="lower"><?php echo    $echo;?><br />
<input type="checkbox"><label class="check" for="checkbox">Keep me
logged in</label> <input type="submit" name="login" value="Login"></div>

</form>

</div>


<!-- End Page Content -->

</body>

</html>
<!--<a class="twitter-timeline" href="https://twitter.com/sam_codex8" data-widget-id="393339697767780352">Tweets by @sam_codex8</a>-->
<!--<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>-->


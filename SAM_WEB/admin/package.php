<?php
require_once 'include_handler.php';

require 'condb.php';
require 'functions/varfilter.php';
$msg=unhack($_REQUEST['msg']);
if(!empty($msg))
{
	echo $msg;
}
//INSERT DATA
if (isset($_POST['insert']))
{
	$pn=unhack($_POST['pn']);
	$pd=unhack($_POST['pd']);
	if (!empty($pn) && !empty($pd))
	{
		mysql_query("insert into packages (`package_id`,`package_name`,`package_details`) values('','$pn','$pd')")or die(mysql_error());
		header('location:package.php?msg=data inserted');
	}
	else
	{
		echo 'Fill all fields';
	}
}
?>
<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Packages</title>
</head>
<body>
<a href="package_list.php?page=active">Active package's List </a>
||
<a href="package_list.php?page=inactive"> Inactive package's list</a>

<form method="post">
<p>Package name <input type="text" name="pn"></p>
Package details<textarea name="pd" rows="" cols=""></textarea> <!--Package is active <input type="checkbox" name="chk">-->
<input type="submit" name="insert" value="Create Package"></form>
</body>
</html>

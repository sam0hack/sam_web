<?php
require_once 'admin/functions/varfilter.php';
require_once 'access.php';
if (isset($_POST['button']))
{
	$name=unhack($_POST['name']);
	$phone=unhack($_POST['phone']);
	$email=unhack($_POST['email']);
	$date=unhack($_POST['date']);
	$gender=unhack($_POST['gender']);
	$h_name=unhack($_POST['h_name']);
	$location=unhack($_POST['location']);
	$time=unhack($_POST['time']);
	$test=unhack($_POST['test']);
	$desc=unhack($_POST['desc']);

	if (!empty($name) && !empty($h_name)) {
		mysql_query("INSERT INTO `apo` (`id`, `name`, `phone`, `location`, `email`, `hospital_name`,
`hospital_time`, `apo_date`, `problem_description`, `test`, `gender`) 
VALUES (NULL, '$name', '$phone', '$location', '$email', '$h_name', '$time', '$date', '$desc', '$test', '$gender')");		
		$msg="Thank You !";
		header('location:apo.php?msg='.$msg.' ');

	}
	else
	{
		$msg="Please fill details";
		header('location:apo.php?msg='.$msg.' ');

	}
}
?>
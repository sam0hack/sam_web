<?php
ob_start();
session_start();
error_reporting(0);
if(!empty($_SESSION['username']))
{
	require_once 'menu_bar.php';
}
else
{
	header('location:index.php');
}
?>
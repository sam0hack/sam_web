<?php
class creator {

	private    $new_host;
	private  $new_user;
	private  $new_pass;
	private $new_db;

	function db_creator($host,$user,$pass,$db) {
		mysql_connect($host,$user,$pass);
		mysql_query("create database $db ");
		header('location:./sql.php');
	}
	function admin($username,$password) {
		if (!empty($username) && !empty($password)) {

			require 'db_conx.php';
			mysql_query("INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES (NULL, '$username', '', '$password');")or die(mysql_error());
			header('location:./thank_you.php');
		}
		else
		{
			echo "Username and Password is required";
		}
	}


	function db_config_creator($host,$user,$pass,$db) {

		$new_host=base64_encode($host);
		$new_user=base64_encode($user);
		$new_pass=base64_encode($pass);
		$new_db=base64_encode($db);

		//For installer
		$fo=fopen("./config/host.txt","w");
		fwrite($fo,$new_host);

		$fo=fopen("./config/user.txt","w");
		fwrite($fo,$new_user);

		$fo=fopen("./config/pass.txt","w");
		fwrite($fo,$new_pass);

		$fo=fopen("./config/db.txt","w");
		fwrite($fo,$new_db);

		//For website
		$fo=fopen("../admin/config/host.txt","w");
		fwrite($fo,$new_host);

		$fo=fopen("../admin/config/user.txt","w");
		fwrite($fo,$new_user);

		$fo=fopen("../admin/config/pass.txt","w");
		fwrite($fo,$new_pass);

		$fo=fopen("../admin/config/db.txt","w");
		fwrite($fo,$new_db);
	}

	//function db_decode($host,$user,$pass,$db) {
	//	$new_host=base64_decode($host);
	//    $new_user=base64_decode($user);
	//	$new_pass=base64_decode($pass);
	//    $new_db=base64_decode($db);
	//}

}

?>
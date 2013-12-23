<?php
require_once 'admin/functions/varfilter.php';
require_once 'access.php';
require_once 'functions/passwordgen.php';
require_once 'functions/send_email.php';
//require '../functions/big_query.php';
if (isset($_POST['ans_sub'])) {
	$id=unhack($_POST['id']);
	$ans=unhack($_POST['give_ans']);
                  $email=  unhack($_POST['email']);
	date_default_timezone_set ("Asia/Kolkata");
		
	$time=date("H:i:s");
	$date=date("y-m-d");
	$timestamp="$date $time";

	if (!empty($ans))
	{

		mysql_query("insert into answers (`answer_id`,`answer`,`user`,`question_id`,`last_reply`,`verify`) values('NULL','$ans','$email','$id','$timestamp','0') ");
		
                
                $code=  Generator();
                send_email($email, $code);
                mysql_query("insert into code (`id`,`email`,`code`) values('NULL','$email','$code')");
                

                
                                    $msg="x";
		header('location:ask.php?msg='.$msg.'');
                                    //header('location:ask.php?msg='.$result.' ');


	}

	else
	{
		$msg="Can't send empty answer";
		header('location:ask.php?msg='.$msg.' ');
	}

}

?>
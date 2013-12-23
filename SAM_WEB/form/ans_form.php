<?php
require_once '../admin/functions/varfilter.php';
require_once 'access.php';
//require '../functions/big_query.php';
if (isset($_POST['ans_sub'])) {
	$id=unhack($_POST['id']);
	$ans=unhack($_POST['give_ans']);

	date_default_timezone_set ("Asia/Kolkata");
		
	$time=date("H:i:s");
	$date=date("y-m-d");
	$timestamp="$date $time";

	if (!empty($ans))
	{

		mysql_query("insert into answers (`answer_id`,`answer`,`question_id`,`last_reply`) values('NULL','$ans','$id','$timestamp') ");
		$result="Thank you for the replay";
		header('location:../ask.php?msg='.$result.' ');


	}

	else
	{
		$msg="Can't send empty answer";
		header('location:../ask.php?msg='.$msg.' ');
	}

}

?>
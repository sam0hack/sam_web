<?php
require_once 'include_handler.php';
require_once 'condb.php';
require_once 'functions/varfilter.php';
//FOR SUBMIT QUESTIONS
if (isset($_POST['submit']))
{

	$qt=unhack($_POST['qt']);
	$ques=unhack($_POST['ques']);
	if (!empty($qt) && !empty($ques))
	{
		mysql_query("insert into ask_me (`question_id`,`question`,`user_email`,`question_title`,`city`)
                                      values('','$ques','','$qt','')")or die(mysql_error());		

		header('location:ask.php?msg=Your question has been sent');

	}
	else
	{
		header('location:ask.php?msg=Please fill question title and question ');

	}
}

//FOR SUBMIT ANSWERS
if (isset($_POST['sent_ans']))
{
	$id=$_POST['id'];
	$ans=unhack($_POST['ans']);
	$user=unhack($_POST['user']);
	if (!empty($ans))
	{
		date_default_timezone_set ("Asia/Kolkata");
			
		$time=date("H:i:s");
		$date=date("y-m-d");
		$timestamp="$date $time";

		mysql_query("insert into answers (`answer_id`,`answer`,`user`,`question_id`,`last_reply`) values('','$ans','$user','$id','$timestamp') ")or die(mysql_error());

		header('location:ask.php?msg=Your answer has been sent');


	}
	else
	{
		header('location:ask.php?msg=Please fill answer');

	}

}


?>
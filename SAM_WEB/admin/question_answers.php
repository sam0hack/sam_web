<?php
require_once 'include_handler.php';
require_once 'condb.php';
require_once 'functions/varfilter.php';
$user=$_SESSION['username'];
//FOR SUBMIT QUESTIONS
if (isset($_POST['submit']))
{

	$qt=unhack($_POST['qt']);
	$ques=unhack($_POST['ques']);
	if (!empty($qt) && !empty($ques))
	{
		mysql_query("insert into ask_me (`question_id`,`question`,`user_email`,`question_title`,`city`,`verify`)
                                      values('','$ques','$user','$qt','','1')")or die(mysql_error());		

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
	//$user=unhack($_POST['user']);
	if (!empty($ans))
	{
		date_default_timezone_set ("Asia/Kolkata");
			
		$time=date("H:i:s");
		$date=date("y-m-d");
		$timestamp="$date $time";

		mysql_query("insert into answers (`answer_id`,`answer`,`user`,`question_id`,`last_reply`,`verify`) values('','$ans','$user','$id','$timestamp','1') ")or die(mysql_error());

		header('location:ask.php?msg=Your answer has been sent');


	}
	else
	{
		header('location:ask.php?msg=Please fill answer');

	}

}
//For Delete a question #if a question is delete than delete the whole answer's related to this question using question_id 
if(isset($_POST['del_que']))
{
$id=  unhack($_POST['dque']);
mysql_query("delete from ask_me where question_id='$id' ")or die(mysql_error());
mysql_query("delete from answers where question_id='$id' ")or die(mysql_error());
header('location:ask.php?msg=Question has been deleted');
}

//For delete a ans
$v=  unhack($_REQUEST['v*1*1*1*1*1*1']);
if(!empty($v))
{

echo $v;
mysql_query("delete from answers where answer_id='$v' ")or die(mysql_error());
header('location:ask.php?msg=Answer has been deleted');

}

?>
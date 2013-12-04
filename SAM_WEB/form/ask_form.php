<?php
require_once '../admin/functions/varfilter.php';
require_once 'access.php';
if (isset($_POST['send'])) {
	$subject=unhack($_POST['subject']);
	$que=unhack($_POST['que']);
	if (!empty($subject) && !empty($que))
	{
		mysql_query("insert into ask_me (`question_id`,`question`,`user_email`,`question_title`,`city`)
                                      values('','$que','','$subject','')")or die(mysql_error());		

		$msg="Your question has been submitted";
		header('location:../ask.php?msg='.$msg.'');
	}
	else
	{
		$msg="Please insert a question";
		header('location:../ask.php?msg='.$msg.'');

	}
}
?>
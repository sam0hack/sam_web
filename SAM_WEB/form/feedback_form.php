<?php
require_once '../admin/functions/varfilter.php';
require_once 'access.php';
if (isset($_POST['fback']))
{
	$name=unhack($_POST['name']);
	$email=is_email($_POST['email']);
	$phone=unhack($_POST['phone']);
	$feedback=unhack($_POST['feedback']);
	if (!empty($name) && !empty($feedback))
	{
		if ($email!=FALSE)
		{

			if (is_numeric($phone) && strlen($phone)>=10 && strlen($phone)<=12)
			{
				mysql_query("insert into feedback values('','','$name','$email','$phone','$feedback') ");
				$msg="Thank You for the feedback";
				header('location:../feedback.php?msg='.$msg.' ');
			}
			else
			{
				$msg="Phone number is not valid";

				header('location:../feedback.php?msg='.$msg.' ');

			}
		}
		else
		{
			$msg="This is not a valid email address";
			header('location:../feedback.php?msg='.$msg.' ');

		}
	}
	else
	{
		$msg="Please fill all fields";
		header('location:../feedback.php?msg='.$msg.' ');

	}

}

?>
<?php
require_once 'admin/functions/varfilter.php';
require_once 'access.php';
require_once 'functions/passwordgen.php';
require_once 'functions/send_email.php';
if (isset($_POST['send'])) {
	$subject=unhack($_POST['subject']);
	$que=unhack($_POST['que']);
                  $place=unhack($_POST['place']);
                  $email=unhack($_POST['email']);
	if (!empty($subject) and !empty($que) and !empty($place) and !empty($email))
	{
		mysql_query("insert into ask_me (`question_id`,`question`,`user_email`,`question_title`,`city`,`verify` )
                                      values('','$que','$email','$subject','$place','0')")or die(mysql_error());		

                $code=  Generator();
                send_email($email, $code);
                mysql_query("insert into code (`id`,`email`,`code`) values('NULL','$email','$code')");
                

                                    $msg="x";
		header('location:ask.php?msg='.$msg.'');
	}
	else
	{
		$msg="all fields are required";
		header('location:ask.php?msg='.$msg.'');

	}
}
if(isset($_POST['subcode']))
{
    $code=  unhack($_POST['code']);
    $qwerty=  mysql_query("select * from code where code='$code' ");
    
    //BloackB
    if(!empty($code))
    {
    
    //BlockA
    if(mysql_num_rows($qwerty)==1)
    {
        $ftch_obj=  mysql_fetch_object($qwerty);
        $email=$ftch_obj->email;
        mysql_query("update ask_me set verify='1' where user_email='$email' ");
        mysql_query("update answers set verify='1' where user='$email' ");
        mysql_query("delete from code where email='$email' ");
        
        
        
$msg="Verify successful";

header('location:ask.php?msg='.$msg.'&v='.$v.'');

        
    }
    else
    {
      
        $v="Incorrect Code";
$msg="x";

header('location:ask.php?msg='.$msg.'&v='.$v.'');

                }
//BlockA
    }
    else
    {
    $v="Please enter your verification code";   
    $msg="x";

header('location:ask.php?msg='.$msg.'&v='.$v.'');

    }
        //BlockB        
    }
?>
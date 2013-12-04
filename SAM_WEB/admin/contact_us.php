<?php
require_once 'include_handler.php';
require 'condb.php';
require_once 'functions/image_handler.php';
if (isset($_POST['sub']))
{
	$c_name=unhack($_POST['c_name']);
	$phone=unhack($_POST['phone']);
	$email=unhack($_POST['email']);
	$address=unhack($_POST['address']);
	mysql_query("update contact_us set hos_name='$c_name', contact_num='$phone',contact_email='$email',contact_feed_back='$address'  ");
	header('location:contact_us.php');
}




$sql=mysql_query("select * from contact_us");
$con=mysql_fetch_array($sql);
?>
<form method="post">
<p>Clinic name<input type="text" value="<?php echo $con['hos_name']; ?>"
	name="c_name"> For appointment call<input type="text"
	value="<?php echo $con['contact_num']; ?>" name="phone"> Email<input
	type="text" value="<?php echo $con['contact_email']; ?>" name="email">
</p>

Address<textarea name="address"><?php echo $con['contact_feed_back']; ?></textarea>
<input type="submit" name="sub" value="Insert"></form>

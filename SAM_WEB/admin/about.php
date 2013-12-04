<?php
require_once 'include_handler.php';
require 'condb.php';
require_once 'functions/image_handler.php';
if (isset($_POST['sub'])) {
	$about=unhack($_POST['about']);
	mysql_query("update about set about='$about' where id=1 ");
	header('location:about.php');
}
$sql=mysql_query("select about from about ")or die(mysql_error());
$ab=mysql_fetch_array($sql);
?>
<form method="post">
<center>
<p>How to reach us</p>
</center>
<textarea name="about"
	style="margin: 2px; height: 348px; width: 1224px;"><?php echo $ab[0]; ?></textarea>
<input type="submit" name="sub" value="Insert"></form>

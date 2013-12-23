<?php
require_once 'include_handler.php';
require 'condb.php';
require_once 'functions/image_handler.php';
if (isset($_POST['sub']))
{
	$h_name=unhack($_POST['h_name']);
	$location=unhack($_POST['location']);
	$time=unhack($_POST['time']);
	if(!empty($h_name) && !empty($time)){
		mysql_query("insert into apo_master (`id`,`h_name`,`location`,`time`) value('NULL','$h_name','$location','$time') ");
		$msg="Sucessful";
	}
	else
	{
		$msg="Please fill hospital or Clinic name AND Time";
	}
}
if (isset($_POST['update']))
{
	$id=unhack($_POST['id']);
	$h_name=unhack($_POST['h_name']);
	$location=unhack($_POST['location']);
	$time=unhack($_POST['time']);
	mysql_query("update apo_master set h_name='$h_name',location='$location',time='$time' where id='$id' ");
}
if (isset($_POST['del']))
{
	$id=unhack($_POST['id']);
	mysql_query("delete from apo_master where id='$id' ");
	header('location:apo_master.php')	;
}
if (!empty($msg)) {
	echo $msg;
}
?>

<form method="post">
<h2>Insert your clinics</h2>
<p>Hospital/Clinic name<input type="text" name="h_name"></p>
<p>Location<input type="text" name="location"></p>
<p>time<input type="text" name="time"></p>
<input type="submit" name="sub" value="submit"></form>
<hr>
<!--  -->
<h2>Edit Your Details</h2>
<?php
$sql=mysql_query("select * from apo_master");
while ($apo=mysql_fetch_array($sql))
{
	?>
<form method="post"><input type="hidden" name="id"
	value="<?php echo $apo['id']; ?>">
<p>Hospital/Clinic name<input type="text" name="h_name"
	value="<?php echo $apo['h_name']; ?> "></p>
<p>Location<input type="text" name="location"
	value="<?php echo $apo['location']; ?>"></p>
<p>time<input type="text" name="time"
	value="<?php echo $apo['time']; ?>"></p>
<input type="submit" name="update" value="update"> <input type="submit"
	name="del" value="Delete"></form>
<?php } ?>
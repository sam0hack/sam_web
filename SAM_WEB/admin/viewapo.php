<?php
require_once 'include_handler.php';
require 'condb.php';
$msg=$_REQUEST['msg'];
if(!empty($msg))
{
	echo $msg;
}
$query=mysql_query("select * from apo ORDER BY id DESC ")or die(mysql_error());
while ($data=mysql_fetch_array($query))
{
	date_default_timezone_get('asia/kolkata');
	$date=date('Y-m-d');
	//echo "Today " .$date;

	$query=mysql_query("select * from apo WHERE apo_date='$date'  ")or die(mysql_error());
	while ($data=mysql_fetch_array($query))
	{
		?>
<center>
<h2><font color="red">Today Appointments</font></h2>
</center>
<br />
<form method="post">
<p><input type="hidden" name="check" value="<?php echo $data[0]; ?>">
Name<input type=text "  value="<?php echo $data[1]; ?>"> Phone<input
	type=text "  value="<?php echo $data[2]; ?>"> Location<input type=text
	"  value="<?php echo $data[3]; ?>"> Email<input type=text
	"  value="<?php echo $data[4]; ?>"> Hospital Name<input type=text
	"  value="<?php echo $data[5]; ?>"> Hospital Time<input type=text
	"  value="<?php echo $data[6]; ?>"> Apo Date<input type=text
	"  value="<?php echo $data[7]; ?>"> Describe Problem<textarea><?php echo $data[8]; ?></textarea>
Test<input type=text "  value="<?php echo $data[9]; ?>"> 
 <input type="submit"
	name="del" value="Delete"></p>
</form>
<hr />
<hr />


		<?php

	}

	$query=mysql_query("select * from apo where apo_date !='$date'  ORDER BY id DESC ")or die(mysql_error());
	while ($data=mysql_fetch_array($query))
	{
		?>
<center>
<h2><font color="green">Appointments</font></h2>
</center>

<br />
<form method="post">
<p><input type="hidden" name="check" value="<?php echo $data[0]; ?>">
Name<input type=text "  value="<?php echo $data[1]; ?>"> Phone<input
	type=text "  value="<?php echo $data[2]; ?>"> Location<input type=text
	"  value="<?php echo $data[3]; ?>"> Email<input type=text
	"  value="<?php echo $data[4]; ?>"> Hospital Name<input type=text
	"  value="<?php echo $data[5]; ?>"> Hospital Time<input type=text
	"  value="<?php echo $data[6]; ?>"> Apo Date<input type=text
	"  value="<?php echo $data[7]; ?>"> Describe Problem<textarea><?php echo $data[8]; ?></textarea>
Test<input type=text "  value="<?php echo $data[9]; ?>">  <input type="submit"
	name="del" value="Delete"></p>
</form>
<hr />
<hr />

		<?php
	}
}


if (isset($_POST['del']))
{
	$id=$_POST['check'];
	mysql_query("delete from apo where id='$id'")or die(mysql_error());
	header('location:viewapo.php?msg=deleted');
}
?>
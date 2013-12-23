<?php
require_once 'include_handler.php';
require_once 'condb.php';
require_once 'functions/varfilter.php';
if ($_REQUEST['msg'])
{
	$msg=$_REQUEST['msg'];
	echo $msg;
}
if (isset($_POST['insert']))
{

	$topic=unhack($_POST['newtopic']);

	if (!empty($topic)){
		mysql_query("insert into event_topic values('NULL','$topic')")or die(mysql_error());
		header('location:events_topic.php?msg=Data Inserted!');

	}
	else
	{
		echo 'Cant Insert Null Value';
	}
}
?>
<!DOCTYPE form PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<h3>Event Topic</h3>
<form method="post">
<p>Insert New Topic <input type="text" name="newtopic"><input
	type="submit" name="insert" value="Insert"></p>
</form>
<hr />
<p>Edit existing Event topic</p>
<?php
$service=mysql_query("select * from event_topic ");
while ($stopic=mysql_fetch_array($service))
{
	?>
<form method="post"><input type="hidden" name="id"
	value="<?php echo $stopic['event_id'];?>">
<p><input type="text" value="<?php echo $stopic['event_topic_name'];?>"
	name="newtopic"><input type="submit" name="edit" value="Edit"><input
	type="submit" name="del" value="Del"></p>
</form>
	<?php }
	if (isset($_POST['edit']))
	{
		$id=unhack($_POST['id']);
		$topic=unhack($_POST['newtopic']);
		{
			mysql_query("update event_topic set  event_topic_name='$topic' where event_id='$id'  ")or die(mysql_error());
			header('location:events_topic.php?msg=Data Updated!');
		}
	}
	if (isset($_POST['del']))
	{
		$id=unhack($_POST['id']);

		mysql_query("delete from event_topic where  event_id='$id' ")or die(mysql_error());
		header('location:events_topic.php?msg=Topic has been deleted!');

	}
	?>
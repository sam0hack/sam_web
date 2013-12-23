<?php
require_once 'include_handler.php';

require 'condb.php';
//require_once 'functions/varfilter.php';
require_once 'functions/image_handler.php';

$msg=unhack($_REQUEST['mgs']);
echo $msg;
?>

<form enctype="multipart/form-data" method="post">
<p>Select main Category <select name="maincat">
	<option value="nul">Select Category</option>
	<?php
	$mc=mysql_query("select event_id,event_topic_name from event_topic");

	while ($smc=mysql_fetch_array($mc))

	{


		echo '<option>'.$smc[1].'</option>';

	}

	?>
</select> Event Heading<input type="text" name="type"> Event Details<textarea
	name="event_details" rows="" cols=""
	style="margin: 2px; width: 307px; height: 46px;"></textarea> <input
	type="file" name="myfile"> <input type="submit" name="insert"
	value="Insert"></p>
</form>
	<?php
	if (isset($_POST['insert']))
	{

		$maincat=unhack($_POST['maincat']);
		$event_type=unhack($_POST['type']);
		$event_details=unhack($_POST['event_details']);

		//Properties of the uploaded file
		$name=$_FILES['myfile']['name'];
		$type=$_FILES['myfile']['type'];
		$size=$_FILES['myfile']['size'];
		$tmp_name=$_FILES['myfile']['tmp_name'];
		$error=$_FILES['myfile']['error'];
		$location="images";//SET Location for image

		$getimage=img_uploader($name, $type, $size, $tmp_name, $error, $location);

		if (!empty($event_type) && !empty($maincat)){
			mysql_query("insert into events (`event_id`,`event_type`,`event_heading`,`event_details`,`event_image`) values('','$maincat','$event_type','$event_details','$getimage')")or die(mysql_error());
		}
		else
		{
			echo 'Can t insert null values' ;
		}
	}
	?>
<hr />
	<?php
	$query=mysql_query("select * from events");
	while ($data=mysql_fetch_array($query))
	{
		?>
<form enctype="multipart/form-data" method="post">
<p><input type="hidden" name="id" value="<?php echo $data[0];?>"> Main
Category<input type="text" name="mc" value="<?php echo $data[1];?>">
Event Heading <input type="text" value="<?php echo $data[2];?>"
	name="topic"> Event Details<textarea name="service_details" rows=""
	cols="" style="margin: 2px; width: 307px; height: 46px;"><?php echo $data[3];?></textarea>

<input type="submit" name="update" value="Update"> <input type="submit"
	name="delete" value="Del"></p>
</form>

		<?php }
		if (isset($_POST['update']))
		{
			$id=unhack($_POST['id']);
			$mc=unhack($_POST['mc']);
			$topic=unhack($_POST['topic']);
			$sd=unhack($_POST['service_details']);
			mysql_query("update events set event_type='$mc',event_heading='$topic',event_details='$sd' where event_id='$id' ");
			header('location:add_event.php?mgs=Updated');

		}

		if (isset($_POST['delete']))
		{
			$id=unhack($_POST['id']);
			mysql_query("delete from events where event_id='$id'");
			header('location:add_event.php?mgs=Deleted');
}
?>

<?php
require_once 'include_handler.php';

require 'condb.php';
require_once 'functions/varfilter.php';
$msg=unhack($_REQUEST['mgs']);
echo $msg;
?>

<form method="post">
<p>Select main Category <select name="maincat">
	<option value="nul">Select Category</option>
	<?php
	$mc=mysql_query("select service_topic,service_topic_id from service_topic");
	//$stid=mysql_fetch_array($mc);

	while ($smc=mysql_fetch_array($mc))

	{
		//echo '<input type="text" name="id" value="'.$smc[1].'">';


		echo '<option>'.$smc[0].'</option>';

	}

	?>
</select> Service Topic name<input type="text" name="topic"> Service
Details<textarea name="service_details" rows="" cols=""
	style="margin: 2px; width: 307px; height: 46px;"></textarea> <input
	type="submit" name="insert" value="Insert"></p>
</form>
	<?php
	if (isset($_POST['insert']))
	{
		//$id=unhack($_POST['id']);
		$maincat=unhack($_POST['maincat']);
		$topic=unhack($_POST['topic']);
		$service_details=unhack($_POST['service_details']);
		$getid=mysql_query("select service_topic_id from service_topic where service_topic='$maincat' ");
		$id=mysql_fetch_array($getid);
		$mid=$id[0];

		mysql_query("insert into services  values('$mid', '$maincat', '$topic','', '$service_details')")or die(mysql_error());
		header('location:add_service.php?mgs=Inserted');


	}
	?>
<hr />
	<?php
	$query=mysql_query("select * from services");
	while ($data=mysql_fetch_array($query))
	{
		?>
<form method="post">
<p><input type="hidden" name="id" value="<?php echo $data[0];?>"> Main
Category<input type="text" name="mc" value="<?php echo $data[1];?>">
Service Topic name<input type="text" value="<?php echo $data[2];?>"
	name="topic"> Service Details<textarea name="service_details" rows=""
	cols="" style="margin: 2px; width: 307px; height: 46px;"><?php echo $data[4];?></textarea>
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
			mysql_query("update services set main_topic='$mc',service_topic='$topic',service_details='$sd' where service_id='$id' ");
			header('location:add_service.php?mgs=Updated');

		}

		if (isset($_POST['delete']))
		{
			$id=unhack($_POST['id']);
			mysql_query("delete from services where service_id='$id'");
			header('location:add_service.php?mgs=Deleted');
}
?>

<?php
require_once 'include_handler.php';
require_once 'condb.php';
require_once 'functions/varfilter.php';
if (isset($_POST['create']))
{
	$gname=unhack($_POST['create_gallery']);
	if (!empty($gname))
	{
		$result=mysql_query("select gallery_tipic_id from gallery_topic where gallery_topic='$gname' ")or die(mysql_error());
		if (mysql_numrows($result)==1)
		{
			echo "Gallery already exists";
		}
		else {
			mysql_query("insert into gallery_topic values('','$gname')")or die(mysql_error());
			header('location:create_gallery.php?msg=Gallery has been created');
		}
	}
	else
	{
		echo 'Enter gallery name';
	}
}
$msg=unhack($_REQUEST['msg']);

echo $msg;

?>
<br>
<h2>Create Gallery</h2>
<form method="post"><input type="text" name="create_gallery"
	placeholder="Create Gallery" /> <input type="submit" name="create"
	value="Create Gallery"></form>
<br>
<h2>Select a Gallery to add new images</h2>

<?php
$query=mysql_query("select * from gallery_topic ");
while ($gallery=mysql_fetch_array($query)) {
	echo '<a href="add_image.php?id='.$gallery[0].' ">'.$gallery[1].'</a><br>';
}


?>
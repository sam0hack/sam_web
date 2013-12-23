<?php
require_once 'include_handler.php';

require 'condb.php';
//require_once 'functions/varfilter.php';
require_once 'functions/image_handler.php';
if (isset($_POST['theme'])) {

	$name=$_FILES['myfile']['name'];
	$type=$_FILES['myfile']['type'];
	$size=$_FILES['myfile']['size'];
	$tmp_name=$_FILES['myfile']['tmp_name'];
	$error=$_FILES['myfile']['error'];
	$destination="../images";
	$size1=imgsize($size);//Check Image SIZE
	$name1=isimg($name);//Check Valid Image File
	$rename="back.jpg";

	if ($error>0)
	{
		$msg="You have an error";
	}
	if ($size1==FALSE)
	{
		$msg="Your Image is Greater then 5 MB";
	}
	if ($name1==FALSE)
	{
		$msg="This is not valid image";
	}

	elseif(!file_exists($destination))
	{
		$msg="Destination directory is not exists";
	}
	else
	{

		move_uploaded_file($tmp_name, "$destination/".$rename);

		$msg="New Theme uploaded";

	}


}
?>
<?php if (!empty($msg))
{
	echo $msg;
}

?>
<form enctype="multipart/form-data" method="post">

<P>Select a theme Image<input type="file" name="myfile"> <input
	type="submit" name="theme"></P>
</form>
<a href="">Get more themes</a>

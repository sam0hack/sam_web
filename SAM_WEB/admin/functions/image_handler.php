<?php
require 'varfilter.php';

/**
 * @name img_uploader()
 * @author sameer join me on www.facebook.com/sam0hack , www.github.com/codex8
 * @version 1.0
 * This is a Image uploader function
 * @param image name $name
 * @param image type $type
 * @param image size $size
 * @param temp name $tmp_name
 * @param error $error
 * @param Destination of image $destination
 * @return $msg string
 */
function img_uploader($name,$type,$size,$tmp_name,$error,$destination){
	$size1=imgsize($size);//Check Image SIZE
	$name1=isimg($name);//Check Valid Image File
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

		move_uploaded_file($tmp_name, "$destination/".$name);
		$full_destination="$destination/".$name;
		//$msg="Your File Successfuly uploaded";

	}
	if (!empty($msg))
	{
		return $msg;
	}
	else
	{
		return $full_destination;
	}

}
?>
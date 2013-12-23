<?php
require_once 'include_handler.php';
require_once 'condb.php';
//require_once 'functions/varfilter.php';
require_once 'functions/image_handler.php';
if (empty($_REQUEST['id']))
{
	header('location:create_gallery.php');
}
$id=unhack($_REQUEST['id']);
$get=mysql_query("select gallery_tipic_id,gallery_topic from gallery_topic where gallery_tipic_id='$id' ");
$data=mysql_fetch_array($get);
$gname=$data[1];
if (isset($_POST['insert']))
{
	$image_name=unhack($_POST['image_name']);
	$description=unhack($_POST['description']);
	//Properties of the uploaded file
	$name=$_FILES['myfile']['name'];
	$type=$_FILES['myfile']['type'];
	$size=$_FILES['myfile']['size'];
	$tmp_name=$_FILES['myfile']['tmp_name'];
	$error=$_FILES['myfile']['error'];
	$location="images";//SET Location for image

	$getimage=img_uploader($name, $type, $size, $tmp_name, $error, $location);

	if (!empty($image_name)){
		mysql_query("insert into gallery_image (`id`,`image_id`,`image`,`image_name`,`gallery_topic`,`image_details`)
values('','$id','$getimage','$image_name','$gname','$description')")or die(mysql_error());
		echo 'Image uploaded';

	}
	else
	{
		echo 'Can t insert null values' ;
	}


}
?>
<h1>Gallery name <em><?php echo $gname; ?></em>
<p><a href="create_gallery.php">Create New Gallery</a></p>
</h1>

<form enctype="multipart/form-data" method="post">Image name <input
	type="text" name="image_name"> Add image description <textarea rows=""
	cols="" name="description"></textarea> Add Image<input type="file"
	name="myfile"> <input type="submit" name="insert" value="Insert"></form>
<hr>
<center>
<h3>Images in this gallery</h3>
</center>

<?php
$sql=mysql_query("select * from gallery_image where gallery_topic='$gname'  order by id DESC");
while ($get_images=mysql_fetch_array($sql))
{
	?>

<form enctype="multipart/form-data" method="post"><input type="hidden"
	name="img_id" value="<?php echo  $get_images['id']?>"> <input
	type="hidden" name="img_loc"
	value="<?php echo $get_images['image']; ?>"> <a
	href="<?php echo $get_images['image']; ?>"><img width="100px"
	height="100px" alt="<?php echo  $get_images['image_name']; ?>"
	src="<?php echo  $get_images['image'] ?>"></a> Image name <input
	type="text" value="<?php echo  $get_images['image_name']; ?>"
	name="image_name_01"> Add image description <textarea rows="" cols=""
	name="description_01"><?php echo  $get_images['image_details']  ?></textarea>
<input type="submit" name="del" value="Del"> <input type="submit"
	name="update" value="update"></form>
<br>
	<?php }
	if (isset($_POST['del'])) {
		$image_id=unhack($_POST['img_id']);
		$img_loc=unhack($_POST['img_loc']);
		unlink($img_loc);
		mysql_query("delete from gallery_image where id='$image_id' ");
		header('location:add_image.php?id='.$id.' ');
	}
	if (isset($_POST['update'])) {
		$img_id=unhack($_POST['img_id']);
		$img_name=unhack($_POST['image_name_01']);
		$img_desc=unhack($_POST['description_01']);
		mysql_query("update gallery_image set image_name='$img_name', image_details='$img_desc' where image_id='$img_id' ");
		header('location:add_image.php?id='.$id.' ');
}

?>
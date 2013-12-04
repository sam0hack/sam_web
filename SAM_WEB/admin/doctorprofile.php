<?php
require_once 'include_handler.php';

require 'condb.php';
require_once 'functions/varfilter.php';

$query=mysql_query("select * from profile")or die(mysql_error());
$img=mysql_fetch_array($query);
?>

<form enctype="multipart/form-data" method="post"><a
	href="<?php echo $img['img']; ?>"><img alt="Profile Pic" width="100"
	height="100" src="<?php echo $img['img']; ?>"></a>
<p>Please select checkbox if you want to update profile image<input
	type="checkbox" name="chk"> <lable for="profile_img">
<p>Profile Image<input type="file" name="myfile"></p>
</lable>
<hr />
<label for="name">Name<input type="text"
	value="<?php echo $img['doc_name'];?>" name="doc_name"></label> <label
	for="spc">Speciality<input type="text"
	value="<?php echo $img['speciality'];?>" name="doc_spc"></label> <label
	for="reg">Registration<input type="text"
	value="<?php echo $img['registration'];?>" name="doc_reg"></label> <label
	for="apo">Appointment<input type="text"
	value="<?php echo $img['appointent'];?>" name="doc_apo"></label> <label
	for="email">Email<input type="text" value="<?php echo $img['email'];?>"
	name="doc_email"></label><br />
<label for="intro">Introdution<br />
<textarea rows="10" cols="25" name="intro"
	style="margin-left: 2px; margin-right: 2px; width: 1282px;"><?php echo $img['introduction'];?></textarea></label><br />
<label for="exp">Experience<br />
<textarea rows="10" cols="25" name="exp"
	style="margin-left: 2px; margin-right: 2px; width: 1282px;"><?php echo $img['experience'];?></textarea></label><br />
<label for="edu">Education<br />
<textarea rows="10" cols="25" name="edu"
	style="margin-left: 2px; margin-right: 2px; width: 1282px;"><?php echo $img['education'];?></textarea></label><br />
<label for="ach">Achievement<br />
<textarea rows="10" cols="25" name="ach"
	style="margin-left: 2px; margin-right: 2px; width: 1282px;"><?php echo $img['achievement'];?></textarea></label><br />

<input type="submit" name="update" value="Update profile">

</form>

<?php
if (isset($_POST['update'])) {
	//Filter User Input
	$doc_name=unhack($_POST['doc_name']);
	$doc_spc=unhack($_POST['doc_spc']);
	$doc_reg=unhack($_POST['doc_reg']);
	$doc_apo=unhack($_POST['doc_apo']);
	$doc_email=unhack($_POST['doc_email']);
	$intro=unhack($_POST['intro']);
	$exp=unhack($_POST['exp']);
	$edu=unhack($_POST['edu']);
	$ach=unhack($_POST['ach']);
	//SET Upload variables
	$nam=$_FILES['myfile']['name'];
	$name=isimg($nam);//Check For Valid Image
	$tmp_name=$_FILES['myfile']['tmp_name'];
	$siz=$_FILES['myfile']['size'];
	$size=imgsize($siz);//Get Image Size
	$error=$_FILES['myfile']['error'];
	//Start Error Handling
	if ($error>0) {
		echo 'There is an ERROR';
	}
	if ($name==FALSE) {
		echo 'This is not Valid Image';
	}
	if ($size==FALSE) {
		echo 'Image size must be less than 5 mb';
	}
	//End Error Handling
	if (!empty($_POST['chk'])) {

		$destination='profile';//Destination of pic
		move_uploaded_file($tmp_name,"$destination/".$name.'.jpg');//Move uploaded image and convert image extention jpg
		$saved="$destination/".$name.'.jpg';
		$get=mysql_query("select doc_id from profile")or die(mysql_error());

		mysql_query("update profile  SET doc_name='$doc_name',img='$saved',speciality='$doc_spc',
	                             registration='$doc_reg',appointent='$doc_apo',email='$doc_email',
	                             introduction='$intro',experience='$exp',education='$edu',achievement='$ach' Where doc_id=1")or die(mysql_error());

		header('location:doctorprofile.php');
	}
	else

	{

		//Update Data
		mysql_query("update profile SET doc_name='$doc_name',speciality='$doc_spc',
	                             registration='$doc_reg',appointent='$doc_apo',email='$doc_email',
	                             introduction='$intro',experience='$exp',education='$edu',achievement='$ach' Where doc_id=1")or die(mysql_error());

		header('location:doctorprofile.php');
}
}

?>
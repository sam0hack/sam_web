<?php
require_once 'include_handler.php';

require 'condb.php';
//require_once 'functions/varfilter.php';
require_once 'functions/image_handler.php';

$msg=unhack($_REQUEST['mgs']);
echo $msg;
$query=mysql_query("select * from home_container");
while ($data=mysql_fetch_array($query))
{
?>

<form enctype="multipart/form-data" method="post">
<p>
    Home text 1
    <textarea name="txt1" rows="" cols=""
	style="margin: 2px; width: 307px; height: 46px;"><?php echo $data['txt1']; ?></textarea>
    Home text 2
    <textarea name="txt2" rows="" cols=""
	style="margin: 2px; width: 307px; height: 46px;"><?php echo $data['txt2']; ?></textarea>
    
    Home Image 1<input
	type="file" name="myfile"> 
    
    Home Image 2<input
	type="file" name="myfile2">
    
    Color 1<input class="color" type="text" name="c1" value="<?php echo $data['c1']; ?>">
    Color 2<input  class="color" type="text" name="c2" value="<?php echo $data['c2']; ?>">   
    <a href="http://www.w3schools.com/tags/ref_colorpicker.asp" target="_blank">Get more color's</a>
    
    <input type="submit" name="insert"
	value="Insert"></p>
</form>
<?php
}
if (isset($_POST['insert']))
{

	$txt1=unhack($_POST['txt1']);
	$txt2=unhack($_POST['txt2']);
        $c1=  unhack($_POST['c1']);
        $c2=  unhack($_POST['c2']);

        //Properties of the uploaded file
	$name=$_FILES['myfile']['name'];
	$type=$_FILES['myfile']['type'];
	$size=$_FILES['myfile']['size'];
	$tmp_name=$_FILES['myfile']['tmp_name'];
	$error=$_FILES['myfile']['error'];
	$location="images";//SET Location for image

        $name2=$_FILES['myfile2']['name'];
	$type2=$_FILES['myfile2']['type'];
        $size2=$_FILES['myfile2']['size'];
	$tmp_name2=$_FILES['myfile2']['tmp_name'];
	$error2=$_FILES['myfile2']['error'];
	$location2="images";//SET Location for image

        
	$getimage1=img_uploader($name, $type, $size, $tmp_name, $error, $location);

        $getimage2=img_uploader($name2, $type2, $size2, $tmp_name2, $error2, $location2);

        
	if (!empty($txt1)){
		mysql_query("Update home_container set 
                        txt1='$txt1',txt2='$txt2',
                        
                        c1='$c1',c2='$c2'
                            where `id`=1
                        ")or die(mysql_error());
                header('location:home_config.php');            
	}
        
        
        
	if (!empty($name)){
		mysql_query("Update home_container set 
                        txt1='$txt1',txt2='$txt2',
                        img1='$getimage1',
                            c1='$c1',c2='$c2'
                            where `id`=1
                        ")or die(mysql_error());
	header('location:home_config.php');
                
        }
        
        
	if (!empty($name2)){
		mysql_query("Update home_container set 
                        txt1='$txt1',txt2='$txt2',
                        img2='$getimage2',
                            c1='$c1',c2='$c2'
                            where `id`=1
                        ")or die(mysql_error());
	
                header('location:home_config.php');
        }
        
        
//	else
//	{
//		echo 'Can t insert null values' ;
//	}
}
?>


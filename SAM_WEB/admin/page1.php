<?php
require_once 'include_handler.php';
require 'functions/varfilter.php';
require 'condb.php';
?>
<h3>Page1</h3>
<?php
$sql=  mysql_query("select * from page1 where id=1")or die(mysql_error());
$data=  mysql_fetch_array($sql);
?>
<form method="POST"  enctype="multipart/form-data">
    <input type="hidden" name="chk" value="<?php echo $data['id']; ?>" >
<p>Page heading <input type="text" value="<?php echo $data['page_heading']; ?>" name="page_h" value=""></p>
<p>Image <input type="file" name="myfile"></p><a href="<?php echo $data['img']; ?>"><img height="100px" width="100px"  src="<?php echo $data['img']; ?>"></a>
<p>Page contain <textarea style="margin: 2px; width: 318px; height: 140px;" name="page_c"><?php echo $data['page_containt']; ?></textarea>
    
    
    
<p><input type="submit" name="sub" value="Submit"></p>
</form>
<?php
if(isset($_POST['sub']))
{
    $page_h=  unhack($_POST['page_h']);
    $page_c=  unhack($_POST['page_c']);
    $name=$_FILES['myfile']['name'];
    $tmp_name=$_FILES['myfile']['tmp_name'];
    $type=$_FILES['myfile']['type'];
    $destination="images";
    
    if(empty($name))
    {
    mysql_query("update page1 set page_heading='$page_h',page_containt='$page_c' where id=1")or die(mysql_error());
    header('location: page1.php');    
    
    }
if(!empty($name))
{
move_uploaded_file($tmp_name, "$destination/".$name);
    $saved="$destination/".$name;
    mysql_query("update page1 set img='$saved',page_heading='$page_h',page_containt='$page_c' where id=1")or die(mysql_error());

    
 header('location: page1.php');
 
}

   
}

?>
<?php
require_once 'include_handler.php';
require 'functions/varfilter.php';
require 'condb.php';
?>
<form method="post">
    <p>Topic<input type="text" name="topic1" size="80"></p>
    <p>Contain<textarea name="contain1" style=" height: 125px; width: 631px; margin: 0px;"></textarea></p>
    <input  type="submit" name="submit" value="Submit">
</form>
<hr>
<h2>Update and Delete</h2> 
<hr>
<?php

$sql=  mysql_query("select * from explore");
while ($explore=  mysql_fetch_array($sql))
{

?>

<form method="post">
    <input type="hidden" name="chk" value="<?php echo $explore['id']; ?>">
    <p>Topic<input type="text" name="topic" size="80" value="<?php echo $explore['topic']; ?>"></p>
    <p>Contain<textarea name="contain" style=" height: 125px; width: 631px; margin: 0px;"><?php echo $explore['contain']; ?></textarea></p>
    <p><input  type="submit" name="update" value="Update">
    <input  type="submit" name="del" value="Delete"></p>
</form>
<hr>
<?php
}
?>
<?php
if(isset($_POST['submit']))
{
    
     $topic=  unhack($_POST['topic1']);
  $contain=  unhack($_POST['contain1']);
 mysql_query("insert into explore values('NULL','$topic','$contain')")or die(mysql_error());
header('location:explore.php');
    
}

if(isset($_POST['update']))
{
 $chk=  unhack($_POST['chk']);
 $topic=  unhack($_POST['topic']);
 $contain=  unhack($_POST['contain']);
if(!empty($topic) && !empty($contain))
{
mysql_query("update explore set topic='$topic',contain='$contain' where id='$chk'")or die(mysql_error());
header('location:explore.php');
}
 
 
}
if(isset($_POST['del']))
{
    $chk=  unhack($_POST['chk']);
    mysql_query("delete from explore where id='$chk'")or die(mysql_error());  
header('location:explore.php');
}
<?php 
require_once 'include_handler.php';

require 'condb.php'; ?>
<form method="post">
<p>Hospital/Clinic name*<input type="text" name="h_name"></p>
<p>Designation<input type="text" name="des"></p>
<p>Location*<input type="text" name="loc"></p>
<p>Timing<input placeholder="10:00" type="text" name="time"></p>
<p>Day to Day<input placeholder="monday to friday" type="text" name="day"></p>
<p>Contact number<input type="text" name="contact"></p>
<p><input type="submit" value="Add" name="add"></p>
</form>
    <?php
if(isset($_POST['add']))
{
    $h_name=$_POST['h_name'];
    $loc=$_POST['loc'];
    $des=$_POST['des'];
    $time=$_POST['time'];
    $day=$_POST['day'];
    $con=$_POST['contact'];
    if(!empty($h_name) && !empty($loc))
    {
        mysql_query("insert into doctor_practice values('NULL','$h_name','$loc','$day','$time','$des','$con')");       
        
    }
    else
    {
        echo 'Mendetory fields required *';
    }
}
echo '<hr>';
echo '<p>Update and Delete </p>';
echo '<hr>';
$q=  mysql_query("select * from doctor_practice");
while ($f=mysql_fetch_array($q)) {
    
?>

<form method="post">
    <p><input type="hidden" value="<?php echo $f['id']; ?>" name="chk"></p>    
<p>Hospital/Clinic name*<input value="<?php echo $f['h_name']; ?>" type="text" name="h_name"></p>
<p>Designation<input type="text" value="<?php echo $f['designation']; ?>" name="des"></p>
<p>Location*<input type="text" value="<?php echo $f['location']; ?>" name="loc"></p>
<p>Timing<input value="<?php echo $f['time']; ?>" type="text" name="time"></p>
<p>Day to Day<input value="<?php echo $f['day']; ?>" type="text" name="day"></p>
<p>Contact number<input type="text" value="<?php echo $f['phone']; ?>" name="contact"></p>
<p><input type="submit" value="Update" name="update"><input type="submit" value="Delete" name="del"></p>
<?php } 

if(isset($_POST['update']))
{
    
    $chk=$_POST['chk'];
    $h_name=$_POST['h_name'];
    $loc=$_POST['loc'];
    $des=$_POST['des'];
    $time=$_POST['time'];
    $day=$_POST['day'];
    $con=$_POST['contact'];
    if(!empty($h_name) && !empty($loc))
    {
        mysql_query("update doctor_practice set h_name='$h_name', location='$loc',day='$day',time='$time',designation='$des',phone='$con' where id=$chk");       
    header('location:doctor_practice.php');    
    }
    else
    {
        echo 'Mendetory fields required *';
    }
}

if(isset($_POST['del']))
{
    $chk=$_POST['chk'];
    mysql_query("delete from doctor_practice where id=$chk");
    header('location:doctor_practice.php');    
}
?>
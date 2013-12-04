<?php
require_once 'include_handler.php';

require 'condb.php';

?>
<form method="post">
<hr>
<h2>Paste your social network's link</h2>
<hr>
<p>Facebook<input type="text" name="fb"></p>
<p>Twitter<input type="text" name="tw"></p>
<input type="submit" name="sub" value="Submit">
</form>
<br>
<hr>
<h2>Add your twitter Widget </h2> How to Make widget <a target="_blank" href="images/step1.png" >Step 1</a>||<a target="_blank" href="images/step2.png" >Step 2</a>||<a target="_blank" href="images/step3.png" >Step 3</a>||<a target="_blank" href="images/step4.png" >Step 4</a>||<a target="_blank" href="images/step5.png" >Step 5</a>||<a target="_blank" href="images/step6.png" >Step 6</a>  


<hr>
<form method="post">
<input type="text" name="widget" placeholder="Paste your widget code hare" size="200">
<p><input type="submit" name="wid" value="Submit"></p>
</form>
    <?php
if($_POST['sub'])
{
    $facebook=$_POST['fb'];
    $twitter=$_POST['tw'];
   if(!empty($facebook))
   {
       mysql_query("update sns set facebook='$facebook' where id=1");   
   }
    
   if(!empty($twitter))
   {
    mysql_query("update sns set twitter='$twitter' where id=1");   
   
   }
}
if(isset($_POST['wid']))
{
$widget=$_POST['widget'];
$enc=  base64_encode($widget);
if(!empty($widget))
{
mysql_query("update sns set twit='$enc' where id=1")or die(mysql_error());   

}
}
echo '<br>';
$sql=  mysql_query("select twit from sns");
$f=  mysql_fetch_array($sql);
$ff=$f['twit'];
$d=  base64_decode($ff);
echo $d;
?>




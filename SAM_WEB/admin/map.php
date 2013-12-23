<?php
require_once 'include_handler.php';


require 'condb.php';
$sql=  mysql_query("select map from map");
$map=  mysql_fetch_array($sql);
?>

<form method="post">
    <p>Paste your google map link here<input type="text" name="google" value="" size="200"></p>
<input type="submit" name="map" value="Submit">

</form>
    <?php

if(isset($_POST['map']))
{
    $google= $_POST['google'];
    if(!empty($google))
    {
        mysql_query("update map set map='$google' where id=1 ");    
       
        
        
    }
    else
    {
        echo 'Please paste your google map link';
    }
}
echo '<br/>';
echo $map['map'];
?>
<br>
<hr>
<center><h2>How to get google map link</h2></center>
<hr>
<a href="images/map.png"><img src="images/map.png" height="700" width="800"></a>
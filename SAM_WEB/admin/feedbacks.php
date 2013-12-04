<?php require_once 'include_handler.php';
require 'condb.php';?>
<p>You have <?php 
$c=mysql_query("select COUNT(`feedback_id`) from feedback ")or die(mysql_error());
$co=mysql_fetch_array($c); echo $co[0];?> FeedBacks</p>
<?php

$feed=mysql_query("select * from feedback order by feedback_id ASC")or die(mysql_error());
while ($back=mysql_fetch_array($feed))
{
	?>
Name:-
<label><?php echo  $back[2];?></label>
<br />
Email:-
<label><?php echo  $back[3];?></label>
<br />
Phone:-
<label><?php echo $back[4];?></label>
<br />
FeedBack:-
<label><?php echo  $back[5];?></label>
<br />

	<?php }?>
</body>
</html>

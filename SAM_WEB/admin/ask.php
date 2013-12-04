<?php
require_once 'include_handler.php';

require 'condb.php';
require_once 'functions/varfilter.php';
$msg=unhack($_REQUEST['msg']);
?>
<h3><font color="red"><?php echo $msg;?></font></h3>
<form method="post" action="question_answers.php">
<p>Question Title<input type="text" name="qt"></p>
<p>Your Question<textarea id="" name="ques" cols="50" rows="5"
	style="padding: 3px; width: 550px"></textarea></p>
<p><input type="submit" name="submit" value="Submit"></p>
</form>

<hr />
<hr />
<center>
<h3>Recent Questions</h3>
</center>
<hr />
<?php
$sql=mysql_query("select * from ask_me")or die(mysql_error());
while ($query=mysql_fetch_array($sql))
{
	?>
<form method="post" action="question_answers.php"><input type="hidden"
	name="id" value="<?php echo $id=$query['question_id']; ?>"> Question
Title: <br>
<textarea readonly="readonly"><?php echo $query['question_title'];?></textarea>
<br>
Quesion: <br>
<textarea cols="50" rows="5" style="padding: 3px; width: 550px"
	readonly="readonly"><?php echo $query['question'];?></textarea><br>
	<?php
	$answers=mysql_query("select answer,last_reply,user from answers where question_id='$id' ")or die(mysql_error());
	while ($ans=mysql_fetch_array($answers))
	{
		?> <br>
Answer By : <?php  echo $ans['user']; ?> &nbsp;&nbsp;&nbsp;&nbsp;Replay
		<?php echo "Date/Time : ".$ans['last_reply'];?> <br>
<textarea cols="50" rows="5" style="padding: 3px; width: 550px"
	readonly="readonly"><?php echo $ans['answer'];?></textarea><br>

		<?php }?> Your name <input type="text" name="user"> Give an answer <input
	type="text" name="ans"> <input type="submit" name="sent_ans"
	value="Post"></form>
<hr />
<hr />
<?php 
}
?>
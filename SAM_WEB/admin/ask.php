<?php
require_once 'include_handler.php';

require 'condb.php';
require_once 'functions/varfilter.php';
require_once '../functions/time_ago_php_library.php';
$msg=unhack($_REQUEST['msg']);
?>
<h3><font color="red"><?php echo $msg;?></font></h3>
<form method="post" action="question_answers.php">
    <p>Question Title<input autofocus type="text" name="qt"></p>
<p>Your Question<textarea autofocus id="" name="ques" cols="50" rows="5"
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
$sql=mysql_query("select * from ask_me order by question_id desc")or die(mysql_error());
while ($query=mysql_fetch_array($sql))
{
	?>
<form method="post" action="question_answers.php"><input type="hidden"
	name="id" value="<?php echo $id=$query['question_id']; ?>"> Question
Title: <br>
<input type="hidden" name="dque" value="<?php echo $query['question_id'];?>">
<textarea readonly="readonly"><?php echo $query['question_title'];?></textarea>
<br> <input type="submit" name="del_que" style=" background: #003399; color: wheat;  " value="Delete this Question"><br>
Quesion: <br>
<textarea cols="50" rows="5" style="padding: 3px; width: 550px"
	readonly="readonly"><?php echo $query['question'];?></textarea><br>
	<?php
	$answers=mysql_query("select answer_id,answer,last_reply,user from answers where question_id='$id' ")or die(mysql_error());
	while ($ans=mysql_fetch_array($answers))
	{
            ?><br>
Answer By : <?php  echo $ans['user']; ?> &nbsp;&nbsp;&nbsp;&nbsp;Reply
		<?php 
                $timeAgoObject = new convertToAgo; // Create an object for the time conversion functions
// timestamp
$ts=$ans['last_reply'];
$convertedTime = ($timeAgoObject -> convert_datetime($ts)); // Convert Date Time
$when = ($timeAgoObject -> makeAgo($convertedTime)); // Then convert to ago time

echo $when;
                
?> <br>

<textarea cols="50" rows="5" style="padding: 3px; width: 550px"
	readonly="readonly"><?php echo $ans['answer'];?></textarea><br>
<!--<input type="text" name="dans" value="<?php //echo $ans['answer_id']; ?>"/>
<input type="submit" name="del_ans" style=" background: #003399; color: wheat;  " value="Delete this answer">-->
        <a href="question_answers.php?v*1*1*1*1*1*1=<?php echo $ans['answer_id']; ?>";>Delete this answer</a>
<br>

		<?php }?> Give an answer <textarea  name="ans" cols="50" rows="5" style="padding: 3px; width: 550px; border:2px solid turquoise;; border-color: turquoise;  "></textarea> <input type="submit" name="sent_ans"
	value="Post"></form>
<hr />
<hr />
<?php 
}
?>
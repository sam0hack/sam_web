<?php
require 'html_includes/main_menu.php';
require 'html_includes/sidebar.php';
?>
<div class="content">
<h2>Ask a Question</h2>
<h3><font color="red"><?php $msg=$_REQUEST['msg']; if (!empty($msg)) { echo $msg; }  ?></font></h3>
<form action="ask_form.php" method="post">
<div class="form_settings">
<p><span>Question Subject</span><input type="text" name="subject"
	value="" /></p>
<p><span>Your Question</span><textarea id="" name="que" cols="50"
	rows="5" style="padding: 3px; width: 550px"></textarea></p>
<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit"
	type="submit" name="send" value="Send" /></p>
</div>
</form>
<hr>
<center>
<h2>Recent Questions</h2>
</center>
<br>
<?php
$sql=que();
while ($que=mysql_fetch_array($sql))
{
	$id=$que[0];

	?>
<form method="post" action="ans_form.php">
<div class="form_settings">

    <p><span>Question Subject</span><input type="text" style="background: lavender; " readonly="" name="name"
	value="<?php echo $que['question_title'];  ?>" /></p>
<input type="hidden" name="id"
	value="<?php echo $que['question_id']; ?>">
<p><span>Question</span><textarea style="background: #7ab5d3; " id="" readonly="" name="ques" cols="50" rows="5"
	style="padding: 3px; width: 550px"><?php echo $que['question'];  ?></textarea></p>
<br>
	<?php  $ans=mysql_query("select answer from answers where question_id='$id' ");
	while ($aa=mysql_fetch_array($ans))
	{
			
			
		if (!empty($aa)) {  ?>

<p><span>Answer</span><textarea readonly style="background-color: lightsteelblue; " name="ans" cols="50" rows="5"
	style="padding: 3px; width: 550px"><?php echo $aa['answer']; ?></textarea></p>
		<?php } } ?>
        <p><span>Give an answer</span><textarea  name="give_ans" cols="50"
	rows="5" style="padding: 3px; width: 550px"><?php echo $aa['answer']; ?></textarea></p>
<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit"
	type="submit" name="ans_sub" value="Send" /></p>

</div>
<hr>
		<?php } ?></form>
</div>
</div>
		<?php require 'html_includes/footer.php'; ?>
<?php
require 'html_includes/main_menu.php';
require 'html_includes/sidebar.php';
require_once 'functions/time_ago_php_library.php';
?>
<div class="content">
<h2>Ask a Question</h2>
<h3><font color="red"><?php 
$msg=$_REQUEST['msg']; 
if (!empty($msg) AND $msg!='x')
    { echo $msg; } 
    
    if($msg=='x')
    {
       echo  "{$_REQUEST['v']}<br/>";
    ?>    
    <font style=" background: yellow; color: #000000; font-size:14px;   ">A verification code has been send to your email. please enter verification code for publish your Question </font> 
    <form method="post" action="ask_form.php"><input name="code"  style=" width:100px; background: yellow; color: tomato; border: 2px solid;  border-color: tomato;    " type="text" placeholder="Enter Your code" name="code" maxlength="5">
        <input  style=" border: 2px solid skyblue; background: cornflowerblue; color: whitesmoke;  " type="submit" value="Post" name="subcode">
  </form>
    
    <?php
        }
            
    ?></font></h3>
<form action="ask_form.php" method="post">
<div class="form_settings">
<p><span>Question Topic</span><input type="text" name="subject"
	value="" autofocus required/></p>
<p><span>Place</span><input type="text" size="8" name="place"
                            value=""  autofocus required/></p>
<p><span>Email</span><input type="email" name="email"
	value="" autofocus required /></p>
<p><span>Your Question</span><textarea autofocus required id="" name="que" cols="50"
	rows="5" style="padding: 3px; width: 550px"></textarea></p>
<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit"
	type="submit" name="send" value="Post" /></p>
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
    
    <p><span>Question Topic <h4 style="float: right; "><i></i> <?php echo $que['city'];  ?></h4></span><input type="text" style="background: lavender; " readonly="" name="name"
	value="<?php echo $que['question_title'];  ?>" /></p>
<input type="hidden" name="id"
	value="<?php echo $que['question_id']; ?>">
<p><span>Question</span><textarea style="background: #7ab5d3; " id="" readonly="" name="ques" cols="50" rows="5"
	style="padding: 3px; width: 550px"><?php echo $que['question'];  ?></textarea></p>
<br>
	<?php  $ans=mysql_query("select * from answers where question_id='$id'  AND verify='1' ");
	while ($aa=mysql_fetch_array($ans))
	{
			
			
		if (!empty($aa)) {  ?>

<p><span>Reply<h4 style="float: right;  "><i >Reply by:  &nbsp;&nbsp;&nbsp;</i> <?php echo  $aa['user']."&nbsp;&nbsp;&nbsp;&nbsp;"; 

$timeAgoObject = new convertToAgo; // Create an object for the time conversion functions
// timestamp
$ts=$aa['last_reply'];
$convertedTime = ($timeAgoObject -> convert_datetime($ts)); // Convert Date Time
$when = ($timeAgoObject -> makeAgo($convertedTime)); // Then convert to ago time

echo $when;
   ?></h4></span><textarea readonly style="background-color: lightsteelblue; " name="ans" cols="50" rows="5"
	style="padding: 3px; width: 550px"><?php echo $aa['answer']; ?></textarea></p>
		<?php } } ?>
        <p><span>Continue discussion</span><textarea  name="give_ans" cols="50"
	rows="5" style="padding: 3px; width: 550px" autofocus required><?php echo $aa['answer']; ?></textarea></p>
<p style="padding-top: 15px"><p><span>Email</span><input type="email" name="email"
                                                             value="" required autofocus /></p><span>&nbsp;</span><input class="submit"
                                         type="submit"  name="ans_sub" value="Post"  /></p>

</div>
<hr>
		<?php } ?></form>
</div>
</div>
		<?php require 'html_includes/footer.php'; ?>
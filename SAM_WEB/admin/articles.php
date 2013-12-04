<?php
require_once 'include_handler.php';

require 'condb.php';
require_once 'functions/varfilter.php';
if (isset($_POST['sub']))
{


	date_default_timezone_set ("Asia/Kolkata");
		
	$time=date("H:i:s");
	$date=date("y-m-d");
	$timestamp="$date $time";

	$topic=unhack($_POST['topic']);
	$article=unhack($_POST['article']);

	if (!empty($topic) && !empty($article)){
		mysql_query("insert into articles values('NULL','$topic','$article','$timestamp')")or die(mysql_error());
		header('location: articles.php');
	}
	else
	{
		echo 'Fill all fields ';
	}
}
?>
<form method="post">
<p>Topic<input type="text" name="topic"></p>
<label for="intro">Article<br />
<textarea rows="10" cols="25" name="article"></textarea></label><br />
<input type="submit" name="sub" value="Post"></form>
<hr />
<?php
$data=mysql_query("select * from articles ")or die(mysql_error());
while ($article=mysql_fetch_array($data))
{
	?>
<form method="post"><input type="hidden" name="id"
	value="<?php echo $article['article_id'];?>">
<p>Topic<input type="text"
	value="<?php echo $article['article_topic_id'];?>" name="topic"></p>
<label for="intro">Article<br />
<textarea rows="10" cols="25" name="article"><?php echo $article['article'];?></textarea></label><br />
<input type="submit" name="update" value="Update"></form>
	<?php }
	if (isset($_POST['update']))
	{
		$id=unhack($_POST['id']);
		$topic=unhack($_POST['topic']);
		$article=unhack($_POST['article']);
		if (!empty($topic) && !empty($article))
		{
			mysql_query("update articles set article_topic_id='$topic' , article='$article' where article_id='$id' ")or die(mysql_error());
			header('location: articles.php');
		}
		else
		{
			echo 'Update';
		}
	}

	?>
<?php
require_once 'include_handler.php';
require 'condb.php';
require_once 'functions/image_handler.php';
if (isset($_POST['insert']))
{
	$title=unhack($_POST['title']);
	$web_name=unhack($_POST['web_name']);
	$tag_line=unhack($_POST['tag_line']);
	$footer=unhack($_POST['footer']);
	if (!empty($web_name))
	{
		mysql_query("update website set site_name='$web_name' where id=1 ");
	}

	if (!empty($tag_line))
	{
		mysql_query("update website set tag_line='$tag_line' where id=1 ");
	}

	if (!empty($title))
	{
		mysql_query("update website set title='$title' where id=1 ");
	}

	if (!empty($footer))
	{
		mysql_query("update website set footer='$footer' where id=1 ");
	}


}
?>
<form method="post">
<p>Website Title<input type="text" name="title"></p>
<p>Website Name<input type="text" name="web_name"></p>
<p>Tag line<input type="text" name="tag_line"></p>
<p>Footer<input type="text" name="footer"></p>
<p><input type="submit" name="insert" value="Insert"></p>
</form>

<?php
require 'html_includes/main_menu.php';
require 'html_includes/sidebar.php';
?>
<?php
$article=article();
while ($ar=mysql_fetch_array($article))
{
	$topic =$ar['article_topic_id'];
	$article_name=$ar['article'];
	$date=$ar['article_date'];

	?>
<div class="content">
<table width="700" border="1">
	<tr>
		<th scope="col"><?php echo $topic; ?></th>
		<th width="540" scope="col">Date <?php echo $date; ?></th>
	</tr>
</table>
<table align="top" width="700" height="150" border="1">
	<tr>
		<th scope="col"><?php echo $article_name; ?></th>
	</tr>
</table>
<hr>
	<?php }?></div>
</div>
	<?php require 'html_includes/footer.php'; ?>
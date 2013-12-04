<?php
require 'html_includes/main_menu.php';
require 'html_includes/sidebar.php';
?>
<div class="content">

<h2><?php $id=$_REQUEST['id']; $img=gallery($id); $name=mysql_fetch_array($img);
echo $name['gallery_topic'];
?></h2>
<ul>
<?php
$g=gallery($id);
while ($gname=mysql_fetch_array($g))
{
	?>

	<li><a href="admin/<?php echo $gname['image']; ?>" target="_blank"> <img
		src="admin/<?php echo $gname['image']; ?>" height="200" width="200"> </a>
		<?php echo $gname['image_details']; ?></li>
		<?php } ?>

</ul>
</div>
</div>
		<?php require 'html_includes/footer.php'; ?>
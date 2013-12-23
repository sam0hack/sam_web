<?php
require 'html_includes/main_menu.php';
require 'html_includes/sidebar.php';
?>
<div class="content">
<h2>Gallery</h2>

<?php
$g=gallery('gname');
while ($gname=mysql_fetch_array($g))
{
	?>
<br>
<ul>
	<li><a href="images.php?id=<?php echo $gname[0]; ?>" target="_blank"> <?php echo $gname['gallery_topic']; ?>
	</a></li>
</ul>

	<?php } ?>


</div>
</div>
	<?php require 'html_includes/footer.php'; ?>
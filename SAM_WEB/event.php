<?php
require 'html_includes/main_menu.php';
require 'html_includes/sidebar.php';
$events=event();
while ($event=mysql_fetch_array($events))
{
	?>
<div class="content">

<p><font color="orange">Category </font> <?php echo $event['event_type'] ?></p>
<p><font color="orange">Event name </font><?php echo $event['event_heading'] ?></p>
<p><a href="admin/<?php echo $event['event_image'] ?>"><img
	height="100px" width="100px"
	src="admin/<?php echo $event['event_image'] ?>"></a></p>
<p><?php echo $event['event_details'] ?></p>

<hr>
	<?php
}
?></div>
</div>

<?php require 'html_includes/footer.php'; ?>